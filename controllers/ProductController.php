<?php

include_once ROOT.'/models/Product.php';

class ProductController {
    
    public function actionList() 
    {
        echo 'productController actionList';
        return true;
    }
    
    public function actionView($param, $id) 
    {
        if ($id) {
        $viewItem = Product::getOneProduct($param, $id);
        
//echo '<br>'.$category;
//echo '<br>'.$id;
//echo '<pre>';
//print_r($viewItem);
//echo '</pre>';
        }
        
        require_once(ROOT.'/views/product/view.php');
        
        return true;
    }
}
