<?php

return array(
    
    //'contacts' => 'site/contact',
    
    //Корзина:
    'cart/checkout' => 'cart/checkout', //actionCheckout в CartController
    'cart/delete/([0-9]+)' => 'cart/delete/$1', //actionDelete в CartController
    'cart/add/([0-9]+)' => 'cart/add/$1',//actionAdd в CartController
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', //actionAdd в CartController  
    'cart' => 'cart/index', //actionIndex в CartController
    
    
    'catalog/([a-z]+)/page-([0-9]+)' => 'catalog/index/$1/$2',
    'catalog/([a-z]+)/([0-9]+)' => 'product/view/$1/$2',
    'catalog' => 'catalog/index',
    '' => 'site/index'
    
    //'news/([0-9]+)' => 'news/view/$1',
    //'news' => 'news/index', //actionIndex в NewsController
 
);

