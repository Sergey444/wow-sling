<?php


class CartController 
{
    public function actionAdd($id)
    {
        
        //Добавляем товар в корзину
        Cart::addProduct($id);
        
        //Возвращаем пользователя на страницу
        $referrer = $_SERVER['HTTP_REFERER'];
        
        header("Location: $referrer");
        
    }
    
    public function actionDelete($id) 
    {
        //Удаление товара из корзины
        echo Cart::deleteProduct($id);
            
        //возвращаем пользователя на страницу
        header("Location: /cart/");
    }
    
    public function actionDeleteOne($id) 
    {
        echo Cart::deleteOneProduct($id);
        
        header("Location: /cart/");
    }
    
    public function actionAddAjax($id) 
    {
        //Добавляем товар в корзину
        echo Cart::addProduct($id);
        //var_dump($_SESSION['products']);
       
        return true;
    }
    
    public function actionIndex() 
    {
        $productInCart = false;
        
        $productsInCart = Cart::getProducts();
        
        if ($productsInCart) {
            //Получаем полную информацию о товарах для списка
            $productsIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productsIds);
            
            //Получаем общую стоимость товаров
            $totalPrice = Cart::getTotalPrice($products);
        }
        
        require_once(ROOT.'/views/cart/index.php');
        
        return true;
    }
    
    public function actionCheckout() 
    {
        
        //Статус успешного отображения товаров
        $result = false;
        
        //Выбираем какую форму показать в зависимости от доставки
        $delivery = Validation::checkDelivery();
        
        //Форма отправлена?
        if (isset($_POST['submit'])) {
            //Форма отправлена? - Да
            
            
           
            
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
                //echo 'Форма заполнена корректно? Да';
                //Сохраняем заказ в базе данных
                
                //Собираем информацию о заказе
                $productsInCart = Cart::getProducts();
                
                //Сохраняем заказ в БД
                $result = Order::save($userName, $userPhone, $userEmail, $userCity, $userPostOrder, $userStreet, $userHouse, $userFlat, $userInfo, $userAgree, $productsInCart);
                
                
                if ($result) {
                    //Оповещаем администратора о новом заказе
                    $adminEmail = 'slingostudio@gmail.com';
                    $messege = 'http://wow-sling/admin/orders';
                    $subject = 'Новый заказ';
                    mail($adminEmail, $subject, $messege);
                    
                    //Очищаем корзину
                    
                    
                    Cart::clear();
                }
            } else {
                //Форма заполнена корректно ? Нет 
                
                //Итоги: общая стоимость, количество товаров
                $productsInCart = Cart::getProducts();
                $productsIds = array_keys($productsInCart);
                $products = Product::getProductsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();
            }
            
        } else {
            //Форма отправлена? Нет
             
            //Получаем данные из корзины
            $productsInCart = Cart::getProducts();
            
            //В корзине есть товары?
            if ($productsInCart == false) {
                //В корзине есть товары? Нет
                //Отправляем пользователя на главную искать товары
                header("Location: /");
            } else {
                //В корзине есть товары? Да
                
                //Итоги: общая стоимость, количество товаров
                $productsIds = array_keys($productsInCart);
                $products = Product::getProductsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();
                
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
        
        require_once (ROOT.'/views/cart/checkout.php');
        //var_dump($_POST['submit']);
        return true;
        
    }
}
