<?php

use Symfony\Component\HttpFoundation\Request;

    return [
        
        // La requete
        Request::class => Request::createFromGlobals(),

        // Liste des controllers
        "controllers" => [
            //
        ],

        // Le router
        DI\create(Router::class)
        ->constructor(DI\get(Router::class), DI\get("controllers")),

    ];


    //$router = new Router(Request $request, array $controllers);
