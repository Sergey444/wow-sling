<?php


class Category {
    
    public static function getCategory($param)
    {
        switch ($param) {
            case 0: 
               return 'backpack';
            case 1: 
                return 'mysling';
        }
    }
    
    public static function getCategoryRus($param)
    {
        switch ($param) {
            case 0: 
               return 'Рюкзак';
            case 1: 
                return 'Май-слинг';
        }
    }
}

