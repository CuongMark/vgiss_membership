<?php
namespace Vgiss\Membership\Model;

use Magento\Customer\Model\ResourceModel\CustomerRepository;

class Membership{
    private $customerRepository;

    public function __construct(
        CustomerRepository $customerRepository
    ){
        $this->customerRepository = $customerRepository;

    }

    public function addCustomerToGroup($customer_id, $group_ids){
        $customer = $this->customerRepository->getById($customer_id);

        $customer->setGroupId($group_ids);

        $this->customerRepository->save($customer);
    }
}