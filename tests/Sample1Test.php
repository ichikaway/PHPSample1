<?php

namespace Sample1;

use Sample1\Lib\Sample1;

class Sample1Test extends \PHPUnit_Framework_TestCase
{

    public function test()
    {
        $a = new Sample1();
        $result = $a->add(1, 2);
        $this->assertEquals(3, $result);

   }
 }
