<?php
namespace App\HttpKernel;

use Psr\Container\ContainerInterface;
use App\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Response;



class HttpKernel implements HttpKernelInterface
{   

    /**
         * Cette propriete represente le container de dependances
         *
         * @var ContainerInterface
         */
        private ContainerInterface $container;

        public function __construct(ContainerInterface $container)
        {
            $this->container = $container;
        }

    public function handleRequest() : Response
    {
        dd('test');
    }
}