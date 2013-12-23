<?php

namespace Skogstadmedia\Bundle\CbbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContentController extends Controller
{
    public function mainMenuAction()
    {
        return $this->render('CbbBundle:Parts:Navigation/main_menu.html.twig');
    }
}