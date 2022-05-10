<?php

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';

class CatalogController
{

   public function actionIndex($catalogId)
   {
      // подтягиваем категории
      $categories = array();
      $categories = Category::getCategoriesList();

      // подтягиваем последние товары
      $catalogProducts = array();
      $catalogProducts = Product::getCatalogProducts($catalogId, 6);

      // подключаем визуализацию страницы
      require_once(ROOT . '/views/catalog/index.php');

      return true;
   }

   public function actionCatalog()
   {
      // подтягиваем категории
      $categories = array();
      $categories = Category::getCategoriesList();

      // подключаем визуализацию страницы
      require_once(ROOT . '/views/catalog/catalog.php');

      return true;
   }

   public function actionCategory($categoryId)
   {
      // подтягиваем категории
      $categories = array();
      $categories = Category::getCategoriesList();

      // die(var_dump($categories));

      // Подтягиваем товары по категории
      $categoryProducts = array();
      $categoryProducts = Product::getProductsListByCategory($categoryId);

      // die(var_dump($categoryProducts));

      // подключаем визуализацию страницы
      require_once(ROOT . '/views/catalog/category.php');

      return true;
   }

   public function actionDiscount()
   {
      // подтягиваем категории
      $categories = array();
      $categories = Category::getCategoriesList();

      // подтягиваем последние товары
      $discountProducts = array();
      $discountProducts = Product::getDiscountProducts(6);

      // подключаем визуализацию страницы
      require_once(ROOT . '/views/catalog/discount.php');

      return true;
   }

   public function actionNew()
   {
      // подтягиваем категории
      $categories = array();
      $categories = Category::getCategoriesList();

      // подтягиваем последние товары
      $newProducts = array();
      $newProducts = Product::getNewProducts(6);

      // подключаем визуализацию страницы
      require_once(ROOT . '/views/catalog/new.php');

      return true;
   }
}
