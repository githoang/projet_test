<?php

namespace Foody\InstallerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FoodyInstallerBundle:Default:index.html.twig', array('name' => $name));
    }
}
