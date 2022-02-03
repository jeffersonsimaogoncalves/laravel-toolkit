<?php

declare(strict_types=1);

namespace JustSteveKing\LaravelToolkit\Contracts;

interface FactoryContract
{
    /**
     * Pass in a formed array and turn it into a Value Object.
     *
     * @param array $attributes
     * @return ValueObjectContract
     */
    public static function make(array $attributes): ValueObjectContract;
}
