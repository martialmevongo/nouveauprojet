<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


// je créé une classe HomeController
class ArticleController {


    #[Route("/list-articles", name: "list-articles")]
    public function listarticles()  {
        return new Response('Liste des articles'); die;
    }
	
	#[Route("/create-article", name: "create-article")]
	public function createArticle() {
		var_dump("créez un article"); die;
	}

	#[Route("/delete-article", name: "delete-article")]
    public function deleteArticle() {
        var_dump("Supprimez l'article"); die;
    }

}
class PageController extends AbstractController {


	#[Route("/", name: "home")]
	public function home() {
		// j'utilise la méthode render
		// qui permet de récupérer un fichier de views twig
		// de le transformer en HTML
		// et de la renvoyer en response HTTP avec un status 200
		return $this->render('home.html.twig');
	}



}