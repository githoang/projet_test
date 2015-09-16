<?php

namespace Foody\ImportProductBundle\Processor;

use Akeneo\Bundle\BatchBundle\Entity\StepExecution;
use Akeneo\Bundle\BatchBundle\Item\AbstractConfigurableStepElement;
use Akeneo\Bundle\BatchBundle\Item\InvalidItemException;
use Akeneo\Bundle\BatchBundle\Item\ItemProcessorInterface;
use Akeneo\Bundle\BatchBundle\Step\StepExecutionAwareInterface;
use Pim\Bundle\CatalogBundle\Manager\ProductManager;

class ProductProcessor extends AbstractConfigurableStepElement implements ItemProcessorInterface, StepExecutionAwareInterface
{
    /** @var StepExecution */
    protected $stepExecution;

    /** @var ProductManager */
    protected $productManager;

    protected $productUpdater;

    public function __construct($manager, $updater)
    {
        $this->productManager = $manager;
        $this->productUpdater = $updater;
    }

    public function process($item)
    {
        $sku = $item['GTIN_CD'];
        $segment = $item['GPC_S_CD'];
        $family = $item['GPC_F_CD'];
        $class = $item['GPC_C_CD'];
        $brick = $item['GPC_B_CD'];
        $brand = $item['BSIN'];
        $product_line = $item['PRODUCT_LINE'];
        $name = $item['GTIN_NM'];
        $brand_name = $item['BRAND_NM'];
        $pkg_type = $item['PKG_TYPE_CD'];
        $pkg_unit = $item['PKG_UNIT'];

        $attribute = $this->productManager->getIdentifierAttribute();

        $product = $this->productManager->createProduct();
        $value   = $this->productManager->createProductValue();
        $value->setAttribute($attribute);
        $value->setData($sku);
        $product->addValue($value);

        $updater = $this->productUpdater;
        $tablo = array();
        $tablo[] = $product;
        $updater->setValue($tablo, 'name', $name);
        $updater->setValue($tablo, 'brand_name', $brand_name);
        $updater->setValue($tablo, 'brand', $brand);
        $updater->setValue($tablo, 'package_type', $pkg_type);
        $updater->setValue($tablo, 'package_unit', $pkg_unit);
        $updater->setValue($tablo, 'product_line', $product_line);


        return $product;
        
    }

    public function getConfigurationFields()
    {
        return array();
    }

    public function setStepExecution(StepExecution $stepExecution)
    {
        $this->stepExecution = $stepExecution;
    }
}