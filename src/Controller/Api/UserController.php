<?php

namespace App\Controller\Api;

use App\Entity\Dialog;
use App\Entity\Message;
use App\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    /**
     * @Route("/api/users", methods={"GET"})
     */
    public function users()
    {
        $dialog = $this->getDoctrine()->getRepository(Dialog::class)->find(1);
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $message = new Message();
        $message->setText("New message");
        $message->setTime(new \DateTime());
        $message->setUser($user);
        $dialog->addMessage($message);
        $this->getDoctrine()->getManager()->persist($message);
        $this->getDoctrine()->getManager()->flush();
        return new JsonResponse(['status' => true], 200);
    }
}
