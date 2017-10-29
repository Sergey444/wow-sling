<?php


class AdminBase {
   
    public static function checkAdmin()
    {
        //Проверяем авторизирован ли пользователь
        $userId = User::checkLogged();
        
        if ($userId) {
            return true;
        }
        
        
        die('Access denied');
    }
}
