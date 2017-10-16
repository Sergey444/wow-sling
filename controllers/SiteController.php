<?php

//include_once ROOT.'/models/NewItems.php';
include_once ROOT.'/models/Product.php';

class SiteController 
{
    
    public function actionIndex()
    {
// $new = array();
 //$new = NewItems::getNewList();

        
        
        $latestProducts = array();
        $latestProducts = Product::getLatestProducts();
        
// echo '<pre>';
//print_r($latestProducts);
//echo '</pre>';
        
        require_once(ROOT.'/views/site/index.php');
        
        return true;
    }
}
