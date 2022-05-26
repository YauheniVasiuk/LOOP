<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="catalog_admin">
   <div class="container">

      <div class="admin_panel">
         <ol>
            <li><a href="/admin/">Админпанель</a></li>
            <li><a href="/admin/product/">Управление товарами</a></li>
            <li class="active">Удалить товар</li>
         </ol>
      </div>

      <h3>Удалить товар <?php echo $id; ?></h3>

      <p>Вы действительно хотите удалить этот товар?</p>

      <form class="admin_delete" method="post">
         <input class="button_delete" type="submit" name="submit" value="Удалить" />
      </form>

   </div>

</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>