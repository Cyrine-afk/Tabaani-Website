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
 * @Route("/participate/event/back")
 */
class ParticipateEventControllerBack extends AbstractController
{
    /**
     * @Route("/", name="participate_event_index_back", methods={"GET"})
     */
    public function indexBack(ParticipateEventRepository $participateEventRepository): Response
    {
        $data = $this->getDoctrine()->getRepository(ParticipateEvent::class)->findAll();
        return $this->render('participateEvents/index_back.html.twig', [
            'participateEvents' => $data,
        ]);
    }

    /**
     * @Route("/{id}", name="participate_event_show_back", methods={"GET"})
     */
    public function showBack(ParticipateEvent $participateEvent): Response
    {
        return $this->render('participate_event/show_back.html.twig', [
            'participate_event' => $participateEvent,
        ]);
    }

    /**
     * @Route("/{id}", name="participate_event_delete_back", methods={"POST"})
     */
    public function deleteBack(Request $request, ParticipateEvent $participateEvent, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$participateEvent->getId(), $request->request->get('_token'))) {
            $entityManager->remove($participateEvent);
            $entityManager->flush();
        }

        return $this->redirectToRoute('participate_event_index_back', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/newTrying/new", name="participate_event_newTrying_back", methods={"POST"})
     */
    public function newTryingBack(Request $request,EventsController $eventsController,ParticipateEventRepository $participateEventRepository ,EventsRepository $eventsRepository, UserRepository $userRepository)
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

        return $this->render('events/index_back.html.twig', [
            'events' => $eventsRepository->findAll(),
        ]);
    }

}
