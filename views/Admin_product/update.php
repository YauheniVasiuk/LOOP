<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="catalog_admin">
   <div class="container">

      <div class="admin_panel">
         <ol>
            <li><a href="/admin/">Админпанель</a></li>
            <li><a href="/admin/product/">Управление товарами</a></li>
            <li class="active">Редактировать товар</li>
         </ol>
      </div>

      <h3>Добавить новый товар:</h3>


      <?php if (isset($errors) && is_array($errors)) : ?>
         <div class="admin_panel">
            <ul>
               <?php foreach ($errors as $error) : ?>
                  <li> - <?php echo $error; ?></li>
               <?php endforeach; ?>
            </ul>
         </div>
         <br /><br />
      <?php endif; ?>

      <div class="catalog_content_register_wrapper">

         <div class="catalog_content_register">
            <div class="catalog_content_register_input">
               <form action="#" method="post" enctype="multipart/form-data">

                  <p>Название товара</p>
                  <input type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>">

                  <p>Артикул</p>
                  <input type="text" name="code" placeholder="" value="<?php echo $product['code']; ?>">

                  <p>Стоимость, $</p>
                  <input type="text" name="price" placeholder="" value="<?php echo $product['price']; ?>">

                  <p>Категория</p>
                  <select name="category_id">
                     <?php if (is_array($categoriesList)) : ?>
                        <?php foreach ($categoriesList as $category) : ?>
                           <option value="<?php echo $category['id']; ?>" <?php if ($product['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                              <?php echo $category['name']; ?>
                           </option>
                        <?php endforeach; ?>
                     <?php endif; ?>
                  </select>

                  <br /><br />

                  <p>Производитель</p>
                  <input type="text" name="brand" placeholder="" value="<?php echo $product['brand']; ?>">

                  <p>Изображение товара</p>
                  <img src="<?php echo Product::getImage($product['id']); ?>" width="200" alt="" />
                  <input type="file" name="image" placeholder="" value="<?php echo $product['image']; ?>">

                  <p>Детальное описание</p>
                  <textarea name="description"><?php echo $product['description']; ?></textarea>

                  <br /><br />

                  <p>Наличие на складе</p>
                  <select name="availability">
                     <option value="1" <?php if ($product['availability'] == 1) echo ' selected="selected"'; ?>>Да</option>
                     <option value="0" <?php if ($product['availability'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                  </select>

                  <br /><br />

                  <p>Новинка</p>
                  <select name="is_new">
                     <option value="1" <?php if ($product['is_new'] == 1) echo ' selected="selected"'; ?>>Да</option>
                     <option value="0" <?php if ($product['is_new'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                  </select>

                  <br /><br />

                  <p>Рекомендуемые</p>
                  <select name="is_recommended">
                     <option value="1" <?php if ($product['is_recommended'] == 1) echo ' selected="selected"'; ?>>Да</option>
                     <option value="0" <?php if ($product['is_recommended'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                  </select>

                  <br /><br />

                  <p>Статус</p>
                  <select name="status">
                     <option value="1" <?php if ($product['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                     <option value="0" <?php if ($product['status'] == 0) echo ' selected="selected"'; ?>>Скрыт</option>
                  </select>

                  <br /><br />

                  <input class="reg" type="submit" name="submit" class="btn btn-default" value="Сохранить">

                  <br /><br />

               </form>
            </div>
         </div>
      </div>

</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>