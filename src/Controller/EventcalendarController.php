<?php

namespace App\Controller;

use App\Entity\Eventcalendar;
use App\Form\EventcalendarType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/calendar')]
class EventcalendarController extends AbstractController
{
    #[Route('/', name: 'app_eventcalendar_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $eventcalendars = $entityManager
            ->getRepository(Eventcalendar::class)
            ->findAll();

        return $this->render('eventcalendar/index.html.twig', [
            'eventcalendars' => $eventcalendars,
        ]);
    }

    #[Route('/new', name: 'app_eventcalendar_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $eventcalendar = new Eventcalendar();
        $form = $this->createForm(EventcalendarType::class, $eventcalendar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($eventcalendar);
            $entityManager->flush();

            return $this->redirectToRoute('app_eventcalendar_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('eventcalendar/new.html.twig', [
            'eventcalendar' => $eventcalendar,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_eventcalendar_show', methods: ['GET'])]
    public function show(Eventcalendar $eventcalendar): Response
    {
        return $this->render('eventcalendar/show.html.twig', [
            'eventcalendar' => $eventcalendar,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_eventcalendar_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Eventcalendar $eventcalendar, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EventcalendarType::class, $eventcalendar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_eventcalendar_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('eventcalendar/edit.html.twig', [
            'eventcalendar' => $eventcalendar,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_eventcalendar_delete', methods: ['POST'])]
    public function delete(Request $request, Eventcalendar $eventcalendar, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$eventcalendar->getId(), $request->request->get('_token'))) {
            $entityManager->remove($eventcalendar);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_eventcalendar_index', [], Response::HTTP_SEE_OTHER);
    }
}
