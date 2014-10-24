<?php

namespace Rudak\SlugBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RudakSlugBundle:Default:index.html.twig', array('name' => $name));
    }
}
