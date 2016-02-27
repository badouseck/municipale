<?php

namespace Municipal\PersonneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MunicipalPersonneBundle:Default:index.html.twig', array('name' => $name));
    }
}
