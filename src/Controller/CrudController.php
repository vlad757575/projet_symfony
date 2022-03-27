<?php

namespace App\Controller;

use App\Repository\UtilisateurRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CrudController extends AbstractController
{
    /**
     * @Route("/crud/liste-contacts", name="liste-contacts")
     */
    public function display(UtilisateurRepository $contacts): Response
    {
        return $this->render('crud/liste-contacts.html.twig', [
            'controller_name' => 'CrudController',
        ]);
    }
}
