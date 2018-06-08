<?php
/**
 * Created by PhpStorm.
 * User: iambatman
 * Date: 18.05.18
 * Time: 22:47
 */
namespace Akulov\SliderModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('akulov_slider', 'id');
    }
}
