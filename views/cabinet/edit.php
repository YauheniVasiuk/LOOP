<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="catalog">
   <div class="container">


      <div class="catalog_title_register">
         <!--Выводим ошибки или сообщение-->
         <?php if ($result) : ?>
            <p>Данные отредактированны!</p>
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
            <h3>Редактирование данных</h3>
            <form action="#" method="post" class="catalog_content_register_input">
               <p>Имя: </p>
               <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>" />
               <p>Пароль: </p>
               <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>" />
               <input type="submit" name="submit" class="reg" value="Редактировать" />
            </form>
         </div>

      <?php endif; ?>

      </div>


   </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>