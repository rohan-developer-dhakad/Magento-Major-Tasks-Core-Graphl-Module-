<?php
/**
 * @author Mohit Patel
 * @copyright Copyright (c) 2021
 * @package Mag_ExtendQuery
 */

namespace Task\AddProductAttributeGraphQl\Model\Resolver\Product;

class AddCustomAttribute implements \Magento\Framework\GraphQl\Query\ResolverInterface
{

    public function resolve(
        \Magento\Framework\GraphQl\Config\Element\Field $field,
        $context,
        \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
//        $writer = new \Zend_Log_Writer_Stream(BP . '/var/log/unit.log');
//        $logger = new \Zend_Log();
//        $logger->addWriter($writer);
        $product = $value['model'];
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $_product = $objectManager->get('Magento\Catalog\Model\Product')->load($product->getId());
//        $logger->info(var_dump($_product->getData('product_unit')));
        return $_product->getData('product_unit');
    }
}