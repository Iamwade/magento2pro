<?php

namespace Akulov\SliderModule\Block;

use Magento\Framework\View\Element\Template;
use Akulov\SliderModule\Model\ResourceModel\Item\Collection;
use Akulov\SliderModule\Model\ResourceModel\Item\CollectionFactory;

class Slider extends Template
{
    private $collectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    )

    {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }



    public function getItems()
    {
        $collection = $this->collectionFactory->create();
        return $collection;
    }
}