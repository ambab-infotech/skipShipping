<?php

namespace Ambab\SkipShipping\Model;

use \Magento\Checkout\Model\ConfigProviderInterface;
use \Ambab\SkipShipping\Helper\Data as SkipshippingHelper;

class DisplayShippingCharge implements ConfigProviderInterface
{
    public $skipshippingHelper;

    public function __construct(
        SkipshippingHelper $skipshippingHelper
    ) {
        $this->skipshippingHelper = $skipshippingHelper;
    }
    public function getConfig()
    {
        $config = [];
        $config['ambabSkipShippingSettings'] = $this->getSettings();
        return $config;
    }

    public function getSettings()
    {
        $settings = [];
        if ($this->skipshippingHelper->isEnabled()) {
            $showShipping=$this->skipshippingHelper->canShowShippingInTotals();
        } else {
            $showShipping=0;
        }
        $settings['hideShippingCharge'] = $showShipping;
        $settings['isEnabled'] = $this->skipshippingHelper->isEnabled();
        return $settings;
    }
}
