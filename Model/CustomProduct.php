<?php
namespace ProjectX\ProductDelivery\Model;

use Magento\Catalog\Model\Product as MagentoProduct;

class CustomProduct extends MagentoProduct
{

    // Add your custom methods and properties here
    public function getPrice()
    {
        // Add your custom logic here
        return parent::getPrice();
    }

    public function createlog()
    {
        $objectmanager = \Magento\Framework\App\ObjectManager::getInstance();
        $objectmanager->get('Psr\Log\LoggerInterface')->info('Testing Log'); //Print log in var/log/system.log
        $objectmanager->get('Psr\Log\LoggerInterface')->debug('Testing Log'); //Print log in var/log/debug.log
    }
}
