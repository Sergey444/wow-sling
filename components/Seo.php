<?php


class Seo
{
    static function setTitle()
    {
        include( ROOT.'/config/seo.php' );
        $path = trim($_SERVER['REQUEST_URI'] , '/');;
        // var_dump($path);
        foreach ($title as $key => $item) {
            // var_dump($key);
            // var_dump($path);
            if (preg_match("~$key~", $path )) {
                return $item;
            }
        }
        return 'Слинги в Тюмени, купить, заказать';
    }

    static function setDescription()
    {
        include( ROOT.'/config/seo.php' );
        $path = trim($_SERVER['REQUEST_URI'] , '/');;
        // var_dump($path);
        foreach ($description as $key => $item) {
            // var_dump($key);
            // var_dump($path);
            if (preg_match("~$key~", $path )) {
                return $item;
            }
        }
        return 'Магазин слингов в Тюмени. Эргорюкзаки, слинг для новорожденного, конверты на выписку. Слинги продажа в Тюмени доставка в любой район';
    }


    // static function setTitle() {
    //     include ROOT.'/config/seo.php';
    //     $path = trim($_SERVER['REQUEST_URI'] , '/');;
    //     if (array_key_exists($path, $title)) {
    //         return $title[$path];
    //     } else {
    //         return 'Слинги в Тюмени, купить, заказать';
    //     }
    // }
    //
    // static function setDescription() {
    //     include ROOT.'/config/seo.php';
    //     $path = trim($_SERVER['REQUEST_URI'] , '/');
    //     if (array_key_exists($path, $description)) {
    //         return $description[$path];
    //     } else {
    //         return 'Магазин слингов в Тюмени. Эргорюкзаки, слинг для новорожденного, конверты на выписку. Слинги продажа в Тюмени доставка в любой район';
    //     }
    // }

}

?>
