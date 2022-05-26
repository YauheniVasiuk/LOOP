<?php

class SiteController
{

   public function actionIndex()
   {
      // Подтягиваем категории товаров
      $categories = array();
      $categories = Category::getCategoriesList();

      // Подтягиваем последние товары
      $latestProducts = array();
      $latestProducts = Product::getLatestProducts(3);

      // Подключаем визуализацию страницы
      require_once(ROOT . '/views/site/index.php');

      return true;
   }

   public function actionDelivery()
   {
      // Подключаем визуализацию страницы
      require_once(ROOT . '/views/site/delivery.php');

      return true;
   }

   public function actionAbout()
   {
      // Подключаем визуализацию страницы
      require_once(ROOT . '/views/site/about.php');

      return true;
   }

   public function actionPayment()
   {
      // Подключаем визуализацию страницы
      require_once(ROOT . '/views/site/payment.php');

      return true;
   }


   public function actionContact()
   {

      // Инициализируем данные формы
      $userEmail = '';
      $userText = '';
      $result = false;

      if (isset($_POST['submit'])) {

         // Получаем данные из формы
         $userEmail = $_POST['userEmail'];
         $userText = $_POST['userText'];

         $errors = false;

         // Валидация полей
         if (!User::checkEmail($userEmail)) {
            $errors[] = 'Неправильный email';
         }

         // При отсутствии ошибок отправляем email
         if ($errors == false) {
            $adminEmail = 'php.start@mail.ru';
            $message = "Текст: {$userText}. От {$userEmail}";
            $subject = 'Тема письма';
            $result = mail($adminEmail, $subject, $message);
            $result = true;
         }
      }

      require_once(ROOT . '/views/site/contact.php');

      return true;
   }
}
