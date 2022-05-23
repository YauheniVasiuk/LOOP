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

   public static function getProductsListByCategory($categoryId = false, $page)
   {
      // Проверяем наличие категории
      if ($categoryId) {

         // Подключение к БД
         $db = Db::getConnection();
         $products = array();
         $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
         // Запрос в БД
         $result = $db->query('SELECT id, name, price, image, is_new FROM product WHERE status = "1" AND category_id = "' . $categoryId . '" ORDER BY id DESC LIMIT ' . self::SHOW_BY_DEFAULT . ' OFFSET ' . $offset);

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

   public static function getTotalProductsInCategory($categoryId)
   {
      // Подключение к БД
      $db = Db::getConnection();

      // Запрос в БД
      $result = $db->query('SELECT count(id) AS count FROM product WHERE status = "1" AND category_id = "' . $categoryId . '"');

      // Вывод результа с ассоциативными ключами
      $result->setFetchMode(PDO::FETCH_ASSOC);

      $row = $result->fetch();

      // возврат общего кол-ва товаров
      return $row['count'];
   }

   public static function getProdustsByIds($idsArray)
   {
      $products = array();

      // Подключение к БД
      $db = Db::getConnection();

      // Преобразуем массив с ключами в строку через запятую
      $idsString = implode(',', $idsArray);

      // Запрос в БД
      $sql = "SELECT * FROM product WHERE status='1' AND id IN ($idsString)";
      $result = $db->query($sql);

      // Вывод результа с ассоциативными ключами
      $result->setFetchMode(PDO::FETCH_ASSOC);

      // Записываем в массив необходимые данные из полученного результата запроса
      $i = 0;
      while ($row = $result->fetch()) {
         $products[$i]['id'] = $row['id'];
         $products[$i]['code'] = $row['code'];
         $products[$i]['name'] = $row['name'];
         $products[$i]['price'] = $row['price'];
         $i++;
      }

      return $products;
   }

   public static function getProductsList()
   {
      // Соединение с БД
      $db = Db::getConnection();

      // Получение и возврат результатов
      $result = $db->query('SELECT id, name, price, code FROM product ORDER BY id ASC');
      $productsList = array();
      $i = 0;
      while ($row = $result->fetch()) {
         $productsList[$i]['id'] = $row['id'];
         $productsList[$i]['name'] = $row['name'];
         $productsList[$i]['code'] = $row['code'];
         $productsList[$i]['price'] = $row['price'];
         $i++;
      }
      return $productsList;
   }

   public static function createProduct($options)
   {
      // Соединение с БД
      $db = Db::getConnection();

      //die(var_dump($options));

      // Запрос в БД
      $sql = 'INSERT INTO product (name, code, price, category_id, brand, availability, description, is_new, is_recommended, status) VALUES (:name, :code, :price, :category_id, :brand, :availability, :description, :is_new, :is_recommended, :status)';

      //die(var_dump($sql));
      // Получение и возврат результатов. Используется подготовленный запрос
      $result = $db->prepare($sql);
      $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
      $result->bindParam(':code', $options['code'], PDO::PARAM_INT);
      $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
      $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
      $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
      $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
      $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
      $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
      $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
      $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
      if ($result->execute()) {
         // Если запрос выполенен успешно, возвращаем id добавленной записи
         return $db->lastInsertId();
      }
      // Иначе возвращаем 0
      return 0;
   }

   public static function updateProductById($id, $options)
   {
      // Соединение с БД
      $db = Db::getConnection();

      // Текст запроса к БД
      $sql = "UPDATE product
           SET 
               name = :name, 
               code = :code, 
               price = :price, 
               category_id = :category_id, 
               brand = :brand, 
               availability = :availability, 
               description = :description, 
               is_new = :is_new, 
               is_recommended = :is_recommended, 
               status = :status
           WHERE id = :id";

      // Получение и возврат результатов. Используется подготовленный запрос
      $result = $db->prepare($sql);
      $result->bindParam(':id', $id, PDO::PARAM_INT);
      $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
      $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
      $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
      $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
      $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
      $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
      $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
      $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
      $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
      $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
      return $result->execute();
   }

   public static function deleteProductById($id)
   {
      // Соединение с БД
      $db = Db::getConnection();

      // Текст запроса к БД
      $sql = 'DELETE FROM product WHERE id = :id';

      // Получение и возврат результатов. Используется подготовленный запрос
      $result = $db->prepare($sql);
      $result->bindParam(':id', $id, PDO::PARAM_INT);
      return $result->execute();
   }

   public static function getImage($id)
   {
      // Название изображения-пустышки
      $noImage = 'no-image.png';

      // Путь к папке с товарами
      $path = '/upload/images/products/';

      // Путь к изображению товара
      $pathToProductImage = $path . $id . '.jpg';

      if (file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToProductImage)) {
         // Если изображение для товара существует
         // Возвращаем путь изображения товара
         return $pathToProductImage;
      }

      // Возвращаем путь изображения-пустышки
      return $path . $noImage;
   }

   public static function getAvailabilityText($availability)
   {
      switch ($availability) {
         case '1':
            return 'В наличии';
            break;
         case '0':
            return 'Под заказ';
            break;
      }
   }
}
