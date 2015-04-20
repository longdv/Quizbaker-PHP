<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2014-10-19 at 17:53:08.
 */
class TextTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Text
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Text;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * Generated from @assert ('apple', 0) == 'no apples'.
     *
     * @covers Text::plural
     */
    public function testPlural() {
        $this->assertEquals(
                'no apples'
                , $this->object->plural('apple', 0)
        );
    }

    /**
     * Generated from @assert ('apple', 1) == '1 apple'.
     *
     * @covers Text::plural
     */
    public function testPlural2() {
        $this->assertEquals(
                '1 apple'
                , $this->object->plural('apple', 1)
        );
    }

    /**
     * Generated from @assert ('apple', 2) == '2 apples'.
     *
     * @covers Text::plural
     */
    public function testPlural3() {
        $this->assertEquals(
                '2 apples'
                , $this->object->plural('apple', 2)
        );
    }

    /**
     * Generated from @assert (null) throws InvalidArgumentException.
     *
     * @covers Text::formatDateTime
     * @expectedException InvalidArgumentException 
     */
    public function testFormatDateTime() {
        $this->object->formatDateTime(null);
    }

    /**
     * Generated from @assert (new DateTime("2000-07-01 14:30")) == '01-07-2000 14:30'.
     *
     * @covers Text::formatDateTime
     */
    public function testFormatDateTime2() {
        $s = "01-Jul-2000 14:30";
        $d = new DateTime($s);
        $this->assertEquals($s, $this->object->formatDateTime($d->getTimeStamp()));
    }

}