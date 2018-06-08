<?php
/**
 * Created by PhpStorm.
 * User: iambatman
 * Date: 18.05.18
 * Time: 22:56
 */

namespace Akulov\SliderModule\Model;

use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Akulov\SliderModule\Model\ResourceModel\Item::class);
    }
}