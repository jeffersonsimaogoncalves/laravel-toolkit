<?php

declare(strict_types=1);

namespace JustSteveKing\LaravelToolkit\Contracts;

interface ValueObjectContract
{
    /**
     * Return the Value Object back as an array representation.
     *
     * @return array
     */
    public function toArray(): array;
}
