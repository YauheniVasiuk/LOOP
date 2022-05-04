<?php

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';

class CatalogController
{

   public function actionIndex()
   {
      // подтягиваем категории
      $categories = array();
      $categories = Category::getCategoriesList();

      // подтягиваем последние товары
      $latestProducts = array();
      $latestProducts = Product::getLatestProducts(6);

      // подключаем визуализацию страницы
      require_once(ROOT . '/views/catalog/index.php');

      return true;
   }

   public function actionCategory($categoryId)
   {
      // подтягиваем категории
      $categories = array();
      $categories = Category::getCategoriesList();

      // Подтягиваем товары по категории
      $categoryProducts = array();
      $categoryProducts = Product::getProductsListByCategory($categoryId);

      // подключаем визуализацию страницы
      require_once(ROOT . '/views/catalog/category.php');

      return true;
   }
}
