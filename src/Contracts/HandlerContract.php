<?php

declare(strict_types=1);

namespace JustSteveKing\LaravelToolkit\Contracts;

interface HandlerContract
{
    /**
     * Handle an incoming Command.
     *
     * @param CommandContract $command
     * @return mixed
     */
    public function handle(CommandContract $command): mixed;
}
