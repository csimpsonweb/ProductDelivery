<?php
namespace ProjectX\ProductDelivery\Block;
use Psr\Log\LoggerInterface;
class  Printlog
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function logExample()
    {
        //Print log in var/log/system.log
            $this->logger->info('Testing Info');
            //Output: [2022-02-01 13:33:42] main.INFO: Testing Info [] []

            //Print log in var/log/debug.log
            $this->logger->debug('Testing Debug');
            //Output: [2022-02-01 13:33:42] main.DEBUG: Testing Debug {"is_exception":false} []

            // Write to default log file: var/log/system.log
            $this->logger->notice('Testing Notice');
            //Output: [2022-02-01 13:33:42] main.NOTICE: Testing Notice [] []

            // Write to default log file: var/log/system.log
            $this->logger->alert('Testing Alert');
            //Output: [2022-02-01 13:33:42] main.ALERT: Testing Alert [] []

            // Write to default log file: var/log/system.log
            $this->logger->error('Testing Error');
            //Output: [2022-02-01 13:33:42] main.ERROR: Testing Error [] []

            // Write to default log file: var/log/system.log
            $this->logger->critical('Testing Critical Error');
            //Output: [2022-02-01 13:33:42] main.CRITICAL: Testing Critical Error [] []

        }
}
