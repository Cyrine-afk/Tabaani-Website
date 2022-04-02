<?php

namespace App\Controller;

use App\Entity\Events;
use App\Form\EventsType;
use App\Repository\EventsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

/**
 * @Route("/events/back")
 */
class EventsControllerBack extends AbstractController
{

    /**
     * @Route("/", name="events_index_back", methods={"GET"})
     */
    public function indexBack(Request $request, PaginatorInterface $paginator): Response
    {
        $data = $this->getDoctrine()->getRepository(Events::class)->findBy([],
            ["eventdate"=>'asc']);

        $events = $paginator->paginate(
            $data,
            $request->query->getInt('page',1),
            3
        );

        return $this->render('events/index_back.html.twig', [
            'events' => $events,
        ]);
    }



    /**
     * @Route("/pdfEvents", name="events_pdf_back", methods={"GET"})
     */
    public function pdfBack(EventsRepository $eventsRepository): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $events = $eventsRepository->findAll();

        /*return $this->render('events/eventsPDF.html.twig', [
            "events" => $events,
        ]);*/
        $html = $this->render('events/eventsPDF.html.twig', [
            "events" => $events,
        ]);

        // Load HTML to Dompdf
        //$html .= '<link type="text/css" href="/public/Front-Office/css/style.default.css/style.default.min.css" rel="stylesheet" />';
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A1', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("TabaaniEvents.pdf", [
            "Attachment" => true
        ]);


    }

    /**
     * @Route("/new", name="events_new_back", methods={"GET", "POST"})
     */
    public function newBack(Request $request, EntityManagerInterface $entityManager): Response
    {
        $event = new Events();
        $form = $this->createForm(EventsType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file=$event->getImageevent();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('uploads_directory', $fileName));
            $event->setImageevent($fileName);
            //$event->upload();
            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('events_index_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('events/new_back.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="events_show_back", methods={"GET"})
     */
    public function showBack(Events $event): Response
    {
        return $this->render('events/show_back.html.twig', [
            'event' => $event,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="events_edit_back", methods={"GET", "POST"})
     */
    public function editBack(Request $request, Events $event, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EventsType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('events_index_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('events/edit_back.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="events_delete_back", methods={"POST"})
     */
    public function deleteBack(Request $request, Events $event, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$event->getId(), $request->request->get('_token'))) {
            $entityManager->remove($event);
            $entityManager->flush();
        }

        return $this->redirectToRoute('events_index_back', [], Response::HTTP_SEE_OTHER);
    }



}
