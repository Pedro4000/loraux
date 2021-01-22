<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Service\CalendarService;
use App\Service\MailToNewMember;
use Google_Client;
use Google_Service;
use Google_Service_Calendar;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use Guzzle\Http\Exception\ClientErrorResponseException;
use GuzzleHttp\Exception\ClientException;


class YoutubeController extends AbstractController
{
    private $params;
    private $client;
    public $em;

    public function __construct(Google_Client $client, ParameterBagInterface $params, SessionInterface $session)
    {
        $this->client = $client;
        $this->params = $params;
        $this->session = $session;
    }


    /**
     * @Route("/createYoutubePlaylist", name="createYoutubePlaylist")
     * @param Request $request
     */
    public function createYoutubePlaylistAction(Request $request)
    {

        $client = new Google_Client();
        $client->setApplicationName('Culture Club');
        $guzzleClient = new \GuzzleHttp\Client(array('curl' => array(CURLOPT_SSL_VERIFYPEER => false)));
        $client->setHttpClient($guzzleClient);
        $client->setAuthConfig('credentials.json');
        $client->addScope("https://www.googleapis.com/auth/youtube");
        $client->setPrompt('select_account consent');

        $client->setRedirectUri('http://127.0.0.1:8000/createYoutubePlaylistCode');
        $authUrl = $client->createAuthUrl();

        return $this->redirect($authUrl);

    }

    /**
     * @Route("/createYoutubePlaylistCode", name="createYoutubePlaylistCode")
     * @param Request $request
     */
    public function createYoutubePlaylistCodeAction(Request $request)
    {
        $request->getPathInfo();
        $google_code = $request->query->get('code');
        $this->session->set('auth_code',$google_code);

        $dateTimeNow = new \DateTime();
        $dateTime3339 = $dateTimeNow->format("Y-m-d\TH:i:sP");

        // Set up the google client with the general info
        $client = new Google_Client();
        $client->setAuthConfig('credentials.json');
        $client->setScopes([
            'https://www.googleapis.com/auth/youtube'
        ]);
        $client->setRedirectUri('http://127.0.0.1:8000/createYoutubePlaylistCode');


        $guzzleClient = new \GuzzleHttp\Client(array('curl' => array(CURLOPT_SSL_VERIFYPEER => false)));
        $client->setHttpClient($guzzleClient);

        $accessToken = $client->fetchAccessTokenWithAuthCode($google_code);
        $client->setAccessToken($accessToken);
        $this->session->set('access_token', $accessToken);

        dump(4);die;


        if ($this->session->get('access_token')) {
            dump(5);die;
            $client->setAccessToken($this->session->get('access_token'));
            if ($client->isAccessTokenExpired()) {
                // Refresh the token if possible, else fetch a new one.
                if ($client->getRefreshToken()) {
                    $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
                } else {
                    $this->oauth($client);
                }
            }
            $client->setAccessToken($this->session->get('access_token'));
            $service = new Google_Service_YouTube($client);
            $queryParams = [
                'mine' => true
            ];

            $response = $service->channels->listChannels('snippet,contentDetails,statistics', $queryParams);

            dump($response);die;
            return $results->getItems();
        }
    }


}

