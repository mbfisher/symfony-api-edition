<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class StatusController
{
    public function indexAction()
    {
        return new JsonResponse(['status' => 'ok']);
    }
}