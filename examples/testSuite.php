<?php

namespace Your\Name_Space;

class YourTestSuite extends \PHPUnit_Framework_TestCase
{
    public function testIncomplete()
    {
        // Optional: Test anything here, if you want.
        $this->assertTrue(TRUE, 'This should already work.');

        // Stop here and mark this test as incomplete.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    public function testRisky()
    {
    }

    public function testSkipped()
    {
        $this->markTestSkipped('This test was skipped for any reason.');
    }

    public function testFailure()
    {
        $this->assertEmpty(array('foo'));
    }

    public function testPass()
    {
        $this->assertTrue(TRUE, 'This should always work.');
    }

    /**
     * @dataProvider additionProvider
     */
    public function testDataProvider($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
        return array(
            array(0, 0, 0),
            array(0, 1, 1),
            array(1, 0, 1),
            array(1, 1, 3)
        );
    }
}
