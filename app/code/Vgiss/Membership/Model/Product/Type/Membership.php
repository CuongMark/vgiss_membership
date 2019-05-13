<?php


namespace Vgiss\Membership\Model\Product\Type;

class Membership extends \Magento\Catalog\Model\Product\Type\Virtual
{

    const TYPE_ID = 'membership';

    /**
     * {@inheritdoc}
     */
    public function deleteTypeSpecificData(\Magento\Catalog\Model\Product $product)
    {
        // method intentionally empty
    }
}
