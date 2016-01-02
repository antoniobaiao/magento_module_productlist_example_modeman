<?php
class Antoniobaiao_Productlist_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {



 if ($this->getRequest()->isPost()){

        $int1 = $this->getRequest()->getPost('int1');
        

    $products_collection = Mage::getModel('catalog/product')
->getCollection()
->addAttributeToSelect('*')
->addAttributeToFilter('price', array('gt' => $int1));



    }else
    {
    	$products_collection = Mage::getModel('catalog/product')
->getCollection()
->addAttributeToSelect('*');
    }

Mage::register('products_collection', $products_collection);

       $this->loadLayout();  
        $this->renderLayout();

    }
}