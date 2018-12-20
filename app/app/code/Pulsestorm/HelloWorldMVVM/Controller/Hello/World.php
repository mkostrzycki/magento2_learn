<?php

namespace Pulsestorm\HelloWorldMVVM\Controller\Hello;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class World
 * @package Pulsestorm\HelloWorldMVVM\Controller\Hello
 */
class World extends Action
{
    /**
     * @var PageFactory
     */
    protected $pageFactory;

    /**
     * World constructor.
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory
    ) {
        $this->pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        var_dump(__METHOD__);
        $page_object = $this->pageFactory->create();
        return $page_object;
    }
}
