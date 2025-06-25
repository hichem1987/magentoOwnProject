<?php
namespace Hichem\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\ScopeInterface;
use Magento\Framework\View\Result\PageFactory;
use Psr\Log\LoggerInterface;

class Goodbye extends Action
{
    protected $resultPageFactory;
    protected $logger;
    private ScopeConfigInterface $scopeConfig;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        LoggerInterface $logger, 
        ScopeConfigInterface $scopeConfig

    ) {
        $this->scopeConfig = $scopeConfig;
        $this->resultPageFactory = $resultPageFactory;
        $this->logger = $logger;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->logger->info('✅ Le contrôleur Goodbye a bien été exécuté.');

        return $this->resultPageFactory->create();
    }
    public function getMessage(): string
    {
        return (string) $this->scopeConfig->getValue(
            'helloworld/settings/message',
            ScopeInterface::SCOPE_STORE
        );
    }
}
