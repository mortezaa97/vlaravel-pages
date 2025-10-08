<?php

namespace Mortezaa97\Pages;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mortezaa97\Pages\Skeleton\SkeletonClass
 */
class PagesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pages';
    }
}
