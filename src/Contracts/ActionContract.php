<?php

declare(strict_types=1);

namespace JustSteveKing\LaravelToolkit\Contracts;

use Illuminate\Database\Eloquent\Model;

interface ActionContract
{
    /**
     * Handle the action and return the Model back.
     *
     * @param ValueObjectContract $object
     * @return Model
     */
    public static function handle(ValueObjectContract $object): Model;
}
