<?php

namespace App\Providers;

use Filament\Facades\Filament; // pastikan namespace benar
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    protected function getMiddleware(): array
{
    return [
        'auth', // Middleware autentikasi
        'can:access-admin', // Gunakan Spatie untuk role admin
    ];
}
}
