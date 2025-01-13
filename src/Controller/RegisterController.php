<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class RegisterController{

	public function __construct(private readonly Environment $twig)
    {
    }
	
	public function __invoke(): Response{
        return new Response($this->twig->render('register.html.twig'));
	}
}