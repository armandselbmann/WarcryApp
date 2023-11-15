<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManageListController extends AbstractController
{
    #[Route('/manage/list', name: 'app_manage_list')]
    public function index(): Response
    {
        return $this->render('manage_list/index.html.twig', [
            'controller_name' => 'ManageListController',
        ]);
    }
}
