<?php
namespace TresdTech\FinalProject\Block;
class Display extends \Magento\Framework\View\Element\Template
{
	protected $_postFactory;
	public function __construct(\Magento\Framework\View\Element\Template\Context $context,\TresdTech\FinalProject\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
		parent::__construct($context);
	}
	public function sayHello()
	{
		return __('Hello World');
	}
	public function getPostCollection(){
		$post = $this->_postFactory->create();
		return $post->getCollection();
	}
	public function getFormAction()
	{
		return $this->getUrl('finalproject/index/submit',['_secure' => true]);
	}
}
