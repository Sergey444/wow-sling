<?php
/*
include_once ROOT.'/models/News.php';

class NewsController {
    
    
    public function actionIndex() 
    {
        //echo 'Список новостей';
        
        $newsList = array();
        $newsList = News::getNewsList();
        
        require_once(ROOT.'/views/news/index.php');
        
//echo '<pre>';
//print_r($newsList);
//echo '</pre>';
        
        return true;
    }
    
    public function actionView($id) 
    {
        echo 'Просмотр одной новости';
        
        if ($id) {
        $newsItem = News::getNewsItemById($id);
        
        //echo '<br>'.$category;
        //echo '<br>'.$id;
        echo '<pre>';
        print_r($newsItem);
        echo '</pre>';
        }
       
        
        return true;
    }
}
*/