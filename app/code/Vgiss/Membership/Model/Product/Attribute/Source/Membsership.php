<?php


namespace Vgiss\Membership\Model\Product\Attribute\Source;

class Membsership extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

    private $groupMultiselect;

    public function __construct(
        \Magento\Customer\Model\Config\Source\Group\Multiselect $groupMultiselect
    ){
        $this->groupMultiselect = $groupMultiselect;
    }

    /**
     * getAllOptions
     *
     * @return array
     */
    public function getAllOptions()
    {
        return $this->groupMultiselect->toOptionArray();
    }
}
