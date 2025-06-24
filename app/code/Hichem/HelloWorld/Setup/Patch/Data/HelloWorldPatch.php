<?php
namespace Hichem\HelloWorld\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\App\Config\Storage\WriterInterface;
use Psr\Log\LoggerInterface;

class HelloWorldPatch implements DataPatchInterface
{
    private $configWriter;
    private $logger;

    public function __construct(
        WriterInterface $configWriter,
        LoggerInterface $logger
    ) {
        $this->configWriter = $configWriter;
        $this->logger = $logger;
    }

    public function apply()
    {
        $value = 'Patch exécuté à ' . date('Y-m-d H:i:s');
        $this->configWriter->save('helloworld/debug', $value);

        $this->logger->info('🎉 Patch HelloWorldPatch exécuté');
        return $this;
    }

    public static function getDependencies(): array
    {
        return [];
    }

    public function getAliases(): array
    {
        return [];
    }
}
