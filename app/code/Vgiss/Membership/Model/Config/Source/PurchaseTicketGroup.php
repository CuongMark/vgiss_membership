<?php


namespace Vgiss\Membership\Model\Config\Source;

class PurchaseTicketGroup implements \Magento\Framework\Option\ArrayInterface
{
    private $groupMultiselect;

    public function __construct(
        \Magento\Customer\Model\Config\Source\Group\Multiselect $groupMultiselect
    ){
        $this->groupMultiselect = $groupMultiselect;
    }

    public function toOptionArray()
    {
        return $this->groupMultiselect->toOptionArray();
    }

    public function toArray()
    {
        return ['' => __('')];
    }
}