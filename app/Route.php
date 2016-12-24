<?php

namespace SampleProject;

use Dietcube\RouteInterface;
use Pimple\Container;

class Route implements RouteInterface
{
    /**
     * {@inheritDoc}
     */
    public function definition(Container $container)
    {
        return [
            ['GET', '/', 'Top::index'],
            ['GET', '/hello', 'Hello::index'],
        ];
    }
}
