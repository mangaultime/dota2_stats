<?php

namespace FDP\Dota2ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FDPDota2ApiBundle:Default:index.html.twig', array('name' => $name));
    }
}
