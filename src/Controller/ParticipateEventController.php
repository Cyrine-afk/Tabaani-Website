<?php

namespace App\Controller;

use App\Entity\Events;
use App\Entity\ParticipateEvent;
use App\Entity\User;
use App\Form\ParticipateEventType;
use App\Repository\EventsRepository;
use App\Repository\ParticipateEventRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/participate/event")
 */
class ParticipateEventController extends AbstractController
{
    /**
     * @Route("/", name="participate_event_index", methods={"GET"})
     */
    public function index(ParticipateEventRepository $participateEventRepository): Response
    {
        return $this->render('participate_event/show.html.twig', [
            'participate_events' => $participateEventRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="participate_event_show", methods={"GET"})
     */
    public function show(ParticipateEvent $participateEvent): Response
    {
        return $this->render('participate_event/show.html.twig', [
            'participate_event' => $participateEvent,
        ]);
    }


    /**
     * @Route("/newTrying/new", name="participate_event_newTrying", methods={"POST"})
     */
    public function newTrying(Request $request,EventsController $eventsController,ParticipateEventRepository $participateEventRepository ,EventsRepository $eventsRepository, UserRepository $userRepository)
    {
        $event = new Events();
        $data=$request->request->get('myEvent');
//var_dump($data);

        $event = $eventsRepository->findOneBy([ 'id' => 15]);
        $user= new User();
        $user = $userRepository->findOneBy(['prenomUser' => 'Cyrine']);
        /*var_dump($event);
        die();*/
        //$event = $this->getDoctrine()->getRepository(Events::class)->findOneBy(['id' => $data]);
        $participant = new ParticipateEvent();
        $participant->setEvent($event);
        $participant->setUser($user);

            $eventsController->UpdateJoin($event);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($participant);
            $entityManager->flush();

        return $this->render('events/index.html.twig', [
            'events' => $eventsRepository->findAll(),
        ]);
    }

}
