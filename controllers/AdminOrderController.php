<?php


/**
 * Description of AdminOrderController
 *
 * @author home
 */
class AdminOrderController extends AdminBase
{
    
    public function actionIndex() 
    {
        //Проверка доступа
        self::checkAdmin();
        
        //Получаем список заказов
        $ordersList = Order::getOrdersList();
        
        //Подключаем вид
        require_once(ROOT.'/views/admin_order/index.php');
        return true;
    }
    
    public function actionView($id)
    {
        //Проверка доступа
        self::checkAdmin();
        
        //Получаем данные о конкретном заказе
        $order = Order::getOrderById($id);
        
        //Получаем массив с идентификаторами и количеством товаров
        $productsQuantity = json_decode($order['products'], true);
        
        
        //Получаем с идентификаторами товаров
        $productsIds = array_keys($productsQuantity);
        
        //Получаем список товаров о заказе
        $products = Product::getProductsByIds($productsIds);
        
         
               
        //Получаем вид
        require_once(ROOT.'/views/admin_order/view.php');
        return true;
    }
    
    public function actionDelete($id)
    {
        //Проверка доступа
        self::checkAdmin();
        
        
        if (isset($_POST['submit'])) {
            //Если форма отправлена
            //Удаляем товар
            Order::deleteOrderById($id);
            
            //Перенаправляем пользователя на страницу управления товарами
            header("Location: /admin/order");
        }
        
        //Подключаем вид
        require_once(ROOT.'/views/admin_order/delete.php');
        return true;
    }
    
    
    public function actionUpdate($id) 
    {
        //Проверка доступа
        self::checkAdmin();
        
        //Получаем список категорий для выпадающего списка
        
        //Получаем данные о конкретном заказе
        $order = Order::getOrderById($id);
        
        //Обработка формы
        if (isset($_POST['submit'])) {
            //Если форма отправлена
            //Получаем данные из формы редактирования. При необходимости моддно валидировать значения
            
            $options['user_name'] = $_POST['user_name'];
            $options['user_phone'] = $_POST['user_phone'];
            $options['user_email'] = $_POST['user_email'];
            $options['user_city'] = $_POST['user_city'];
            $options['user_post_order'] = $_POST['user_post_order'];
            $options['user_street'] = $_POST['user_street'];
            $options['user_house'] = $_POST['user_house'];
            $options['user_flat'] = $_POST['user_flat'];
            $options['user_info'] = $_POST['user_info'];
            $options['status'] = $_POST['status'];
            
            //Сохраняем значения
            if (Order::updateOrderById($id, $options)) {
                
//                echo '<pre>';
//                print_r($_FILES['image']);
//                echo '</pre>';
           
            }
              //Перенаправляем пользователя на страницу управления товарами
            header("Location: /admin/order");
        }
        
        //Подключаем вид
        require_once(ROOT.'/views/admin_order/update.php');
        return true;
    }
    
    
}
