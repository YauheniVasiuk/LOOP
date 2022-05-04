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
}
