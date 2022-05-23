<?php

class Category
{

   public static function getCategoriesList()
   {
      // Подключение к БД
      $db = Db::getConnection();

      $categoryList = array();

      // Запрос в БД
      $result = $db->query('SELECT id, name FROM category ORDER BY sort_order ASC');

      // Запись результата запроса 
      $i = 0;
      while ($row = $result->fetch()) {
         $categoryList[$i]['id'] = $row['id'];
         $categoryList[$i]['name'] = $row['name'];
         $i++;
      }

      // Возврат результата
      return $categoryList;
   }

   public static function getCategoriesListAdmin()
   {
      // Соединение с БД
      $db = Db::getConnection();

      // Запрос к БД
      $result = $db->query('SELECT id, name, sort_order, status FROM category ORDER BY sort_order ASC');

      // Получение и возврат результатов
      $categoryList = array();
      $i = 0;
      while ($row = $result->fetch()) {
         $categoryList[$i]['id'] = $row['id'];
         $categoryList[$i]['name'] = $row['name'];
         $categoryList[$i]['sort_order'] = $row['sort_order'];
         $categoryList[$i]['status'] = $row['status'];
         $i++;
      }
      return $categoryList;
   }
}
