<?php


class Cart
{
    public static function addProduct($id)
    {
        $id = intval($id);

        //Пустой массив для товаров в корзине
        $productsInCart = array();

        //Если в корзине уже есть товары (они хранятся в сессиии)
        if (isset($_SESSION['products'])) {
            //То заполним наш массив товарами
            $productsInCart = $_SESSION['products'];
        }

        // Если товар есть в корзине, но был добавлен ещё раз, увеличим количество
        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id]++;
        } else {
            //Добавляем новый товар в корзину
            $productsInCart[$id] = 1;
        }

        $_SESSION['products'] = $productsInCart;
//echo '<pre>';
//print_r($_SESSION['products']);
//die();

        return self::countItems();
    }

    public static function deleteProduct($id) {

            $productsInCart = self::getProducts();

                unset($productsInCart[$id]);

            $_SESSION['products'] = $productsInCart;

            if (count($_SESSION['products']) == 0) {
                unset($_SESSION['products']);
            }
    }

    public static function deleteOneProduct($id)
    {
        $productsInCart = self::getProducts();
            if ($productsInCart[$id] > 1) {
                $productsInCart[$id]--;
            }
            $_SESSION['products'] = $productsInCart;
            return $productsInCart[$id];
    }

    //Для добавления Ajax-ом в корзину
    // public static function addOneProduct($id)
    // {
    //     $productsInCart = self::getProducts();
    //         if ($productsInCart[$id] > 1) {
    //             $productsInCart[$id]++;
    //         }
    //         $_SESSION['products'] = $productsInCart;
    //         return $productsInCart[$id];
    // }

    public static function getWordForCount($count)
    {
        if ($count > 20) {
            $count = substr($count, -1);
        }
        switch ($count) {
            case ('1') :
                return ' товар';
            case ($count < 5) :
                return ' товара';
            case ($count <= 20 ) :
                return ' товаров';
        }

        return ' товаров';
    }

    public static function countItems()
    {

        if (isset($_SESSION['products'])) {
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }

            return 'В корзине '.$count.self::getWordForCount($count);
        } else {
            return 'Корзина пока пуста';

        }
    }

    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

    public static function getTotalPrice($products)
    {
        $productsInCart = self::getProducts();

        if ($productsInCart) {
            $total = 0;
            foreach ($products as $item) {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }
        return $total;
    }

    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }




}
