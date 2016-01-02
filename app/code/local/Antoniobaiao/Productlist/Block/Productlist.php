<?php
class Antoniobaiao_Productlist_Block_Product extends Mage_Core_Block_Template{

    private $collection;

    public function __construct()
    {
       

        parent::__construct();
        $this->collection = Mage::getModel('catalog/product')->getCollection();
        
    }
 
    public function getProductCollection()
    {
        echo "string";
        retunr $this->collection;
    }

    public function getTeste()
    {
        echo "vamossss";
        return "testeeeeeeeee";
    }
    
    }