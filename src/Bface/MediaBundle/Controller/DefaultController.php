<?php

namespace Bface\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BfaceMediaBundle:Default:index.html.twig', array('name' => $name));
    }
}
