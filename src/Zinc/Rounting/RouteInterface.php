<?php
namespace App\Zinc\Rounting;

    Interface RouteInterface
    {   
        /**
         * Cette methode return URL de la route
         * dont l'app attend le reception
         *
         * @return string
         */
        public function getPath() : string;

        /**
         * Cette methode return le nom de la route
         * dont l'app attend le reception
         *
         * @return string
         */
        public function getName() : string;

        /**
         * Cette methode return la liste des methodes par lequelles
         * on peut acceder à la route
         *
         * @return string
         */
        public function getMethods() : array;
    }