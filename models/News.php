<?php


class News {
    
    /**
     * Returns single news item with specified id
     * @param integer $id
     */
    public static function getNewsItemById($id)
    {
        //Запрос к БД
        $id = intval($id);
        
        if ($id) {
        
        //$host = 'localhost';
        //$dbname = 'wowsling';
        //$user = 'root';
        //$password = '';
        //$db = mysqli_connect($host, $user, $password, $dbname);
            
        $db = Db::getConnection();
        
        $result = $db->query('SELECT*FROM news WHERE id = '.$id );
        
        
        
        $newsItem = $result->fetch_assoc();
        
        return $newsItem;
        }
    }
    
    /**
     * Returns an array of news items
     */
    public static function getNewsList() 
    {
        //Запрос к БД
//$host = 'localhost';
//$dbname = 'wowsling';
//$user = 'root';
//$password = '';
//$db = mysqli_connect($host, $user, $password, $dbname);
                
        
        $db = Db::getConnection();
        
        $newsList = array();
        
        $result = $db->query('SELECT*FROM news WHERE id > 0');
      
        
        $i = 0;
        while($row = $result->fetch_assoc()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['name'] = $row['name'];
            $newsList[$i]['description'] = $row['description'];
            $newsList[$i]['img'] = $row['img'];
            $i++;
        }
        
        return $newsList;
    }
    
}
