<?php

namespace Makowskid\SgNric;

use Illuminate\Support\Facades\Facade;

class SgNricFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sg-nric';
    }
}
