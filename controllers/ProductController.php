<?php

class ProductController
{
   public function actionView($productId)
   {
      // Подтягиваем категории товаров
      $categories = array();
      $categories = Category::getCategoriesList();

      // Подтягиваем данные о продукте
      $product = Product::getProductById($productId);

      // подключаем визуализацию страницы
      require_once(ROOT . '/views/product/view.php');

      return true;
   }
}
