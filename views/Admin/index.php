<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="catalog">
   <div class="container">

      <div class="catalog_content_register_wrapper">

         <div class="catalog_content_admin">
            <!--Показываем Приветствие и ссылки-->
            <h3>Добрый день, Администратор!</h3>
            <br />
            <p>Вам доступны такие возможности:</p>
            <br />

            <ul>
               <li><a href="/admin/product/">Управление товарами</a></li>
               <li><a href="/admin/category/">Управление категориями</a></li>
               <li><a href="/admin/order/">Управление заказами</a></li>
            </ul>

            <div class="catalog_content_admin_image"><img src="/template/images/Admin.png" alt="admin"></div>

         </div>



      </div>

   </div>

</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>