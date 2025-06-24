<?php
namespace Hichem\HelloWorld\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class MessageProvider implements ArgumentInterface
{
    public function getMessage(): string
    {
        return "affichage Goodbye depuis ViewModel!";
    }
}