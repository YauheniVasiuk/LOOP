<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="catalog">
   <div class="container">


      <div class="catalog_title_register">
         <!--Выводим ошибки или сообщение-->
         <?php if ($result) : ?>
            <p>Сообщение отправлено! Мы вам ответим на указанный email.</p>
         <?php else : ?>
            <?php if (isset($errors) && is_array($errors)) : ?>
               <ul>
                  <?php foreach ($errors as $error) : ?>
                     <li> - <?php echo $error; ?></li>
                  <?php endforeach; ?>
               </ul>
            <?php endif; ?>

      </div>

      <div class="catalog_content_register_wrapper">

         <div class="catalog_content_register">
            <!--Показываем Форму-->
            <h3>Обратная связь</h3>
            <h4>Есть вопрос? Напиите нам!</h4>
            <form action="#" method="post" class="catalog_content_register_input">
               <p>Ваша почта</p>
               <input type="email" name="userEmail" placeholder="E-mail" value="<?php echo $userEmail; ?>" />
               <p>Ваше сообщение</p>
               <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>" />
               <br />
               <input type="submit" name="submit" class="reg" value="Отправить" />
            </form>
         </div>

      <?php endif; ?>

      </div>


   </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>