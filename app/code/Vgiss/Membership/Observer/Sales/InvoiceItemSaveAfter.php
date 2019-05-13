<?php


namespace Vgiss\Membership\Observer\Sales;



use Magento\Catalog\Model\ProductRepository;
use Vgiss\Membership\Model\Membership;

class InvoiceItemSaveAfter implements \Magento\Framework\Event\ObserverInterface
{

    private $membership;
    private $productRepository;

    public function __construct(
        Membership $membership,
        ProductRepository $productRepository
    )
    {
        $this->membership = $membership;
        $this->productRepository = $productRepository;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function execute(
        \Magento\Framework\Event\Observer $observer
    ){
        /** @var \Magento\Sales\Model\Order\Invoice\Item $invoiceItem */
        $invoiceItem = $observer->getData('invoice_item');
        $customerId = $invoiceItem->getOrderItem()->getOrder()->getCustomerId();
        $product = $this->productRepository->getById($invoiceItem->getProductId());
        $group_membership = $product->getData('Membsership');
        $this->membership->addCustomerToGroup($customerId, $group_membership);
    }
}
