<?php

namespace DeschutesDesignGroupLLC\SocialLoginPlugin\Login\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_USER')]
class CallbackController extends AbstractController
{
    #[Route('/login/callback/{provider}', 'callback')]
    public function __invoke(): RedirectResponse
    {
        return $this->redirectToRoute('forumify_core_index');
    }
}
