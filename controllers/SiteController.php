<?php

class SiteController
{

   public function actionIndex()
   {
      // Подтягиваем категории товаров
      $categories = array();
      $categories = Category::getCategoriesList();

      // Подтягиваем последние товары
      $latestProducts = array();
      $latestProducts = Product::getLatestProducts(3);

      // Подключаем визуализацию страницы
      require_once(ROOT . '/views/site/index.php');

      return true;
   }
}
