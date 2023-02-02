<?php

namespace Task\CustomPaymentMethod\Block\Form;

/**
 * Class Custompayment
 * @package Task\CustomPaymentMethod\Block\Form
 */
class Custompayment extends \Magento\OfflinePayments\Block\Form\AbstractInstruction
{
    /**
     * @var string
     */
    protected $_template = 'Task_CustomPaymentMethod::form/custompayment.phtml';
}