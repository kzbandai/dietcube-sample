<?php

namespace SampleProject\Service;

use Dietcube\Components\LoggerAwareTrait;

class OmikujiService
{
    use LoggerAwareTrait;

    public function getResult($today)
    {
        if (0 === $today % 3) {
            return '大吉';
        }

        if (0 === $today % 11) {
            return '凶';
        }

        return '吉';
    }
}
