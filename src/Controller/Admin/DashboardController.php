<?php

namespace App\Controller\Admin;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * @Route("admin")
 */
class DashboardController extends AbstractController
{

   

    /**
     * @var string
     */
    private $defaultLayout = "admin/layout/default.html.twig";


    /**
     * @Route("/dashboard", name="dashboard_index", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render($this->defaultLayout, [
            'contenu' => 'admin/dashboard/index.html.twig',
            'current_menu' => 'dashboard',
        ]);
    }
}