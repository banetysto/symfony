<?php
namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;

    class NumberController{

        public function saynumber($number):Response{
            if ($number>0){
                return new Response("Positif");
            }else{
                if($number<0){
                    return new Response("Negatif");
                }else{
                    return new Response("Zero");
                }
            }
        }


    }
    class NumberController2{
        public function addnumber($nbr1,$nbr2):Response{
            return new Response($nbr1+$nbr2);
        }
    }
?>