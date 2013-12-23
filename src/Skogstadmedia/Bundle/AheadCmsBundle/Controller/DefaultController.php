<?php

namespace SkogstadMedia\Bundle\AheadCmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AheadCmsBundle:Default:index.html.twig', array('name' => $name));
    }
}
