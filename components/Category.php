<?php


class Category {
    
    public static function getCategory($param)
    {
        switch ($param) {
            case 0: 
               return 'ergorukzak';
                break;
            case 1: 
                return 'mysling';
                break;
            case 2: 
                return 'bantik';
                break;
            case 3: 
                return 'cocon';
                break;
        }
    }
    
    public static function getCategoryRus($param)
    {
        switch ($param) {
            case 0: 
               return 'Рюкзак';
                break;
            case 1: 
                return 'Май-слинг';
                break;
            case 2: 
                return 'Бантик';
                break;
            case 3: 
                return 'Кокон';
                break;
        }
    }
}

