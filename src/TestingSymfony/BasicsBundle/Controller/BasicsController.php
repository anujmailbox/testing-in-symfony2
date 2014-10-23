<?php

namespace TestingSymfony\BasicsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BasicsController extends Controller {

	public function helloAction() {
		return $this->render('TestingSymfonyBasicsBundle:Basics:hello.html.twig');
	}
}