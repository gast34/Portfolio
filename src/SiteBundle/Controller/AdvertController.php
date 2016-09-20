<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class AdvertController extends Controller {

    /**
     * 
     * @Route("/" , name = "home")
     * @Template("index.html.twig")
     */
    public function getIndex(Request $request) {
        
         $message = \Swift_Message::newInstance();
        $message->setSubject("Objet");
        $message->setFrom('saboy.gaston34@gmail.com');
        $message->setTo('kayye34@gmail.com');
        // pour envoyer le message en HTML
        $message->setBody('Hello world');
        // pour envoyer le message en HTML
        $message->setBody('<p>Hello world</p>','text/html'); 
        //envoi du message
         $this->get('mailer')->send($message);
/*
        $email = $request->request->get('mail');
        $obj = $request->request->get('objet');
        $corps = $request->request->get('corp');
      */
        
        
    }

}
