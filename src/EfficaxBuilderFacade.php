<?php

namespace Ascend\EfficaxBuilder;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ascend\EfficaxBuilder\Skeleton\SkeletonClass
 */
class EfficaxBuilderFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'efficax-builder';
    }
}
