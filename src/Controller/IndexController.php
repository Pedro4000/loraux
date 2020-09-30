<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Service\MailToNewMember;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy;
use Symfony\Component\Mailer\MailerInterface;


class IndexController extends AbstractController
{

    /**
     * @Route("/index", name="index")
     * @param Request $request
     * @param MailToNewMember $mailToNewMember
     * @param MailerInterface $mailerInterface
     * @return Response
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
