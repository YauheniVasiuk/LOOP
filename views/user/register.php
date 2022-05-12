<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="catalog">
   <div class="container">


      <div class="catalog_title_register">
         <!--Выводим ошибки или сообщение-->
         <?php if ($result) : ?>
            <p>Вы зарегистрированы!</p>
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
            <h3>Регистрация на сайте</h3>
            <form action="#" method="post" class="catalog_content_register_input">
               <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>" />
               <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>" />
               <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>" />
               <input type="submit" name="submit" class="reg" value="Регистрация" />
            </form>
         </div>

      <?php endif; ?>

      </div>


   </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>