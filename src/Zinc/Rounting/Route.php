<?php
namespace App\Zinc\Rounting;

use App\Zinc\Rounting\RouteInterface;

    #[\Attribute(\Attribute::TARGET_METHOD)]
    class Route implements RouteInterface
    {   

        /**
         * Cete Methode represente l'URL de la route
         *
         * @var string
         */
        private string $path;

        /**
         * Cette methode represente le nom de la route
         *
         * @var string
         */
        private string $name;

        /**
         * Cette methode repesente la liste des methodes autorisé
         *  d'acces à la route
         *
         * @var array
         */
        private array $methods = [];


        public function __construct(string $path, string $name, array $methods = ['GET'])
        {
            $this->path = $path;
            $this->name = $name;
            $this->methods = $methods;
        }

        /**
         * Cette methode return URL de la route
         * dont l'app attend le reception
         *
         * @return string
         */
        public function getPath() : string
        {
            return $this->path;
        }

        /**
         * Cette methode return le nom de la route
         * dont l'app attend le reception
         *
         * @return string
         */
        public function getName() : string
        {
            return $this->name;
        }

        /**
         * Cette methode return la liste des methodes par lequelles
         * on peut acceder à la route
         *
         * @return string
         */
        public function getMethods() : array
        {
            return $this->methods;
        }
    }