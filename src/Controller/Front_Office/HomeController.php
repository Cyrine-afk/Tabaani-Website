<?php

namespace App\Controller\Front_Office;

use App\Entity\Events;
use App\Controller\EventsController;
use App\Repository\EventsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/front-office", name="home")
     */
    public function index(EventsRepository $eventsRepository, EventsController $controller): Response
    {
        $events=$eventsRepository->findAll();

        $eventC=[];
        foreach ($events as $event) {
            $eventC[] = [
              'id' => $event->getId(),
              'start' => $event->getEventdate()->format('Y-m-d'),
              'end' => $event->getEventdate()->format('Y-m-d'),
              'title' => $event->getEventname(),
              'description' => $event->getDescription(),
              'backgroundColor' => '#ffc107',
              'borderColor' => '#fd7e14',
              'textColor' => '#343a40',
              'allDay' => false,
              /*'url' => $this->render('events/show.html.twig', [
                  'event' => $event,
              ])*/
                  //$controller->show($event)
            ];
        }

        $data = json_encode($eventC);
        return $this->render('Front_Office/Home.html.twig',
            compact('data')
        );
    }
}
