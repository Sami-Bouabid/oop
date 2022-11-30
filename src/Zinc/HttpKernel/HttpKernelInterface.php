<?php
namespace App\Zinc\HttpKernel;


use Symfony\Component\HttpFoundation\Response;

    Interface HttpKernelInterface
    {   
        /**
         * Cette methode du Httpkernel permet de soumettre la requete
         * et de recuperer la reponse correspondante
         *
         * @return Response
         */
        public function handleRequest() : Response;
       
    }