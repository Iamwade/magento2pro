<?php
/**
 * Created by PhpStorm.
 * User: iambatman
 * Date: 18.05.18
 * Time: 16:19
 */
namespace Akulov\SliderModule\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
       $setup->startSetup();

        $table = $setup->getConnection()->newTable(
            $setup->getTable('akulov_slider')
        )->addColumn(
            'id',
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'Item ID'
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Item Name'
        )->addColumn(
            'image',
            Table::TYPE_TEXT,
            null,
            ['nullable' => false],
            'images'
        )->addColumn(
            'discription',
            Table::TYPE_TEXT,
            null,
            ['nullable' => false],
            'discription'
        )->addColumn(
            'created_at',
            Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
            'Creation Time'
        );


        $setup->getConnection()->createTable($table);

       $setup->endSetup();
    }
}