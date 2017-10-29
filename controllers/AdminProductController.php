<?php


/**
 * Контроллер AdminProductController
 * Управление товарами в админ панели
 */
class AdminProductController extends AdminBase
{
    
    /**
     * Action для страницы управления товарами
     */
    public function actionIndex()
    {
        //Проверка доступа
        self::checkAdmin();
        
        //Получаем список товаров
        $productsList = Product::getProductsList();
        
        //Подключаем вид
        require_once(ROOT.'/views/admin_product/index.php');
        return true;
    }
    
    public function actionDelete($id)
    {
        //Проверка доступа
        self::checkAdmin();
        
        
        if (isset($_POST['submit'])) {
            //Если форма отправлена
            //Удаляем товар
            Product::deleteProductById($id);
            
            //Перенаправляем пользователя на страницу управления товарами
            header("Location: /admin/product");
        }
        
        //Подключаем вид
        require_once(ROOT.'/views/admin_product/delete.php');
        return true;
    }
    
    public function actionCreate()
    {
        //Проверка доступа
        self::checkAdmin();
        
        //Обработка формы
        if (isset($_POST['submit'])) {
            //Если форма отправлена
            //Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['img'] = $_POST['img'];
            $options['description'] = $_POST['description'];
            $options['price'] = $_POST['price'];
            $options['availability'] = $_POST['availability'];
            $options['category_id'] = $_POST['category_id'];
        
            //Флаг ошибок в форме
            $errors = false;
            
            //При необходимости можно валидировать значений нужным образом 
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }
            
            if ($errors == false) {
                //Если ошибок нет
                //Добавляем новый товар
                $id = Product::createProduct($options);
                
                //Если запись добавлена
                /*if ($id) {
                    //Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        //Если загружалось, поместим его в нужную папку, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'])."/upload/images";
                    }
                }*/
                
                header("Location: /admin/product");
            }
        }
        
        require_once(ROOT.'/views/admin_product/create.php');
        return true;
    }
    
    
}
