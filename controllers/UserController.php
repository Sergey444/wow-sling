<?php


class UserController 
{
    
    
    public function actionLogin() 
    {
        $login = '';
        $password = '';
        
        $error = false;
        
        if (isset($_POST['submit'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];
            
            
            
            //Проверяем существует ли пользователь
            $userId = User::checkUserData($login, $password);
            
            if ($userId == false) {
                //Если данные неправильные показываем ошибку
                $error = 'Неправильные данные для входа';
            } else {
                //Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);
                
                header("Location: /admin/");
            }
        }
        
        require_once(ROOT.'/views/user/login.php');      
        return true;
    }
}
