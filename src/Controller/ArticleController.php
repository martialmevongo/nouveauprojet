<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


// je créé une classe HomeController
class ArticleController {


    #[Route("/list-articles", name: "list-articles")]
    public function listarticles()  {
        var_dump('Liste des articles'); die;
    }
	
	#[Route("/create-article", name: "create-article")]
	public function createArticle() {
		var_dump("créez un article"); die;
	}

	#[Route("/delete-article/{id}", name: "delete-article")]
    public function deleteArticle() {
        var_dump("Supprimez l'article"); die;
    }

}