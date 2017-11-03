<?php

class Validation 
{
    public static function checkName($name) 
    {
        if (strlen(trim($name)) >= 2) {
            return true;
        } 
        return false;
    }
    
    public static function checkPhone($phone)
    {
        if (strlen(trim($phone)) >= 6) {
            if (preg_match('#[+0-9-]{6,18}#', $phone)) {
            return true;
            }
        }
        return false;
    }
    
    public static function checkEmail($email) 
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if (preg_match('#[0-9a-zA-Z-.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$#', $email)) {
                return true;
            }
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
