<?php

include_once ROOT.'/models/Product.php';

class CatalogController {
    
    public function actionIndex($param)
    {
//echo $param;
        $catalog = array();
        $catalog = Product::getCatalogProduct($param);
        
        require_once(ROOT.'/views/catalog/index.php');
        
        return true;
    }
    
}
