<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ConfigFacade extends Facade
{
    public static function appEnv(): string
    {
        return env('APP_ENV');
    }

    public static function appName(): string
    {
        return env('APP_NAME');
    }
}
