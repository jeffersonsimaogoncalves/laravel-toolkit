<?php

declare(strict_types=1);

namespace JustSteveKing\LaravelToolkit\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface RepositoryContract
{
    /**
     * Find and return a Model by its ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function find(int $id): null|Model;

    /**
     * Find and return a Model by its UUID.
     *
     * @param string $uuid
     * @return Model|null
     */
    public function uuid(string $uuid): null|Model;

    /**
     * Create a new Model.
     *
     * @param array $attributes
     * @return Builder|Model
     */
    public function create(array $attributes = []): Builder|Model;

    /**
     * Create a new Model Silently.
     *
     * @param array $attributes
     * @return Builder|Model
     */
    public function createSilent(array $attributes = []): Builder|Model;

    /**
     * Get all Models.
     *
     * @return Collection
     */
    public function get(): Collection;
}
