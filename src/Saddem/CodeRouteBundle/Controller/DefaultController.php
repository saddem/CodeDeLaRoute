<?php

namespace Saddem\CodeRouteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SaddemCodeRouteBundle:Default:index.html.twig');
    }
}
