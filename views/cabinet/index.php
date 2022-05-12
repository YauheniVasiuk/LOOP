<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="catalog">
   <div class="container">

      <div class="catalog_title_cabinet">
         <h3>Кабинет пользователя</h3>
         <div class="catalog_title_cabinet_name">
            <h3>Привет <span><?php echo $user['name']; ?></span> !</h3>
         </div>
      </div>

      <div class="catalog_content_cabinet">

         <!--Показываем ссылки на редактирование и список-->
         <ul>
            <li class="reg"><a href="/cabinet/edit/">Редактировать данные</a></li>
            <li class="reg"><a href="#">Список покупок</a></li>
         </ul>

      </div>

      <div class="catalog_content_cabinet_image"><img src="/template/images/cabinet.png" alt="cabinet"></div>

   </div>

   </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>