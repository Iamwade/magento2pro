<?php
/**
 * Created by PhpStorm.
 * User: iambatman
 * Date: 18.05.18
 * Time: 16:57
 */
namespace Akulov\SliderModule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->insert(
            $setup->getTable('akulov_slider'),
            [
                'name' => 'sea',
                'image' => 'sea.jpeg',
                'discription' => 'sea description'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('akulov_slider'),
            [
                'name' => 'pool',
                'image' => 'pool.jpeg',
                'discription' => 'pool description'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('akulov_slider'),
            [
                'name' => 'ship',
                'image' => 'ship.jpeg',
                'discription' => 'ship description'
            ]
        );


        $setup->endSetup();
    }
}