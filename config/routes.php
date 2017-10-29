<?php

return array(
    
    
    //Страницы контента
     'content/([a-z]+)' => 'content/index/$1',
    
    //Покупка в один клик или заказ
    'cart/chooseone/([0-9]+)/([a-z]+)' => 'product/chooseOne/$1/$2',
    
    //Корзина:
    'cart/checkout' => 'cart/checkout', //actionCheckout в CartController
    'cart/deleteOne/([0-9]+)' => 'cart/deleteOne/$1',
    'cart/delete/([0-9]+)' => 'cart/delete/$1', //actionDelete в CartController
    'cart/add/([0-9]+)' => 'cart/add/$1',//actionAdd в CartController
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', //actionAdd в CartController  
    'cart' => 'cart/index', //actionIndex в CartController
    
    
    'catalog/([a-z]+)/page-([0-9]+)' => 'catalog/index/$1/$2',
    'catalog/([a-z]+)/([0-9]+)' => 'product/view/$1/$2',
    'catalog' => 'catalog/index',
    
    
    //Управление товарами
    'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product' => 'adminProduct/index',
    //Управление категориями
    'admin/category/create' => 'adminCategory/create',
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    'admin/category' => 'adminCategory/index',
    //Админ панель    
    'user/login' => 'user/login',
    'admin' => 'admin/index',
    
    //Главная страница
    '' => 'site/index',
    
    
   
    
    //'news/([0-9]+)' => 'news/view/$1',
    //'news' => 'news/index', //actionIndex в NewsController
 
);

