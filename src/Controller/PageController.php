<?php
// le namespace me permet de définir un chemin de ce fichier
// obligatoire, doit représenter exactement le chemin du fichier
// en remplacant le dossier "src" par "app"
namespace App\Controller;

// remplace le require
// on indique ici le namespace de la classe quon veut utiliser 
//et symfony  + composer feront le require automatiquement
use Symfony\Component\Routing\Annotation\Route;

// je créé une classe HomeController
class PageController {


	// je créé une fonction (méthode), nomée home, qui affiche un var_dump
	// je créé une annotation Route, qui définit le chemin (url) à "/" et un nom unique pour la page créée
	// donc, quand un utilisateur demande l'url "/", ma fonction sera appelée
	#[Route("/", name: "home")]
	public function home() {
		var_dump('Page accueil'); die;
	}

	#[Route("/contact", name: "contact")]
	public function contact() {
		var_dump("Page de contact"); die;
	}


	#[Route("/a-propos", name: "about")]
	public function about() {
		var_dump("Page à propos"); die;
	}

}


// récupère l'url demandée
// analayse l'url et récupère la fin ("/", ou "contact" etc)
// il regarde si dans tous les controleurs créés, il y a une fonction qui a une annotation Route
// avec la même url que celle demandée par l'utilisateur
// si oui, il execute la fonction en dessous de l'annotation :
// il va instancier automatiquement la classe : 
// $homeController = new HomeController
// $homeController->home();