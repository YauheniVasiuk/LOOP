<?php

class Router
{
   private $routes;

   public function __construct()
   {
      $routePath = ROOT . '/config/routes.php';
      $this->routes = include($routePath);
   }

   // Получаем строку запроса
   private function getURI()
   {
      if (!empty($_SERVER['REQUEST_URI'])) {
         return trim($_SERVER['REQUEST_URI'], '/');
      }
   }

   // Метод run()
   public function run()
   {
      // Помещаем строку запроса в переменную
      $uri = $this->getURI();

      // Проверяем наличие такого запроса в routes.php
      foreach ($this->routes as $uriPattern => $path) {

         // Сравниваем Шаблон запроса со строкой запроса
         if (preg_match("~$uriPattern~", $uri)) {

            // Получаем внутренний путь из внешнего пути
            $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

            // Определяем контроллер, action и параметры
            $segments = explode('/', $internalRoute);

            $controllerName = ucfirst(array_shift($segments)) . 'Controller';

            $actionName = 'action' . ucfirst(array_shift($segments));

            $parameters = $segments;

            // var_dump($controllerName);
            // var_dump($actionName);
            // die(var_dump($parameters));

            // Подключаем файл класса-контроллера
            $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

            if (file_exists($controllerFile)) {
               include_once($controllerFile);
            }

            // Создаем объект, вызываем метод ...
            $controllerObject = new $controllerName;

            $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

            if ($result != null) {
               die;
            }
         }
      }
   }
}
