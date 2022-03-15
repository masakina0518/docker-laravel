<?php

namespace App\Services;

use App\Libraries\HttpRequest\HttpRequest;

class TestService
{
    private $httpRequest;

    public function __construct(HttpRequest $httpRequest)
    {
        $this->httpRequest = $httpRequest;
    }

    public function test() {

        return $this->httpRequest->test();
    }
}
