<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LocationController extends AbstractController
{
    #[Route('/location/{locationId}/nearby', name: 'nearby', methods: ['GET'])]
    public function getNearby(int $locationId): Response
    {


        $db = [
            23 => [
                [
                    'name' => 'Сколково',
                    'id' => 23,
                    'energy' => 8,
                ],[
                    'name' => 'Бутово',
                    'id' => 666
                ],
            ],
            18 => [
                [
                    'name' => 'YHkwje',
                    'id' => 45
                ],[
                    'name' => 'KHljfwlkf',
                    'id' => 234
                ],
            ]
        ];


        return $this->json($this->locationRepository->findNearby($locationId));
    }
}
