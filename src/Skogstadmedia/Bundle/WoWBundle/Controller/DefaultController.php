<?php

namespace Skogstadmedia\Bundle\WoWBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WoWBundle:Default:index.html.twig', array('name' => $name));
    }
}
