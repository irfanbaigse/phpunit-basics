<?php

class DataTest extends \PHPUnit\Framework\TestCase
{
    /**
     * testDataProvidersss
     *
     * @dataProvider anyProvider
     *
     * @param $expected expected
     * @param $a        a
     * @param $b        b
     *
     * @return void
     *
     * @author       Irfan Baig <irfan.baig@tajawal.com>
     */
    public function testDataProvidersss($expected, $a, $b)
    {
        $this->assertSame($expected, $a + $b);
    }

    /**/
    public function anyProvider()
    {
        return [
            [0, 0, 0],
            [1, 0, 1],
            [2, 1, 1],
            [3, 2, 1],
        ];
    }
}
