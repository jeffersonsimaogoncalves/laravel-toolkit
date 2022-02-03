<?php

declare(strict_types=1);

namespace JustSteveKing\LaravelToolkit\Contracts;

use Illuminate\Http\Client\PendingRequest;

interface ServiceContract
{
    /**
     * Build the Request.
     *
     * @return PendingRequest
     */
    public function makeRequest(): PendingRequest;
}
