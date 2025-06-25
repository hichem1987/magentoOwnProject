<?php 
namespace Hichem\HelloWorld\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Config implements ArgumentInterface
{
    private ScopeConfigInterface $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function getMessage(): string
    {
        return (string) $this->scopeConfig->getValue('helloworld/general/message');
    }
}
