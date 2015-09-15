<?php

namespace Foggyline\Unitly\Block\Hello;

class Shout extends \Magento\Framework\View\Element\Template
{
    public function greeting($name)
    {
        return 'Hello '.$this->escapeHtml($name);
    }
}
