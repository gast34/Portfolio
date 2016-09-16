<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AdvertController extends Controller {

    /**
     * 
     * @Route("/")
     * @Template("index.html.twig")
     */
    public function getIndex() {

        

    }

}
