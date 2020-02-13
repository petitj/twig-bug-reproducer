<?php

namespace App\Controller;

use App\Entity\File;
use App\Form\FileType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function index(): Response
    {
        $file = new File();
        $form = $this->createForm(FileType::class, $file);

        return $this->render('index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
