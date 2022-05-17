<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="catalog">
   <div class="container">

      <div class="catalog_title_cart">
         <h3>ваша корзина</h3>
      </div>

      <?php if ($productsInCart) : ?>
         <div class="catalog_content_cart">
            <p>Вы выбрали такие товары:</p>
         </div>

         <!-- Показываем товары в таблице или выводим сообщение-->
         <table class="cart_table">
            <tr>
               <th>Код товара</th>
               <th>Название</th>
               <th>Стомость, $</th>
               <th>Количество, шт</th>
            </tr>
            <?php foreach ($products as $product) : ?>
               <tr>
                  <td><?php echo $product['code']; ?></td>
                  <td>
                     <a href="/product/<?php echo $product['id']; ?>">
                        <?php echo $product['name']; ?>
                     </a>
                  </td>
                  <td><?php echo $product['price']; ?></td>
                  <td><?php echo $productsInCart[$product['id']]; ?></td>
               </tr>
            <?php endforeach; ?>
            <tr>
               <th colspan="3">
                  <div>Общая стоимость:</div>
               </th>
               <th><?php echo $totalPrice; ?> Br</th>
            </tr>

         </table>
         <a href="/cart/checkout" class="order_issue"> Оформить заказ</a>
      <?php else : ?>

         <div class="catalog_title_cart">
            <p>Корзина пуста</p>
         </div>

         <div class="catalog_title_cart">
            <a href="/" class="order_issue"> Вернуться к покупкам</a>
         </div>
      <?php endif; ?>


   </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>