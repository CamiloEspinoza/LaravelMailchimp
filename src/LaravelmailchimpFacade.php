<?php

namespace Laravelmailchimp\Laravelmailchimp;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laravelmailchimp\Laravelmailchimp\Laravelmailchimp
 */
class LaravelmailchimpFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravelmailchimp';
    }
}
