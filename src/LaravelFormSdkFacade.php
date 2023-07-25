<?php

namespace HassanAamir\LaravelFormSdk;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HassanAamir\LaravelFormSdk\Skeleton\SkeletonClass
 */
class LaravelFormSdkFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-form-sdk';
    }
}
