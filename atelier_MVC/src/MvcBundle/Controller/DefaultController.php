<?php

namespace MvcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MvcBundle:Default:index.html.twig');
    }
}
