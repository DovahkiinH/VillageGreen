<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InstrumentSousCategorieController extends AbstractController
{
    #[Route('/instrument/sous/categorie', name: 'app_instrument_sous_categorie')]
    public function index(): Response
    {
        return $this->render('instrument_sous_categorie/index.html.twig', [
            'controller_name' => 'InstrumentSousCategorieController',
        ]);
    }
}
