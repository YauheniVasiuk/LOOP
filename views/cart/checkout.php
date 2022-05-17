<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="catalog">
   <div class="container">


      <div class="catalog_title_register">
         <!--Выводим ошибки или сообщение-->
         <?php if ($result) : ?>
            <p>Заказ оформлен. Мы Вам перезвоним.</p>
         <?php else : ?>

            <h3>Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?>, Br.</h3><br />

            <?php if (isset($errors) && is_array($errors)) : ?>
               <ul>
                  <?php foreach ($errors as $error) : ?>
                     <li> - <?php echo $error; ?></li>
                  <?php endforeach; ?>
               </ul>
            <?php endif; ?>

      </div>

      <div class="catalog_content_issue_wrapper">

         <div class="catalog_content_issue">
            <p>Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>
            <!--Показываем Форму-->
            <form action="#" method="post" class="catalog_content_issue_input">
               <p>Ваше имя</p>
               <input type="text" name="userName" placeholder="Имя" value="<?php echo $userName; ?>" />
               <p>Ваш номер телефона</p>
               <input type="text" name="userPhone" placeholder="Номер" value="<?php echo $userPhone; ?>" />
               <p>Комментарий к заказу</p>
               <input type="text" name="userComment" placeholder="Сообщение" value="<?php echo $userComment; ?>" />

               <br />
               <input type="submit" name="submit" class="reg" value="Оформить" />
            </form>
         </div>

      <?php endif; ?>

      </div>

   </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>