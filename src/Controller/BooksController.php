<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;

class BooksController extends AbstractController
{
    #[Route('/books', name: 'app_books')]
    public function index(): Response
    {
        // return $this->render('books/index.html.twig', [
        //     'controller_name' => 'BooksController',
        // ]);
        return $this->json([
            "message"=>"All good, it's work",
            "status"=>"OK",
        ]);
    }
}
