<?php

namespace Platform\Customer\Block\Form;

class Choose extends \Magento\Customer\Block\Form\Register
{
    protected function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Hire professionals for your needs'));
    }

    public function getCreateAccountCustomerUrl()
    {
        return $this->getUrl('customer/account/create', ['type' => 'customer']);
    }

    public function getCreateAccountWorkerUrl()
    {
        return $this->getUrl('customer/account/create', ['type' => 'worker']);
    }
}
