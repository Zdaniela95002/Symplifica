<?php

namespace Zdc\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZdcUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
