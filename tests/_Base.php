<?php

namespace mayder\Autentique\tests;

use PHPUnit\Framework\TestCase;

class _Base extends TestCase
{
    /** @var string */
    protected $token;
    private $autentiqueURL;
    private $autentiqueToken;

    public function __construct(string $autentiqueURL = "", string $autentiqueToken = "")
    {
        $this->autentiqueURL = $autentiqueURL;
        $this->autentiqueToken = $autentiqueToken;
    }

    protected function token()
    {
        return $this->autentiqueURL;
    }

    protected function autentiqueUrl()
    {
        return $this->autentiqueToken;
    }
}
