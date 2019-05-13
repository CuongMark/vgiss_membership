<?php


namespace Vgiss\Membership\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Group extends AbstractHelper
{

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->scopeConfig->getValue('membership/general/enable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getRafflePurchaseGroup(){
        return $this->scopeConfig->getValue('membership/general/purchase_ticket_group', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}