<?php

namespace Foggyline\Unitly\Test\Unit\Controller\Hello;

class ShoutTest extends \PHPUnit_Framework_TestCase
{
    protected $resultPageFactory;
    protected $controller;

    public function setUp()
    {
        $request = $this->getMock(
            'Magento\Framework\App\Request\Http',
            [],
            [],
            '',
            false
        );

        $context = $this->getMock(
            '\Magento\Framework\App\Action\Context',
            ['getRequest'],
            [],
            '',
            false
        );

        $context->expects($this->once())
            ->method('getRequest')
            ->willReturn($request);

        $this->resultPageFactory = $this->getMockBuilder('Magento\Framework\View\Result\PageFactory')
            ->disableOriginalConstructor()
            ->setMethods(['create'])
            ->getMock();

        $this->controller = new \Foggyline\Unitly\Controller\Hello\Shout(
            $context,
            $this->resultPageFactory
        );
    }

    public function testExecute()
    {
        $title = $this->getMockBuilder('Magento\Framework\View\Page\Title')
            ->disableOriginalConstructor()
            ->getMock();
        $title->expects($this->once())
            ->method('set')
            ->with('Unitly');

        $config = $this->getMockBuilder('Magento\Framework\View\Page\Config')
            ->disableOriginalConstructor()
            ->getMock();
        $config->expects($this->once())
            ->method('getTitle')
            ->willReturn($title);

        $page = $this->getMockBuilder('Magento\Framework\View\Result\Page')
            ->disableOriginalConstructor()
            ->getMock();
        $page->expects($this->once())
            ->method('getConfig')
            ->willReturn($config);

        $this->resultPageFactory->expects($this->once())
            ->method('create')
            ->willReturn($page);

        $result = $this->controller->execute();

        $this->assertInstanceOf('Magento\Framework\View\Result\Page', $result);
    }
}
