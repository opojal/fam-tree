<?php

namespace Tree\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class MicroController extends Controller
{
    /**
     * @Route("/random/{limit}")
     */
    public function randomAction($limit)
    {
        $number = rand(0, $limit);

        return $this->render('micro/random.html.twig', array(
            'number' => $number
        ));
    }
}
