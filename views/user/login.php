<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="catalog">
   <div class="container">

      <div class="catalog_title_register">
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
            <h3>Вход на сайт</h3>
            <form action="#" method="post" class="catalog_content_register_input">
               <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>" />
               <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>" />
               <input type="submit" name="submit" class="reg" value="Вход" />
            </form>
            <button class="button_main"><a href="/user/register/">регистрация</a></button>

         </div>

      </div>


   </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>