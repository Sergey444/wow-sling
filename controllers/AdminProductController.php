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

     public function actionView($id)
    {
        //Проверка доступа
        self::checkAdmin();

        //Получаем товар
        $product = Product::getOneProduct($id);

        //Получаем вид
        require_once(ROOT.'/views/admin_product/view.php');
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


    /**
     * Action для страницы добавить товар
     * @return boolean
     */
    public function actionCreate()
    {
        //Проверка доступа
        self::checkAdmin();

        //Обработка формы
        if (isset($_POST['submit'])) {
            //Если форма отправлена
            //Получаем данные из формы
            $options['name'] = $_POST['name'];
            //$options['img'] = $_POST['img'];
            $options['description'] = $_POST['description'];
            $options['price'] = $_POST['price'];
            $options['availability'] = $_POST['availability'];
            $options['category_id'] = $_POST['category_id'];
            $options['is_hit'] = $_POST['is_hit'];

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
                //var_dump($id); die();
                //Если запись добавлена
                if ($id) {
                    //Проверим, загружалось ли через форму изображение

                    //echo '<pre>'; print_r($_SERVER['DOCUMENT_ROOT']); die();
                    if (is_uploaded_file($_FILES["img"]["tmp_name"])) {
                        //Если загружалось, поместим его в нужную папку, дадим новое имя
                        move_uploaded_file($_FILES["img"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."/template/catalog/".$id['id'].".jpg");
                    }
                }

                header("Location: /admin/product");
            }
        }

        require_once(ROOT.'/views/admin_product/create.php');
        return true;
    }


    public function actionUpdate($id)
    {
        //Проверка доступа
        self::checkAdmin();

        
        //Получаем данные о конкретном заказе
        $product = Product::getOneProduct($id);

        //Обработка формы
        if (isset($_POST['submit'])) {
            //Если форма отправлена
            //Получаем данные из формы редактирования. При необходимости моддно валидировать значения
            $options['name'] = $_POST['name'];
            //$options['img'] = $_POST['img'];
            $options['description'] = $_POST['description'];
            $options['price'] = $_POST['price'];
            $options['availability'] = $_POST['availability'];
            $options['category_id'] = $_POST['category_id'];
            $options['is_hit'] = $_POST['is_hit'];

            //Сохраняем значения
            if (Product::updateProductById($id, $options)) {

//                echo '<pre>';
//                print_r($_FILES['image']);
//                echo '</pre>';


                //Если запись сохранена
                //Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES['img']['tmp_name'])) {

                    //Если загружалось переместим его в нужную папку, дадим новое имя
                    move_uploaded_file($_FILES["img"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."/template/catalog/{$id}.jpg");
                }
            }
              //Перенаправляем пользователя на страницу управления товарами
            header("Location: /admin/product");
        }

        //Подключаем вид
        require_once(ROOT.'/views/admin_product/update.php');
        return true;
    }



}
