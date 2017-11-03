<?php

include_once ROOT.'/models/Product.php';

class ProductController {
    
    public function actionList() 
    {
        //echo 'productController actionList';
        //return true;
    }
    
    public function actionView($param, $id) 
    {
        if ($id) {
            
        $viewItem = Product::getOneProduct( $id);
        
//echo '<br>'.$category;
//echo '<br>'.$id;
//echo '<pre>';
//print_r($param);
//echo '</pre>';
        }
        
        require_once(ROOT.'/views/product/view.php');
        
        return true;
    }
    
    public function actionAjaxChooseOne($id) 
    {
        
     
        $result = false;
        
        
        //Форма отправлена?
        if (isset($_POST['name'])) {
            //Форма отправлена? - Да
            //
            //Считываем данные формы
            $userName =  $_POST['name'];
            $userPhone = $_POST['phone'];
            $userEmail = $_POST['email'];
            
            if (!isset($_POST['city'])) { $_POST['city'] = 'Не заполнен'; }
            
            $userCity = $_POST['city'];
            
            if (!isset($_POST['post_order'])) { $_POST['post_order'] = 'Не заполнен'; }
            
            $userPostOrder = $_POST['post_order'];
            
            if (!isset($_POST['street'])) { $_POST['street'] = 'Не заполнен'; }
           
            $userStreet = $_POST['street'];
            
            if (!isset($_POST['number_house'])) { $_POST['number_house'] = 'Не заполнен'; }
            
            $userHouse = $_POST['number_house'];
            
            if (!isset($_POST['number_flat'])) { $_POST['number_flat'] = 'Не заполнен'; }
            
            $userFlat = $_POST['number_flat'];
            
            if (!isset($_POST['info'])) { $_POST['info'] = 'Не заполнен'; }
            
            $userInfo = $_POST['info'];
            
            if (!isset($_POST['agree'])) { $_POST['agree'] = 0; }
            $userAgree = $_POST['agree'];
            //Валидация полей
            $errors = false;
            
            if (!Validation::checkName($userName)) {
                $errors[] = 'Неправильное имя';
            }
            if (!Validation::checkPhone($userPhone)) {
                $errors[] = 'Неправильный телефон';
            }
            if (!Validation::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }
            if (!Validation::checkAgree($userAgree)) {
                $errors[] = 'Нужно подтвердить согласие конфиденциальности';
            }
            
            //Форма заполнена корректно?
            if ($errors == false) {
                
                // Смотрим какой способ доставки выбрал пользователь
                $delivery = 0;
                
                //echo 'Форма заполнена корректно? Да';
                //Сохраняем заказ в базе данных
                
                
                //Собираем информацию о заказе
                $productsInCart[$id] = 1;
                //var_dump($productsInCart); die();
                //Сохраняем заказ в БД
                $result = Order::save($userName, $userPhone, $userEmail, $userCity, $userPostOrder, $userStreet, $userHouse, $userFlat, $userInfo, $userAgree, $productsInCart, $delivery);
                
                
                if ($result) {
                    //Оповещаем администратора о новом заказе
                    $adminEmail = 'slingostudio@gmail.com';
                    $messege = 'http://wow-sling/admin/orders';
                    $subject = 'Новый заказ';
                    mail($adminEmail, $subject, $messege);
                    
                    $result = true;
                }
            } 
               
                
        }
            //var_dump($result);
            if (!empty($errors) && $result != true) {
                foreach ($errors as $error) {
                     echo $error.'<br>';
                }
            } else {
                echo '1';
            }
            
        //header("location: /");
        return true;
       // require_once(ROOT.'/views/product/view.php');
    }
    
    public function actionChooseOne($id, $param) 
    {   
        
        $result = false;
        //Форма отправлена?
       
        if (isset($_POST['submit'])) {
            //Форма отправлена? - Да
            //
            //Считываем данные формы
            $userName = $_POST['name'];
            $userPhone = $_POST['phone'];
            $userEmail = $_POST['email'];
            
            if (!isset($_POST['city'])) { $_POST['city'] = 'Не заполнен'; }
            
            $userCity = $_POST['city'];
            
            if (!isset($_POST['post_order'])) { $_POST['post_order'] = 'Не заполнен'; }
            
            $userPostOrder = $_POST['post_order'];
            
            if (!isset($_POST['street'])) { $_POST['street'] = 'Не заполнен'; }
           
            $userStreet = $_POST['street'];
            
            if (!isset($_POST['number_house'])) { $_POST['number_house'] = 'Не заполнен'; }
            
            $userHouse = $_POST['number_house'];
            
            if (!isset($_POST['number_flat'])) { $_POST['number_flat'] = 'Не заполнен'; }
            
            $userFlat = $_POST['number_flat'];
            
            if (!isset($_POST['info'])) { $_POST['info'] = 'Не заполнен'; }
            
            $userInfo = $_POST['info'];
            
            if (!isset($_POST['agree'])) { $_POST['agree'] = 0; }
            $userAgree = $_POST['agree'];
            
            
            
            //Валидация полей
            $errors = false;
            
            if (!Validation::checkName($userName)) {
                $errors[] = 'Неправильное имя';
            }
            if (!Validation::checkPhone($userPhone)) {
                $errors[] = 'Неправильный телефон';
            }
            if (!Validation::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }
            if (!Validation::checkAgree($userAgree)) {
                $errors[] = 'Нужно подтвердить согласие конфиденциальности';
            }
            
            //Форма заполнена корректно?
            if ($errors == false) {
                
                // Смотрим какой способ доставки выбрал пользователь
                $delivery = 0;
                if ($param == 'book') {
                    $delivery = 4;
                }
                //echo 'Форма заполнена корректно? Да';
                //Сохраняем заказ в базе данных
                
                
                //Собираем информацию о заказе
                $productsInCart[$id] = 1;
                //var_dump($productsInCart); die();
                //Сохраняем заказ в БД
                $result = Order::save($userName, $userPhone, $userEmail, $userCity, $userPostOrder, $userStreet, $userHouse, $userFlat, $userInfo, $userAgree, $productsInCart, $delivery);
                
                
                if ($result) {
                    //Оповещаем администратора о новом заказе
                    $adminEmail = 'slingostudio@gmail.com';
                    $messege = 'http://wow-sling/admin/orders';
                    $subject = 'Новый заказ';
                    mail($adminEmail, $subject, $messege);
                    
                    
                }
            } else {
                //Форма заполнена корректно ? Нет 
                
                //Итоги: общая стоимость, количество товаров
                $products = Product::getOneProduct($id);
                $totalPrice = $products['price'];
            }
            
        } else {
            //Форма отправлена? Нет
             
            //Получаем данные из корзины
            
            $productsInCart = Product::getOneProduct($id);
            
            //В корзине есть товары?
            if ($productsInCart == false) {
                //В корзине есть товары? Нет
                //Отправляем пользователя на главную искать товары
                header("Location: /");
            } else {
                //В корзине есть товары? Да
                
                //Итоги: общая стоимость, количество товаров
                
                $products = Product::getOneProduct($id);
                $totalPrice = $products['price'];
                
                $userName = false;
                $userPhone = false;
                $userEmail = false;
                $userCity = false;
                $userPostOrder = false;
                $userStreet = false;
                $userHouse = false;
                $userFlat = false;
                $userInfo = false;
                $userAgree = false;
            }
        }
        
        require_once (ROOT.'/views/cart/chooseone.php');
        //var_dump($_POST['submit']);
        return true;
         
    }
}
