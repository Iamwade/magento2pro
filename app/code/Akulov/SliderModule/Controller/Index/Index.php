<?php
/**
 * Created by PhpStorm.
 * User: iambatman
 * Date: 20.05.18
 * Time: 14:28
 */

namespace Akulov\SliderModule\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
//        /** @var \Magento\Framework\Controller\Result\Raw  $result */
//        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
//        $result->setContents('Hello World!');
//        return $result;
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
