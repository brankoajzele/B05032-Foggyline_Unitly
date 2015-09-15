<?php

namespace Foggyline\Unitly\Controller;

abstract class Hello extends \Magento\Framework\App\Action\Action
{
    public function __construct(
        \Magento\Framework\App\Action\Context $context
    ) {
        parent::__construct($context);
    }
}
