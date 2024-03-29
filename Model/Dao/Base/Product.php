<?php

/**
 * Model_Dao_Base_Product
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $barcode
 * @property string $stock
 * @property Doctrine_Collection $ProductL10n
 * @property Doctrine_Collection $Image
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Model_Dao_Base_Product extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('product');
        $this->hasColumn('barcode', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('stock', 'string', null, array(
             'type' => 'string',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Model_Dao_ProductL10n as ProductL10n', array(
             'local' => 'id',
             'foreign' => 'product_id'));

        $this->hasMany('Model_Dao_Image as Image', array(
             'local' => 'id',
             'foreign' => 'product_id'));
    }
}