<?php

use PHPUnit\Framework\TestCase;

require_once "./src/MyClass.php";
class GetMinuteQuarterTest extends TestCase
{
    public $obj;

    
    /**
     * @dataProvider positiveDataProvider
     */
    public function testPositive($minute, $expected)
    {
        $this->obj = new MyClass();
        $this->assertEquals($expected, $this->obj->getMinuteQuarter($minute));
    }

    public function testNegative()
    {
        $this->obj = new MyClass();

        $this->expectException(InvalidArgumentException::class);

        $this->obj->getMinuteQuarter(75);
    }

    public function positiveDataProvider()
    {
        return [
            [1, 'first'],
            [5, 'first'],
            [15, 'first'],
            [16, 'second'],
            [20, 'second'],
            [30, 'second'],
            [31, 'third'],
            [40, 'third'],
            [45, 'third'],
            [46, 'fourth'],
            [50, 'fourth'],
            [0, 'fourth'],
        ];
    }
}