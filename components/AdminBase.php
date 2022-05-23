<?php

abstract class AdminBase
{
   public static function checkAdmin()
   {
      // Проверяем авторизовани ли пользователь. Если нет - переадресовываем
      $userId = User::checkLogged();

      // Получаем информацию о текущем пользователе
      $user = User::getUserById($userId);

      // Если "роль" текущего пользователя "admin", пускаем его в админ-панель
      if (($user['role']) == 'admin') {
         return true;
      }

      // Иначе завершаем роботу с сообщением о закрытом доступе
      die("Access dined");
   }
}
