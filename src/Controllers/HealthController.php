<?php

namespace Docs\Controllers;

use Symfony\Component\HttpFoundation\Response;

class HealthController
{
    public function getAction()
    {
        return new Response('I am alive!');
    }
}
