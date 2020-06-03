<?php
namespace Tuandz\Helloworld\Block;

use Magento\Framework\View\Element\Template;
use Magento\TestFramework\Event\Magento;
use Magento\Widget\Block\BlockInterface;
use \Magento\Framework\Registry;
class Hello extends Template
{

    public $_catalogSession;
    public $_customerSession;
    public $_checkoutSession;
    public $_registry;

    public function __construct(
    \Magento\Backend\Block\Template\Context $context,
    \Magento\Framework\Registry $registry,
    \Magento\Catalog\Model\Session $catalogSession,
    \Magento\Customer\Model\Session $customerSession,
    \Magento\Checkout\Model\Session $checkoutSession,
    array $data = []
     ){
        $this->_catalogSession = $catalogSession;
        $this->_checkoutSession = $checkoutSession;
        $this->_customerSession = $customerSession;
        $this->_registry = $registry;
        parent::__construct($context, $data);
    }

    public function  getRegistry()
    {
        return $this->_registry;
    }

    public  function  getCatalogSession()
    {
        return $this->_catalogSession;
    }

    public  function  getCustomerSession()
    {
        return $this->_custermerSession;
    }

    public  function  getCheckoutSession()
    {
        return $this->_checkoutSession;
    }

}
