<?php

namespace Bface\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BfaceMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
