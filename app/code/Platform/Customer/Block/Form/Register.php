<?php

namespace Platform\Customer\Block\Form;

class Register extends \Magento\Customer\Block\Form\Register
{
   public function getRegistrationType()
   {
       return $this->getRequest()->getParam('type');
   }
}
