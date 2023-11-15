<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManageCharacterController extends AbstractController
{
    #[Route('/manage/character', name: 'app_manage_character')]
    public function index(): Response
    {
        return $this->render('manage_character/index.html.twig', [
            'controller_name' => 'ManageCharacterController',
        ]);
    }
}
