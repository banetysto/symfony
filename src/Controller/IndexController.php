<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/home/{nbr1},{nbr2}/{operator}', name: 'app_home')]
    public function index(int $nbr1, int $nbr2,$operator): Response
    {
        if ($operator=='+'){
            $total = $nbr1+$nbr2;
        }else{
            if($operator=='-'){
                $total = $nbr1-$nbr2;
            }else{
                if($operator=='*'){
                    $total = $nbr1*$nbr2;
                }else{
                    if($operator==':'){
                        $total = $nbr1/$nbr2;
                    }
                }
            }
        }

        return $this->render('home/index.html.twig', [
            'addition' => $total,
            'nombre1' => $nbr1,
            'nombre2' => $nbr2,
            'operateur' => $operator,
        ]);
    }
}