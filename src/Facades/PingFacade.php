<?php

namespace Cerwyn\Ping\src\Facades;

use Illuminate\Support\Facades\Facade;

class PingFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ping';
    }
}