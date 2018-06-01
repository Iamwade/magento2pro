<?php
/**
 * Created by PhpStorm.
 * User: iambatman
 * Date: 20.05.18
 * Time: 14:28
 */

namespace Akulov\PageModule\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
