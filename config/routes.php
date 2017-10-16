<?php

return array(
    
    'catalog/([a-z]+)/([0-9]+)' => 'product/view/$1/$2',
    'catalog' => 'catalog/index',
    '' => 'site/index',
    
    'news/([0-9]+)' => 'news/view/$1',
    'news' => 'news/index', //actionIndex в NewsController
    
//'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2', //actionView в NewsController
//'products' => 'product/list',
);

