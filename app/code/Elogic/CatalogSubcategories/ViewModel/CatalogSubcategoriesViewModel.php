<?php
namespace Elogic\CatalogSubcategories\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class CatalogSubcategoriesViewModel implements ArgumentInterface
{
    private $layerResolver;

    public function __construct(
        \Magento\Catalog\Model\Layer\Resolver $layerResolver
    )
    {
        $this->layerResolver = $layerResolver;
    }

    public function getCurrentCategory()
    {
        return $this->layerResolver->get()->getCurrentCategory();
    }
}
