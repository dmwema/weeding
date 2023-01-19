<?php

namespace App\Controller;

use App\Repository\InvitationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WeddingController extends AbstractController
{
    #[Route('/wedding', name: 'app_wedding')]
    public function index(InvitationRepository $invitationRepository): Response
    {
        $invitations = $invitationRepository->findAll();
        return $this->render('wedding/index.html.twig', [
            'invitations' => $invitations,
        ]);
    }
}
