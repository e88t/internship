<?php

namespace Elogic\CheckoutStaticMessage\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{

    const XML_PATH_CHECKOUTSTATICMESSAGE = 'checkoutstaticmessage/';

    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field, ScopeInterface::SCOPE_STORE, $storeId
        );
    }

    public function getGeneralConfig($code, $storeId = null)
    {
        return $this->getConfigValue(self::XML_PATH_CHECKOUTSTATICMESSAGE .'general/'. $code, $storeId);
    }

}
