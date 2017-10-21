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
            $productsList[$i]['availability'] = $row['availability'];
            $i++;
        }
        
        
        return $productsList;
    }
    
    public static function getCatalogProduct($param = false, $page = 1) 
    {
        if ($param) {
            if ($param == 'backpack') {
                $param = 0;
            } else {
                $param = 1;
            }
            
            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
            
            $db = Db::getConnection();

            $productsList = array();


            $result = $db->query('SELECT*FROM backpack WHERE id > 0 AND category_id = '.$param.' LIMIT '.self::SHOW_BY_DEFAULT.' OFFSET '.$offset);


            $i = 0;
            while($row = $result->fetch_assoc()) {
                $productsList[$i]['id'] = $row['id'];
                $productsList[$i]['name'] = $row['name'];
                $productsList[$i]['description'] = $row['description'];
                $productsList[$i]['img'] = $row['img'];
                $productsList[$i]['availability'] = $row['availability'];
                $i++;
            }

            return $productsList;
        }
    }
    
    public static function getOneProduct($param, $id) 
    {
        
        $db = Db::getConnection();
        
        $productItem = array();
        
        
        $result = $db->query('SELECT*FROM backpack WHERE id = '.$id.'');
        
        $productItem = $result->fetch_assoc();
        
        return $productItem;
    }
    
    public static function getTotalProductsInCatalog($param)
    {
        if ($param == 'backpack') {
            $param = 0;
        } else {
            $param = 1;
        }
        
        
        $db = Db::getConnection();
        
        $result = $db->query('SELECT count(id) AS count FROM backpack WHERE id > 0 AND category_id = '.$param.'');
        $row = $result->fetch_assoc();
        
        return $row['count'];
    }
    
    public static function getProductsByIds($idsArray)
    {
        $products = array();
        
        $db = Db::getConnection();
        
        $idsString = implode(',', $idsArray);
        
        $sql = "SELECT * FROM backpack WHERE id IN ($idsString)";
        
        $result = $db->query($sql);
        
        $i = 0;
        while ($row = $result->fetch_assoc()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['img'] = $row['img'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $i++;
        }
        
        return $products;
    }
    
    
    
}
