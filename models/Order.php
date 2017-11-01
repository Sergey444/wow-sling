<?php


class Order 
{
    
        /**
         * Сохранение заказа
         * @param type $userName
         * @param type $userPhone
         * @param type $userEmail
         * @param type $userCity
         * @param type $userPostOrder
         * @param type $userStreet
         * @param type $userHouse
         * @param type $userFlat
         * @param type $userInfo
         * @param type $userAgree
         * @return type
         */ 
        public static function save($userName, $userPhone, $userEmail, $userCity, $userPostOrder, $userStreet, $userHouse, $userFlat, $userInfo, $userAgree, $productsInCart, $delivery)
        {
            $userName = htmlspecialchars($userName);
            $userPhone = htmlspecialchars($userPhone);
            $userEmail = htmlspecialchars($userEmail);
            $userCity = htmlspecialchars($userCity);
            $userPostOrder = htmlspecialchars($userPostOrder);
            $userStreet = htmlspecialchars($userStreet);
            $userHouse = htmlspecialchars($userHouse);
            $userFlat = htmlspecialchars($userFlat);
            $userInfo = htmlspecialchars($userInfo);
            $userAgree = htmlspecialchars($userAgree);
            $productsInCart = $productsInCart;
            $delivery = htmlspecialchars($delivery);

            $products = json_encode($productsInCart);

            $db = Db::getConnection();

//            $result = "INSERT INTO product_order (user_name, user_phone, user_email, user_city, user_post_order, user_street, user_house, user_flat, user_info, user_agree, products, delivery) "
//                    . "VALUES ('$userName','$userPhone','$userEmail','$userCity','$userPostOrder','$userStreet','$userHouse','$userFlat','$userInfo','$userAgree', '$products', '$delivery')";
     //               . 'VALUES (:user_name, :user_phone, :user_email, :user_post_order, :user_street, :user_house, :user_flat, :user_info, :user_agree, :products)';
               
            $result = $db->prepare("INSERT INTO product_order (user_name, user_phone, user_email, user_city, user_post_order, user_street, user_house, user_flat, user_info, user_agree, products, delivery) "
                    . "VALUES ( ? , ? , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            
            $result->bind_param('ssssssssssss', $userName, $userPhone, $userEmail, $userCity, $userPostOrder, $userStreet, $userHouse, $userFlat, $userInfo, $userAgree, $products, $delivery);
            $result->execute();
            //$result = $db->query($sql);
            
            return $result;
        }

        public static function getOrdersList()  
        {

             $db = Db::getConnection();

             //Получение и возврат результатов
             $result = $db->query('SELECT * FROM product_order ORDER BY id DESC');
             
             
             $ordersList = array();

             $i = 0;
             while ($row = $result->fetch_assoc()) {
                 $ordersList[$i]['id'] = $row['id'];
                 $ordersList[$i]['user_name'] = $row['user_name'];
                 $ordersList[$i]['user_email'] = $row['user_email'];
                 $ordersList[$i]['date'] = $row['date'];
                 $ordersList[$i]['status'] = $row['status'];
                 $i++;
             }
             return $ordersList;
        }
        
        /**
         * Удаляет заказ с указанным id
         * @param type $id
         * @return type
         */
        public static function deleteOrderById($id)
        {
            //Соединение с базой данных
            $db = Db::getConnection();
            
            $id = intval($id);
            //Текст запроса к базе данных
            //$result = $db->query('DELETE FROM product_order WHERE id = '.$id);
            
            $result = $db->prepare('DELETE FROM product_order WHERE id = ?');
            $result->bind_param('i', $id);
            $result->execute();
           
            
            return $result;
         }

        /**
         * Возвращает заказ с указанным id
         * @param type $id
         * @return type
         */
        public static function getOrderById($id)
        {
            //Соединение с базой данных
            
            $id = intval($id);
            $db = Db::getConnection();

            //Текст запроса к БД
            //$result = $db->query('SELECT * FROM product_order WHERE id ='.$id.'');
            
            $result = $db->prepare('SELECT * FROM product_order WHERE id = ? ');
            $result->bind_param('i', $id);
            $result->execute();
            $result = $result->get_result();
            
            return $result->fetch_assoc(); 
        }
        
        /**
         * Возвращает текстовое пояснение статуса для заказа
         * @param type $status
         * @return string
         */
        public static function getStatusText($status) 
        {
            switch ($status) {
                case '0':
                    return 'В обработке';
                    break;
                case '1': 
                    return 'Оплачен';
                    break;
                case '2':
                    return 'Отправлен';
                    break;
            }
        }
        
        public static function getDeliveryText($delivery)
        {
            $delivery = htmlspecialchars($delivery);
            
            switch ($delivery) {
                case '0':
                    return 'Пользователь выбрал - Купить в один клик';
                    break;
                 case '1':
                    return 'Пользователь выбрал - Доставка по России';
                    break;
                 case '2':
                    return 'Пользователь выбрал - Доставка по Тюмени';
                    break;
                 case '3':
                    return 'Пользователь выбрал - Самовывоз с улицы Широтная';
                    break;
                case '4':
                    return 'Пользователь выбрал - На заказ';
                    break;
            }
        }
        
        public static function updateOrderById($id, $options)
        {
            //Соединение с базой данных
            $db = Db::getConnection();

            
            $user_name = htmlspecialchars($options['user_name']);
            $user_phone = htmlspecialchars($options['user_phone']);
            $user_email = htmlspecialchars($options['user_email']);
            $user_city = htmlspecialchars($options['user_city']);
            $user_post_order = htmlspecialchars($options['user_post_order']);
            $user_street = htmlspecialchars($options['user_street']);
            $user_house = htmlspecialchars($options['user_house']);
            $user_flat = htmlspecialchars($options['user_flat']);
            $user_info = htmlspecialchars($options['user_info']);
            $status = htmlspecialchars($options['status']);


            //Текст запроса к БД
//            $result = $db->query('UPDATE product_order SET   user_name="'.$user_name.'", user_phone="'.$user_phone.'", user_email="'.$user_email.'",'
//                    . 'user_city="'.$user_city.'", user_post_order="'.$user_post_order.'", user_street="'.$user_street.'", user_house="'.$user_house.'"'
//                    . ', user_flat="'.$user_flat.'", user_info="'.$user_info.'", status="'.$status.'" WHERE id ='.$id);
            
            
            $result = $db->prepare('UPDATE product_order SET   user_name= ? , user_phone= ? , user_email= ? ,'
                    . 'user_city= ? , user_post_order= ? , user_street= ? , user_house= ? '
                    . ', user_flat= ? , user_info= ? , status= ? WHERE id = ?');
            $result->bind_param('sssssssssss', $user_name, $user_phone, $user_email, $user_city, $user_post_order, $user_street, $user_house, $user_flat, $user_info, $status, $id);
            $result->execute();

            return $result; 
        }
        
        
        
}