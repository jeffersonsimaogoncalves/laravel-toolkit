<?php

declare(strict_types=1);

namespace JustSteveKing\LaravelToolkit\Concerns;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasUuid
{
    /**
     * When the Model is being created, intercept and add the UUID attribute.
     *
     * @return void
     */
    public static function bootHasUuid(): void
    {
        static::creating(fn (Model $model) =>
            $model->uuid = Str::uuid()->toString(),
        );
    }
}
