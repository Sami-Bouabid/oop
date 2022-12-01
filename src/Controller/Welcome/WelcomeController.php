<?php
declare(strict_types=1);

namespace App\Controller\Welcome;


use App\Zinc\Rounting\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Zinc\AbstractController\AbstractController;


    class WelcomeController extends AbstractController
    {
        #[Route("/", name: "welcome.index", methods: ['GET'])]
        public function index() : Response
        {   
            $nom = "Jeudi";
            $jours = ['Lundi', "Mardi"];
            return $this->render("index.html.twig", [
                "nom" => $nom,
                "jours" => $jours
            ]);
            
        }

        #[Route("/edit/{id}", name: "edit", methods: ['GET'])]
        public function edit() : Response
        {
            dd('edit');
        }

        #[Route("/hello", name: "welcome.hello", methods: ['GET'])]
        public function hello() : Response
        {
            dd('hello');
        }
    }