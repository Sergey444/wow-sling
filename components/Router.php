<?php


class Router {

    private $routes;

    public function __construct()
    {
       $routesPath = ROOT.'/config/routes.php';
       $this->routes = include($routesPath);
    }

    /**
     * Returns request string
     * @return string
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        //Получаем строку запроса
        $uri = $this->getURI();
//echo $uri;

        //Проверяем наличие такого запроса в  routes.php
        foreach ($this->routes as $uriPattern => $path) {

            //Сравниваем $uriPattern и $uri
            if (preg_match("~$uriPattern~", $uri)) {

                //echo '<br>Где ищем (запрос который набрал пользователь): '.$uri;
               // echo '<br>Что ищем (совпадение из правила): '.$uriPattern;
                //echo '<br>Кто обрабатывает: '.$path;

                //Получаем внутренний путь из внешнего согласно правилу.
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                //echo '<br><br>Нужно сформировать: '.$internalRoute;

                //Определить какой контроллер
                //и action обрабатывают запрос
                //и параметры
                $segments = explode('/', $internalRoute);

// echo '<pre>';
// print_r($segments);
// echo '</pre>';

                $controllerName = array_shift($segments).'Controller';

                $controllerName = ucfirst($controllerName);

                $actionName = 'action'.ucfirst(array_shift($segments));

//echo '<br>controller name: '.$controllerName;
//echo '<br>action name: '.$actionName;
                $parameters = $segments;

//echo '<pre>';
//print_r($parameters);
//echo '</pre>';


//echo $controllerName;
//echo $actionName;

                //Подключить файл класса-контроллера
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';

                if(file_exists($controllerFile)) {
                    include_once($controllerFile);
                } else {
                    Router::errorPage404();
                }


                //Создать объект, вызвать метод(action)
                $controllerObject = new $controllerName;

                //$result = $controllerObject->$actionName($parameters);
                // $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                if (method_exists($controllerObject, $actionName)) {
                     $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                } else {
                    // header('HTTP/1.1 404 Not Found');
            		// header("Status: 404 Not Found");
            	    // header('Location: /404.html');
                    Router::errorPage404();
                }

 //var_dump($result);

                if ($result != null) {
                    break;
                }
            }
        }
    }

    static function errorPage404() {
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        //header('Location: /404.html');
    }
}
