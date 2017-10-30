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
        public static function save($userName, $userPhone, $userEmail, $userCity, $userPostOrder, $userStreet, $userHouse, $userFlat, $userInfo, $userAgree, $productsInCart)
        {


            $products = json_encode($productsInCart);

            $db = Db::getConnection();

            $sql = "INSERT INTO product_order (user_name, user_phone, user_email, user_city, user_post_order, user_street, user_house, user_flat, user_info, user_agree, products) "
                    . "VALUES ('$userName','$userPhone','$userEmail','$userCity','$userPostOrder','$userStreet','$userHouse','$userFlat','$userInfo','$userAgree', '$products')";
     //               . 'VALUES (:user_name, :user_phone, :user_email, :user_post_order, :user_street, :user_house, :user_flat, :user_info, :user_agree, :products)';

            $result = $db->query($sql);

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

            //Текст запроса к базе данных
            $result = $db->query('DELETE FROM product_order WHERE id = '.$id);

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
            $db = Db::getConnection();

            //Текст запроса к БД
            $result = $db->query('SELECT * FROM product_order WHERE id ='.$id.'');

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
        
        public static function updateOrderById($id, $options)
        {
            //Соединение с базой данных
            $db = Db::getConnection();

            
            $user_name = $options['user_name'];
            $user_phone = $options['user_phone'];
            $user_email = $options['user_email'];
            $user_city = $options['user_city'];
            $user_post_order = $options['user_post_order'];
            $user_street = $options['user_street'];
            $user_house = $options['user_house'];
            $user_flat = $options['user_flat'];
            $user_info = $options['user_info'];
            $status = $options['status'];


            //Текст запроса к БД
            $result = $db->query('UPDATE product_order SET   user_name="'.$user_name.'", user_phone="'.$user_phone.'", user_email="'.$user_email.'",'
                    . 'user_city="'.$user_city.'", user_post_order="'.$user_post_order.'", user_street="'.$user_street.'", user_house="'.$user_house.'"'
                    . ', user_flat="'.$user_flat.'", user_info="'.$user_info.'", status="'.$status.'" WHERE id ='.$id);

            return $result; 
        }
        
        
        
}