<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route(path: '/', methods: ['GET'])]
    public function action(): Response
    {
        return $this->json(['test' => 'yes']);
    }
}
