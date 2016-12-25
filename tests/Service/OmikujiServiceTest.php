<?php

namespace SampleProject\Service;

class OmikujiServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param string $expect
     * @param int $day
     * @dataProvider dataProvider
     */
    public function testGetResult($expect, $day)
    {
        $omikuji_service = new OmikujiService();
        $this->assertEquals($expect, $omikuji_service->getResult($day));
    }

    public function dataProvider()
    {
        return [
            ['大吉', 12],
            ['凶', 11],
            ['吉', 10],
        ];
    }
}
