<?php

namespace mayder\Autentique;

use mayder\Autentique\Enums\ResourcesEnum;
use mayder\Autentique\Utils\Api;

class BaseResource
{
    protected $api;
    protected $sandbox;
    protected $resourcesEnum;

    public function __construct(string $autentiqueURL = "", bool $autentiqueDevMode = false)
    {
        $this->api = new Api($autentiqueURL);
        $this->sandbox = $autentiqueDevMode?"true":"false";
        $this->resourcesEnum = ResourcesEnum::class;
    }
}
