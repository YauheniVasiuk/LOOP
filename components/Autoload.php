<?php

spl_autoload_register('myAutoload');

function myAutoload($class_name)
{

   $array_path = [
      '/components/',
      '/models/',
   ];

   foreach ($array_path as $path) {
      $path = ROOT . $path . $class_name . '.php';

      if (file_exists($path)) {
         include_once($path);
      }
   }
}
