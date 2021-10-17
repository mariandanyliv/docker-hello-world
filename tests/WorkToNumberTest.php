<?php

use PHPUnit\Framework\TestCase;

class WorkToNumberTest extends TestCase
{   
    /**
     * @dataProvider testGetMinuteQuarterpositiveDataProvider
     */
    public function testGetMinuteQuarterPositive(int $minute, $expected)
    {
        $instence = new WorkToNumber();
        
        $this->assertEquals($expected, $instence->getMinuteQuarter($minute));
    }

    public function testGetMinuteQuarterNegative()
    {
        $instence = new WorkToNumber();
        
        $this->expectException(InvalidArgumentException::class);

        $instence->getMinuteQuarter(75);
    }

    public function testGetMinuteQuarterpositiveDataProvider()
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

    /**
     * @dataProvider testIsLeapYearPositiveDataProvider
     */
    public function testIsLeapYearPositive(int $year, $expected)
    {
        $instence = new WorkToNumber();

        $this->assertEquals($expected,  $instence->isLeapYear($year));
    }

    public function testIsLeapYearNegative()
    {
        $instence = new WorkToNumber();

        $this->expectException(InvalidArgumentException::class);

        $instence->isLeapYear(1500);
    }

    public function testIsLeapYearPositiveDataProvider()
    {
        return [
            [1904, true],
            [1905, false],
            [1932, true],
            [1933, false],
            [1948, true],
            [1964, true],
            [1965, false],
            [2000, true],
            [2008, true],
            [2016, true],
            [2017, false],
            [2020, true],
            [2021, false],
            [2024, true],
            [2028, true],
            [2100, false],
            [2200, false],
            [2300, false],
        ];
    }

    /**
     * @dataProvider testIsSumEqualPositiveDataProvider
     */
    public function testIsSumEqualPositive(string $input, $expected)
    {
        $instence = new WorkToNumber();

        $this->assertEquals($expected, $instence->isSumEqual($input));
    }

    public function testIsSumEqualNegative()
    {
        $instence = new WorkToNumber();

        $this->expectException(InvalidArgumentException::class);
        
        $instence->isSumEqual('1234');
    }

    public function testIsSumEqualPositiveDataProvider()
    {
        return [
            ['123456', false],
            ['385934', true],
            ['456366', true],
            ['789564', false],
        ];
    }
}