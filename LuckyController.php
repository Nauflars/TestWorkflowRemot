<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number")
     */
    public function number()
    {
        $number = random_int(0, 1000);
        if ($number > 50)
        {
            $number=50;
        }else if ($number<20)
        {
            $number=0;
        }else if ($number==20){
            $number=20;
        }else if ($number>20)
        {
            $number=30;
        }

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}