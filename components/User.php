<?php


class User 
{
    
    
    
    public static function checkUserData($login, $password)
    {
        $db = Db::getConnection();
       
        $result = $db->query('SELECT * FROM user where login = "'.$login.'" AND password = "'.$password.'"');
        
        $user = $result->fetch_assoc();
        if ($user) {
           // var_dump($user);
            return $user['id'];
        }
        
        return false;
    }
    
    public static function auth($userId) {
        
        $_SESSION['user'] = $userId;
    }
    
    public static function checkLogged() 
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        
        header("location: /user/login");
    }
}
