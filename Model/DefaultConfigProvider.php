<?php

namespace SK\StoreConfig\Model;

use Magento\Store\Model\ScopeInterface;

class DefaultConfigProvider extends \Magento\Checkout\Model\DefaultConfigProvider
{
    public function getConfig()
    {
        $output = parent::getConfig();
        $output['test_config_value'] = $this->scopeConfig->getValue(
                    'test_section/test_group/test_field',
                    ScopeInterface::SCOPE_STORE
                );
        return $output;
    }
}
