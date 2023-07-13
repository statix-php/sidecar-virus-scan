<?php

namespace Statix\VirusScan\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Statix\VirusScan\VirusScan
 */
class VirusScan extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Statix\VirusScan\VirusScan::class;
    }
}
