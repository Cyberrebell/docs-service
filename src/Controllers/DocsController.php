<?php

namespace Docs\Controllers;

use Docs\Service\Merger\OpenApiDocs;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DocsController
{
    public function getAction(Application $app, Request $request)
    {
        /* @var $merger OpenApiDocs */
        $merger = $app['merger.openapi'];
        return new Response(
            $merger->getMergedYml()
        );
    }
}
