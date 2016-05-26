<?php


namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class HomeController extends Controller
{
  public function indexAction()
  {
  	return $this->render('OCCoreBundle:Home:index.html.twig');
  }

  public function contactAction()
  {
  	// Créer ici le formulaire de contact

  	$this->addFlash('info', 'La page de contact n’est pas encore disponible');

  	return $this->render('OCCoreBundle:Home:contact.html.twig');
  }
}
