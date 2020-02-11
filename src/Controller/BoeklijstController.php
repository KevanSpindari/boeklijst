<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BoeklijstController extends AbstractController
{
    /**
     * @Route("/boeklijst", name="boeklijst")
     */
    public function index()
    {
        return $this->render('boeklijst/index.html.twig', [
            'controller_name' => 'BoeklijstController',
        ]);
    }
}
