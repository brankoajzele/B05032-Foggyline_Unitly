<?php

namespace Foggyline\Unitly\Test\Unit\Block\Hello;

class ShoutTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Foggyline\Unitly\Block\Hello\Shout
     */
    protected $block;

    protected function setUp()
    {
        $objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->block = $objectManager->getObject('Foggyline\Unitly\Block\Hello\Shout');
    }

    public function testGreeting()
    {
        $name = 'Foggyline';

        $this->assertEquals(
            'Hello '.$this->block->escapeHtml($name),
            $this->block->greeting($name)
        );
    }
}
