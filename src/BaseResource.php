<?php

namespace mayder\Autentique;

use mayder\Autentique\Enums\ResourcesEnum;
use mayder\Autentique\Utils\Api;

class BaseResource
{
    protected $api;

    protected $sandbox;

    protected $resourcesEnum;

    public function __construct()
    {
        $this->api = new Api(getenv("AUTENTIQUE_URL") ?? "");

        $this->sandbox = getenv("AUTENTIQUE_DEV_MODE") ?? "false";

        $this->resourcesEnum = ResourcesEnum::class;
    }
}
