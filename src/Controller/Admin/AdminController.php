<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{

    /**
     * @Route("/", name="_admin_dashboard")
     */
    public function dashboard()
    {
        $title = 'Dashboard';
        return $this->render('_admin/_contents/_dashboard/index.html.twig', [
            'controller_name' => 'AdminController'
        ]);
    }


}
