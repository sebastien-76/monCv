<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CVController extends AbstractController
{
    #[Route('/', name: 'app_cv')]
    public function index(): Response
    {
        $projectDir = $this->getParameter('kernel.project_dir');

        $cvJson = file_get_contents($projectDir . '/import/cv.json');

        $cv = json_decode($cvJson, true);

        return $this->render('cv/index.html.twig', [
            'cv' => $cv,
        ]);
    }
}
