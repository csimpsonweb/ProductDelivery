<?php
namespace ProjectX\ProductDelivery\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\Stdlib\DateTime\TimezoneInterface;

class Data extends AbstractHelper
{
    protected $timezoneInterface;

    public function __construct(Context $context, TimezoneInterface $timezoneInterface)
    {
        $this->timezoneInterface = $timezoneInterface;
        parent::__construct($context);
    }

    public function getStoreDateTime()
    {
        $formatDate = $this->timezoneInterface->formatDate();
        // you can also get format wise date and time
        $dateTime = $this->timezoneInterface->date()->format('Y-m-d H:i:s');
        $date = $this->timezoneInterface->date()->format('Y-m-d');
        $time = $this->timezoneInterface->date()->format('H:i');
        return $dateTime;
    }
}
