<?php

declare(strict_types=1);

namespace JustSteveKing\LaravelToolkit\Contracts;

use Illuminate\Database\Eloquent\Model;

interface ActionContract
{
    /**
     * Handle the action and return the Model back.
     *
     * @param DataObjectContract $object
     * @return Model
     */
    public static function handle(DataObjectContract $object): Model;
}
