<?php

namespace Medz\Component\CreateOrderLength\Test;

use PHPUnit_Framework_TestCase;
use Medz\Component\CreateOrderLength;

class CreateTest extends PHPUnit_Framework_TestCase
{
    public function testClssHas()
    {
        $this->assertTrue(class_exists('CreateOrderLength'));
    }
}
