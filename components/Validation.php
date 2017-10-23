<?php

class Validation 
{
    public static function checkName($name) 
    {
        if (strlen($name) >= 2) {
            return true;
        } 
        return false;
    }
    
    public static function checkPhone($phone)
    {
        if (strlen($phone) >= 6) {
            return true;
        }
        return false;
    }
    
    public static function checkEmail($email) 
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    } 
    
    public static function checkAgree($agree) 
    {
        if ($agree == '1') {
            return true;
        }
        return false;       
    }
    
    public static function checkDelivery() 
    {
        if (!isset($_POST['delivery'])) {
            $delivery = 3;
        } else {
            $delivery = $_POST['delivery'];
        }
        return $delivery;
    }
}
