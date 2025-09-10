<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

// Symfony m'oblige à travailler avec des classes
// Pour créer une page, je dois donc créer une classe de Controlleur
class HomeController extends AbstractController
{

    // je défini l'url pour laquelle je veux créer une page grâce à une "Route"
    // ici c'est la page d'accueil ("/")
    #[Route('/')]
    // vu que j'ai créé la route au dessus de cette fonction
    // symfony executera la fonction quand l'url de la route est demandée
    public function index() {
        // la fonction charge le fichier HTML Twig et le renvoie au navigateur
        return $this->render('home.html.twig');
    }

}


