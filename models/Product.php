<?php

class product
{
   // Константа для количства отображаемых продуктов по умолчанию
   const SHOW_BY_DEFAULT = 6;

   public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
   {
      // Приводим к целочисленному типу $count
      $count = intval($count);

      // Подключение к БД
      $db = Db::getConnection();
      $productsNew = array();

      // Запрос в БД
      $result = $db->query('SELECT id, name, price, image, is_new FROM product WHERE status = "1" AND is_new = "1" ORDER BY id DESC LIMIT ' . $count);

      // Обработка результата запроса
      $i = 0;
      while ($row = $result->fetch()) {
         $productsNew[$i]['id'] = $row['id'];
         $productsNew[$i]['name'] = $row['name'];
         $productsNew[$i]['price'] = $row['price'];
         $productsNew[$i]['image'] = $row['image'];
         $productsNew[$i]['is_new'] = $row['is_new'];
         $i++;
      }

      // Возврат результата
      return $productsNew;
   }

   public static function getCatalogProducts($catalogId, $count = self::SHOW_BY_DEFAULT)
   {
      // Приводим к целочисленному типу $count
      $count = intval($count);

      // Приводим к целочисленному типу $catalogId
      $catalogId = intval($catalogId);

      // Подключение к БД
      $db = Db::getConnection();
      $productsList = array();

      // Запрос в БД
      $result = $db->query('SELECT id, name, price, image, is_new FROM product WHERE status = "1" AND catalog_id = "' . $catalogId . '" ORDER BY id DESC LIMIT ' . $count);

      // Обработка результата запроса
      $i = 0;
      while ($row = $result->fetch()) {
         $productsList[$i]['id'] = $row['id'];
         $productsList[$i]['name'] = $row['name'];
         $productsList[$i]['price'] = $row['price'];
         $productsList[$i]['image'] = $row['image'];
         $productsList[$i]['is_new'] = $row['is_new'];
         $i++;
      }

      // Возврат результата
      return $productsList;
   }

   public static function getDiscountProducts($count = self::SHOW_BY_DEFAULT)
   {
      // Приводим к целочисленному типу $count
      $count = intval($count);

      // Подключение к БД
      $db = Db::getConnection();
      $productsDiscount = array();

      // Запрос в БД
      $result = $db->query('SELECT id, name, price, image, is_new, discount_price FROM product WHERE status = "1" AND discount = "1" ORDER BY id DESC LIMIT ' . $count);

      // Обработка результата запроса
      $i = 0;
      while ($row = $result->fetch()) {
         $productsDiscount[$i]['id'] = $row['id'];
         $productsDiscount[$i]['name'] = $row['name'];
         $productsDiscount[$i]['price'] = $row['price'];
         $productsDiscount[$i]['image'] = $row['image'];
         $productsDiscount[$i]['is_new'] = $row['is_new'];
         $productsDiscount[$i]['discount_price'] = $row['discount_price'];
         $i++;
      }

      // Возврат результата
      return $productsDiscount;
   }

   public static function getNewProducts($count = self::SHOW_BY_DEFAULT)
   {
      // Приводим к целочисленному типу $count
      $count = intval($count);

      // Подключение к БД
      $db = Db::getConnection();
      $productsNew = array();

      // Запрос в БД
      $result = $db->query('SELECT id, name, price, image, is_new FROM product WHERE status = "1" AND is_new = "1" ORDER BY id DESC LIMIT ' . $count);

      // Обработка результата запроса
      $i = 0;
      while ($row = $result->fetch()) {
         $productsNew[$i]['id'] = $row['id'];
         $productsNew[$i]['name'] = $row['name'];
         $productsNew[$i]['price'] = $row['price'];
         $productsNew[$i]['image'] = $row['image'];
         $productsNew[$i]['is_new'] = $row['is_new'];
         $i++;
      }

      // Возврат результата
      return $productsNew;
   }

   public static function getProductsListByCategory($categoryId = false)
   {
      // Проверяем наличие категории
      if ($categoryId) {

         // Подключение к БД
         $db = Db::getConnection();
         $products = array();
         // Запрос в БД
         $result = $db->query('SELECT id, name, price, image, is_new FROM product WHERE status = "1" AND category_id = "' . $categoryId . '" ORDER BY id DESC LIMIT ' . self::SHOW_BY_DEFAULT);

         // Обработка результата запроса
         $i = 0;
         while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['image'] = $row['image'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['is_new'] = $row['is_new'];
            $i++;
         }

         // Возврат результата
         return $products;
      }
   }

   public static function getProductById($id)
   {
      // Приводим к целочисленному типу $id
      $id = intval($id);

      // Проверяем наличие продукта
      if ($id) {

         // Подключение к БД
         $db = Db::getConnection();

         // Запрос в БД
         $result = $db->query('SELECT * FROM product WHERE id= ' . $id);
         // Установка вывода полученного результата с ассоциативным ключом 
         $result->setFetchMode(PDO::FETCH_ASSOC);

         // Возврат результата
         return $result->fetch();
      }
   }
}
