<?php

namespace Docs\Service\Merger;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class OpenApiDocsServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['merger.openapi'] = function () use ($app) {
            $config = $app['config'];
            return new OpenApiDocs($config['base'], $config['merges']);
        };
    }
}
