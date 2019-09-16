<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Error\Error;

class ExpectedErrorTest extends TestCase
{
    /**
     * testException
     *
     * @return void
     *
     * @author Irfan Baig <irfan.baig@tajawal.com>
     */
    public function testException()
    {
        $this->expectException(Error::class);

        include 'anything.php';
    }
}
