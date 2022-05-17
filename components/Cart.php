<?php

class Cart
{

   public static function addProduct($id)
   {
      $id = intval($id);

      // Пустой массив для товаров в корзине
      $productsInCart = array();

      // Если в корзине уже есть товары (они хранятся в сессии)
      if (isset($_SESSION['products'])) {
         // То заполним наш массив товарами
         $productsInCart = $_SESSION['products'];
      }

      // Если товар есть в корзине, но был добавлен еще раз, увеличим количество
      if (array_key_exists($id, $productsInCart)) {
         $productsInCart[$id]++;
      } else {
         // Добавляем нового товара в корзину
         $productsInCart[$id] = 1;
      }

      $_SESSION['products'] = $productsInCart;

      return self::countItems();
   }

   public static function countItems()
   {
      // При наличии товаров в сессии
      if (isset($_SESSION['products'])) {
         $count = 0;
         foreach ($_SESSION['products'] as $id => $quantity) {
            $count = $count + $quantity;
         }
         return $count;
      } else {
         // При отсутствии товаров в сессии
         return 0;
      }
   }

   public static function getProducts()
   {
      if (isset($_SESSION['products'])) {
         return $_SESSION['products'];
      }
      return false;
   }

   public static function getTotalPrice($products)
   {
      //Подтягиваем товары из сессии
      $productsInCart = self::getProducts();

      $total = 0;

      //При наличии товаров в корзине
      if ($productsInCart) {
         foreach ($products as $item) {
            $total += $item['price'] * $productsInCart[$item['id']];
         }
      }

      return $total;
   }

   public static function clear()
   {
      if (isset($_SESSION['products'])) {
         unset($_SESSION['products']);
      }
   }
}
