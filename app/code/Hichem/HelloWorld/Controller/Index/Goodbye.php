<?php
namespace Hichem\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Psr\Log\LoggerInterface;

class Goodbye extends Action
{
    protected $resultPageFactory;
    protected $logger;

    public function __construct(Context $context, PageFactory $resultPageFactory, LoggerInterface $logger)
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->logger = $logger;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->logger->info('GoodbyeWorld Controller loaded');
        return $this->resultPageFactory->create();
    }
}
