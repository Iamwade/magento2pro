<?php
/**
 * Created by PhpStorm.
 * User: iambatman
 * Date: 18.05.18
 * Time: 23:10
 */

namespace Akulov\SliderModule\Model\ResourceModel\Item;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Akulov\SliderModule\Model\Item;
use Akulov\SliderModule\Model\ResourceModel\Item as ItemResource;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(Item::class, ItemResource::class);
    }
}