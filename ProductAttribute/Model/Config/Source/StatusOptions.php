<?php
namespace Task\ProductAttribute\Model\Config\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class StatusOptions extends AbstractSource
{
    /**
     * Get all options
     *
     * @return array
     */
    public function getAllOptions()
    {
        if (null === $this->_options) {
            $this->_options=[
                ['label' => __('Kg'), 'value' => "Kg"],
                ['label' => __('Litre'), 'value' => "Litre"],
                ['label' => __('mL'), 'value' => "mL"],
                ['label' => __('Packets'), 'value' => "Packets"]
            ];
        }
        return $this->_options;
    }
}