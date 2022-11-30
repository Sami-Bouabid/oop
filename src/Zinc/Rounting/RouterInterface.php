<?php
namespace App\Zinc\Rounting;


    Interface RouterInterface
    {   
        /**
         * Cette methode permet de :
         *      - Recuperer les controllers,
         *      - En extraire les routes
         *      - Stocker dans un array à routes
         *
         * @param array $controllers
         * @return void
         */
        public function addRoutes(array $controllers) : void;


        /**
         * Cette methode du router lui permet
         *    - De s'executer
         *    - Et de retourner la reponse correspondante qui peut etre
         *        - Soit un array dans les cas où les routes match
         *        - Soit null si non le cas
         *
         * @return array|null
         */
        public function run() : ?array;

    }