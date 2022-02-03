<?php

declare(strict_types=1);

namespace JustSteveKing\LaravelToolkit\Bus;

use Closure;
use Illuminate\Support\Facades\DB;
use JustSteveKing\LaravelToolkit\Contracts\CommandContract;

class UseDatabaseTransactions
{
    /**
     * Pipeline Middleware to pass Commands through Database Transactions.
     *
     * @param CommandContract $command
     * @param Closure $next
     * @return mixed
     */
    public function handle(CommandContract $command, Closure $next): mixed
    {
        return DB::transaction(fn () =>
            $next($command)
        );
    }
}
