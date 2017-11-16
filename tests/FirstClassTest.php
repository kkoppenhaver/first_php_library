<?php

namespace kkoppenhaver\my_first_library;

class FirstClassTest extends \PHPUnit\Framework\TestCase
{

    public function testEncodeStringABCIsBCD()
    {
        $my_first_library = new FirstClass();

        $result = $my_first_library->encodeString('abc');

        $this->assertSame($result, 'bcd');
    }

    public function testEncodeStringNBVIsOCW()
    {
        $my_first_library = new FirstClass();

        $result = $my_first_library->encodeString('nbv');

        $this->assertSame($result, 'ocw');
    }
}
