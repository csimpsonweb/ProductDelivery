<?php
namespace ProjectX\ProductDelivery\Observer;
use Psr\Log\LoggerInterface as Logger;
class CustomObserver implements ObserverInterface
{
    /**
     * @var Logger
     */
    protected $_logger;

    /**
     * [__construct ]
     *
     * @param Logger $logger
     */
    public function __construct(
        Logger $logger
    ) {
        $this->_logger = $logger;
    }
    /**@param  \Magento\Framework\Event\Observer $observer
     *
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $data = $observer->getEvent()->getData();
        $this->_logger->info(print_r($data,true));
    }
}
