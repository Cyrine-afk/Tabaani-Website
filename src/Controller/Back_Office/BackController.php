<?php

namespace App\Controller\Back_Office;

use App\Entity\Events;
use App\Entity\Themes;
use App\Repository\ThemesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackController extends AbstractController
{
    /**
     * @Route("/back-office", name="back")
     */
    public function index(): Response
    {
        return $this->render('Back_Office/AdminMain.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }

    /**
     * @Route("/statsEvent", name="statsEvent")
     */
    public function statistiques(ThemesRepository $themesRepository) {

        $themes = $themesRepository->findAll();

        $themesNom = [];
        $themesCount = [];

        foreach($themes as $theme) {
            $themesNom[] = $theme->getThemename();
            $themesCount[] = count($theme->getEvents());
        }

        return $this->render('/events/stats.html.twig',[
            'themesNom' => json_encode($themesNom),
        'themesCount' => json_encode($themesCount)
        ]);
    }
}
