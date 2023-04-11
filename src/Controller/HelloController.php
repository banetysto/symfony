<?php
namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;

    class HelloController{

        public function sayHello():Response{
            return new Response("Bonjour");
        }
    }

    class HelloController2{

        public function sayHelloParam($name):Response{
            return new Response("Bonjour ".$name);
        }
    }

?>