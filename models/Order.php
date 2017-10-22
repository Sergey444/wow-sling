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
       
       $sql = "INSERT INTO product_order (user_name, user_phone, user_email, user_post_order, user_street, user_house, user_flat, user_info, user_agree, products) "
               . "VALUES ('.$userName.','.$userEmail.','.$userCity.','.$userPostOrder.','.$userStreet.','.$userHouse.','.$userFlat.','.$userInfo.','.$userAgree.','.$products.')";
//               . 'VALUES (:user_name, :user_phone, :user_email, :user_post_order, :user_street, :user_house, :user_flat, :user_info, :user_agree, :products)';
       
       $result = $db->query($sql);
       
       
        return $result;
    
       
//       echo '<pre>';
//       print_r($products);
//       echo '</pre>';
    
//       $result = $db->prepare($sql);
//       $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
//       $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
//       $result->bindParam(':user_email', $userEmail, PDO::PARAM_STR);
//       $result->bindParam(':user_post_order', $userPostOrder, PDO::PARAM_STR);
//       $result->bindParam(':user_street', $userStreet, PDO::PARAM_STR);
//       $result->bindParam(':user_house', $userHouse, PDO::PARAM_STR);
//       $result->bindParam(':user_flat', $userFlat, PDO::PARAM_STR);
//       $result->bindParam(':user_info', $userInfo, PDO::PARAM_STR);
//       $result->bindParam(':user_agree', $userAgree, PDO::PARAM_STR);
//       $result->bindParam(':products', $products, PDO::PARAM_STR);
       
       //return $result->execute();
       
   }
}
