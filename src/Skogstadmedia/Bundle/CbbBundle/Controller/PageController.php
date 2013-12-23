<?php

namespace Skogstadmedia\Bundle\CbbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('CbbBundle:Full:home.html.twig');
    }
}
