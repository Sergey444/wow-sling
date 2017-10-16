<?php



class Product 
{
    const SHOW_BY_DEFAULT = 8;
    
    
    /**
    * Returns an array of products
    */
    public static function getLatestProducts($const = self::SHOW_BY_DEFAULT)
    {
        $count = intval($const);
        
        $db = Db::getConnection();
        
        $productsList = array();
        
        $result = $db->query('SELECT*FROM backpack ORDER BY id DESC LIMIT '.$count );
        
        
        $i = 0;
        while($row = $result->fetch_assoc()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['description'] = $row['description'];
            $productsList[$i]['img'] = $row['img'];
            $i++;
        }
        
        
        return $productsList;
    }
    
    public static function getCatalogProduct($param) 
    {
        $db = Db::getConnection();
        
        $productsList = array();
        
        
        $result = $db->query('SELECT*FROM '.$param.' WHERE id > 0 ');
        
        
        $i = 0;
        while($row = $result->fetch_assoc()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['description'] = $row['description'];
            $productsList[$i]['img'] = $row['img'];
            $i++;
        }
        
        return $productsList;
    }
    
    public static function getOneProduct($param, $id) 
    {
        $db = Db::getConnection();
        
        $productItem = array();
        
        
        $result = $db->query('SELECT*FROM '.$param.' WHERE id = '.$id);
        
        $productItem = $result->fetch_assoc();
        
        return $productItem;
    }
    
    
    
}
