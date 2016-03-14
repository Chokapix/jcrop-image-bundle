<?php

namespace Chokapix\JcropImageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ChokapixJcropImageBundle:Default:index.html.twig');
    }
}
