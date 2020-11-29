<?php

namespace First\Stikers\Controller\Stikers;

class Index extends \Magento\Framework\App\Action\Action
{
	public function __construct(
		\Magento\Framework\App\Action\Context $context)
	{
		return parent::__construct($context);
	}

	public function execute()
	{
		$resultRedirect = $this->resultRedirectFactory->create();
		return $resultRedirect->setPath('/');
	}

}
