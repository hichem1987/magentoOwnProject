<?php

namespace Hichem\HelloWorld\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Goodbye implements ArgumentInterface
{
    private ScopeConfigInterface $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function getMessage(): string
    {
        return (string) $this->scopeConfig->getValue(
            'helloworld/settings/message',
            ScopeInterface::SCOPE_STORE
        );
    }
}
