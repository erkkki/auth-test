<?php

namespace App\Controller;

use Exception;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/logout", name="app_logout", methods={"GET"})
     * @throws Exception
     */
    public function logout()
    {
        // controller can be blank: it will never be executed!
        throw new Exception('Don\'t forget to activate logout in security.yaml');
    }


    /**
     * @Route("/api/user", name="user")
     */
    public function index(): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        $auth_checker = $this->get('security.authorization_checker');

        $response = new Response();
        if ($auth_checker->isGranted('IS_AUTHENTICATED_FULLY')) {
            $response->setContent(json_encode($user->getEmail()));
        }

        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
