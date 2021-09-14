<?php

use PHPUnit\Framework\TestCase;

require_once './src/MyClass.php';
class IsSumEqualTest extends TestCase
{
    public $obj;
    

    /**
     * @dataProvider positiveDataProvider
     */
    public function testPositive($input, $expected)
    {
        $this->obj = new MyClass();
        $this->assertEquals($expected, $this->obj->isSumEqual($input));
    }

    public function testNegative()
    {
        $this->obj = new MyClass();

        $this->expectException(InvalidArgumentException::class);
        
        $this->obj->isSumEqual('1234');
    }

    public function positiveDataProvider()
    {
        return [
            ['123456', false],
            ['385934', true],
            ['456366', true],
            ['789564', false],
        ];
    }
}