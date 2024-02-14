<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ComplaintController extends AbstractController
{
    public function complaint(): Response
    {
        return $this->render('complaint/Complaint.html.twig');

    }
}
