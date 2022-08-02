<?php

namespace Pboivin\Flou\Laravel;

use Illuminate\Support\Facades\Facade;

class Flou extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'flou.factory';
    }
}
