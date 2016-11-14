<?php

namespace Patrimoine2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('Patrimoine2Bundle:Default:index.html.twig');
    }
}
