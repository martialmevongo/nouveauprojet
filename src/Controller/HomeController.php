<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

//je créé une classe HomeController

class HomeController {


	// je créé une fonction (méthode), nomée home, qui affiche un var_dump
	// je créé une Route, qui définit le chemin (url) à "/"
	// donc, quand un utilisateur demande l'url "/", ma fonction sera appelée
	#[Route('/', name:"home")]
	public function home() {
		var_dump('Page accueil'); die;
	}

	public function contact(): ("/", name: "contact")

}