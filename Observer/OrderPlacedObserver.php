<?php
namespace ProjectX\ProductDelivery\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class OrderPlacedObserver implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        /** @var $orderInstance Order */
        $order = $observer->getOrder();
        $orderId = $order->getRealOrderId();

        $logger = \Magento\Framework\App\ObjectManager::getInstance()->get(\Psr\Log\LoggerInterface::class);
        $logger->info('an order was placed');


        $logger->info(print_r($orderId, true));
        //$logger->info(print_r($order, true));

    }
}
