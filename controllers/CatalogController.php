<?php

//include_once ROOT.'/models/Product.php';
//include_once ROOT.'/components/Pagination.php';

class CatalogController {
    
    
    
    public function actionIndex($param, $page = 1)
    {
//echo $param.'<br>';
//echo $page;
        
        
        
        $catalog = array();
        $catalog = Product::getCatalogProduct($param, $page);
        
        $total = Product::getTotalProductsInCatalog($param);
        
        //Создаём объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
        
        require_once(ROOT.'/views/catalog/index.php');
        
        return true;
        
    }
    
}
