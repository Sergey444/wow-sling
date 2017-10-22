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
    
 /*   public function actionContact() 
    {
//$mail = 'slingostudio@gmail.com';
//$subject = 'Тема письма';
//$messege = 'Содержание письма';
//$result = mail($mail, $subject, $messege);
//
//var_dump($result);
//
//require_once(ROOT.'/views/contacts/contact.php');
//
//die;
        $userEmail = '';
        $userText = '';
        $result = false;
        
        if (isset($_POST['submit'])) {
            
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];
            
            $errors = false;
            
            //Валидация полей
            
            
            if ($errors == false) {
                $adminEmail = 'slingostudio@gmail.com';
                $messege = "Текст: {$userText}. От {$userEmail}";
                $subject = 'Тема письма';
                $result = mail($adminEmail, $subject, $messege);
                $result = true;
            }
        }
        
        require_once(ROOT.'/views/contacts/contact.php');
        
        return $result;
        
    }*/
}
