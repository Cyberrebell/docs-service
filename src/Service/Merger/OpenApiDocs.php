<?php

namespace Docs\Service\Merger;

use Symfony\Component\Yaml\Yaml;

class OpenApiDocs
{
    protected $baseFile;
    protected $merges;

    public function __construct(string $baseFile, array $merges)
    {
        $this->baseFile = $baseFile;
        $this->merges = $merges;
    }

    public function getMergedYml() : string
    {
        $base = Yaml::parseFile('../' . $this->baseFile);
        return Yaml::dump($base);
    }
}