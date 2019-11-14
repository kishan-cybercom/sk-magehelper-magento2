<?php
/**
 * @package   SK\StoreConfig
 * @author    Kishan Savaliya <kishansavaliyakb@gmail.com>
 */

namespace SK\StoreConfig\Controller\Index;

use \Magento\Framework\App\Action\Context;
use \SK\StoreConfig\Helper\Data as SKHelper;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_skHelper;

	public function __construct(
		Context $context,
		SKHelper $skHelper
	){
		$this->_skHelper = $skHelper;
		parent::__construct($context);
	}

	public function execute(){
		echo $this->_skHelper->getConfig("test_section/test_group/test_field");
	}
}