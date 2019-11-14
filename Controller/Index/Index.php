<?php
/**
 * @package   SK\StoreConfig
 * @author    Kishan Savaliya <kishansavaliyakb@gmail.com>
 */

namespace SK\StoreConfig\Controller\Index;

use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;
use \SK\StoreConfig\Helper\Data as SKHelper;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_skHelper;

	public function __construct(
		Context $context,
		SKHelper $skHelper,
		PageFactory $resultPageFactory
	){
		$this->_skHelper = $skHelper;
		$this->resultPageFactory = $resultPageFactory;
		parent::__construct($context);
	}

	public function execute(){
		$resultPage = $this->resultPageFactory->create();
		
		$testFieldValue = $this->_skHelper->getConfig("test_section/test_group/test_field");

        $resultPage->getConfig()->getTitle()->prepend(__($testFieldValue));
 
        return $resultPage;
	}
}