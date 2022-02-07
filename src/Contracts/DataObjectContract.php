<?php

declare(strict_types=1);

namespace JustSteveKing\LaravelToolkit\Contracts;

interface DataObjectContract
{
    /**
     * Return the Data Object back as an array representation.
     *
     * @return array
     */
    public function toArray(): array;
}
