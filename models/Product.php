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
      $productsList = array();

      // Запрос в БД
      $result = $db->query('SELECT id, name, price, image, is_new FROM product WHERE status = "1" ORDER BY id DESC LIMIT ' . $count);

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

   public static function getProductsListByCategory($categoryId = false)
   {
      // Проверяем наличие категории
      if ($categoryId) {

         // Подключение к БД
         $db = Db::getConnection();
         $products = array();
         // Запрос в БД
         $result = $db->query('SELECT id, name, price, image, is_new FROM product WHERE status = "1" AND category_id = "$categoryId" ORDER BY id DESC LIMIT ' . self::SHOW_BY_DEFAULT);

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
