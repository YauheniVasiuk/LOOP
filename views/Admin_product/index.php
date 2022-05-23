<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="catalog_admin">
   <div class="container">

      <div class="admin_panel">
         <ol>
            <li><a href="/admin/">Админпанель</a></li>
            <li class="active">Управление товарами</li>
         </ol>
      </div>

      <h3>Список товаров:</h3>

      <a href="/admin/product/create" class="add_product"><i class=""></i> Добавить товар</a>

      <br />
      <br />

      <table class="cart_table">
         <tr>
            <th>ID товара</th>
            <th>Артикул</th>
            <th>Название товара</th>
            <th>Цена</th>
            <th>Редактировать</th>
            <th>Удалить</th>
         </tr>
         <?php foreach ($productsList as $product) : ?>
            <tr>
               <td><?php echo $product['id']; ?></td>
               <td><?php echo $product['code']; ?></td>
               <td><?php echo $product['name']; ?></td>
               <td><?php echo $product['price']; ?></td>
               <td class="del"><a href="/admin/product/update/<?php echo $product['id']; ?>"><i class="update"> &nbsp;&nbsp;&nbsp;&nbsp;</i></a></td>
               <td class="del"><a href="/admin/product/delete/<?php echo $product['id']; ?>"><i class="delete"> &nbsp;&nbsp;&nbsp;&nbsp;</i></a></td>
            </tr>
         <?php endforeach; ?>
      </table>

   </div>

</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>