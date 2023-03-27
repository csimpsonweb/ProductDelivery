<?php
namespace ProjectX\ProductDelivery\Observer;

use Magento\Framework\Event\ObserverInterface;
use Zend_Debug;

class AddToCartObserver implements ObserverInterface
{
    protected $date;

    public function __construct(\Magento\Framework\Stdlib\DateTime\DateTime $date)
    {
        $this->date = $date;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $product = $observer->getProduct();
        //$logger->info(print_r($product, true));

        // Log that we added a product for visibility
        $logger = \Magento\Framework\App\ObjectManager::getInstance()->get(\Psr\Log\LoggerInterface::class);
        $logger->info('added a product to the basket');

        // Log the Date & Time the order is placed
        $date = $this->date->gmtDate();
        $logger->info(print_r($date, true));


        //print_r('returns nothing');

        //Zend_Debug::dump($date);
        //die();
    }
}
