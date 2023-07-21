<?php

use PHPUnit\Framework\TestCase;
use sampleUnitTestExample\Average;

class AverageTest extends TestCase
{
    protected $average;
    /**
     * @var array
     */
    private $numbers;

    /**
     * This method executes before every test method, so we can initialize our resources here.
     * Since we have same numbers in the array we can move the numbers array in the setup method as well
     */
    public function setUp()
    {
        $this->average = new Average();
        $this->numbers = [13, 18, 13, 14, 13, 16, 14, 21, 13];
    }

    /**
     * This method test if the average mean is equal to 15.
     */
    public function testMeanAverage()
    {
        $this->assertEquals(15, $this->average->mean($this->numbers));
    }


    /**
     * This method test if the average median is equal to 14.
    */
    
    public function testMedianAverage()
    {
        $this->assertEquals(14, $this->average->median($this->numbers));
    }

    
    /**
     * This method test if the average mode is equal to 13.
    */
    public function testModeAverage()
    {
        $this->assertSame(13, $this->average->mode($this->numbers));
    }
}
