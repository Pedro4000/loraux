<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Service\MailToNewMember;
use Google_Client;
use Google_Service;
use Google_Service_Calendar;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Finder\Finder;




class IndexController extends AbstractController
{
    private $params;
    private $client;

    public function __construct (Google_Client $client, ParameterBagInterface $params)
    {
        $this->client = $client;
        $this->params = $params;
    }

    /**
     * @Route("/index", name="index")
     * @param Request $request
     * @param MailToNewMember $mailToNewMember
     * @param MailerInterface $mailerInterface
     * @return Response
     * @throws \Google_Exception
     */
    public function index(Request $request, MailToNewMember $mailToNewMember, MailerInterface $mailerInterface)
    {
        $em = $this->getDoctrine()->getManager();
        $newUser = new User();
        $userForm = $this->createForm(UserType::class, $newUser, [
            'action' => $this->generateUrl('index'),
            'method' => 'POST',
        ] );


        $userForm->handleRequest($request);
        
/*        $mailToNewMember->sendMailToNewMember($mailerInterface);*/

        // On traite le formulaire et on vient enregister le nouvel utilisateur
        if ($userForm->isSubmitted() && $userForm->isValid()  ) {
            $userForm->getData();
            $newUser->setIsMailAddressVerified(false);
            $em->persist($newUser);
            $em->flush();
        }

        $finder = new Finder();
        $finder->in(__DIR__.'/../..');
        $credentialsFiles = $finder->files()->name('credentials.json');
        foreach($credentialsFiles as $credentialsFile) {
            $absoluteFilePathCredentials = $credentialsFile->getRealPath();
        }

        $jsonToken = file_get_contents($absoluteFilePathCredentials);
        $jsonToken;

        $accessToken = $this->getParameter('app.google_client_id');

        $client = new Google_Client();
        $client->setApplicationName('Google Calendar API PHP Quickstart');
        $client->setScopes(
        [
            Google_Service_Calendar::CALENDAR
        ]);
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');
/*        $client->setAuthConfig($absoluteFilePathCredentials);

        $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
        $client->setRedirectUri($redirect_uri);*/


        $client->setAccessToken($this->getParameter(app.google_calendar_access_token));

        $guzzleClient = new \GuzzleHttp\Client(['curl'=>[CURLOPT_SSL_VERIFYPEER=>false]]);
        $client->setHttpClient($guzzleClient);


        $service = new Google_Service_Calendar($client);
        $optParams = array(
            'maxResults' => 10,
            'orderBy' => 'startTime',
            'singleEvents' => true,
            'timeMin' => date('c'),
        );
        $calendarId = 'Pierre.brickley@gmail.com';
        $results = $service->events->listEvents($calendarId, $optParams);
        $events = $results->getItems();





        $googleService = new Google_Service_Calendar($client);
        $calendar = $googleService->calendars->get('pierre.brickley@gmail.com');

        dump($calendar);die;



/*        $client->addScope(Google_Service_Plus::https://wwwker.googleapis.com/auth/calendar);*/


/*        $calendarId = 'primary';
        $event = $service->events->insert($calendarId, $event);
        printf('Event created: %s\n', $event->htmlLink);*/





        return $this->render('index.html.twig', [
            'number' => 3,
            'userForm'=> $userForm->createView()
        ]);
    }



    /**
     * @Route("/resume", name="resume")
     */
    public function resume()
    {
        return $this->file('/assets/img/resume/CV_Pbrickley_111118.pdf');
    }

}
