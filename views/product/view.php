<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="catalog_product">
   <div class="container">

      <div class="catalog_content_product">
         <!--Показываем Форму-->

         <div class="view-product">
            <?php if ($product['image'] == 'image') : ?>
               <img src="<?php echo Product::getImage($product['id']); ?>" alt="product" />
            <?php else : ?>
               <img src="<?php echo $product['image']; ?>" alt="product" />
               <?php if ($product['is_new'] == 1) : ?>
                  <div class="new">
                     <img src="/template/images/new.png" alt="new">
                  </div>
               <?php endif; ?>
            <?php endif; ?>

         </div>

         <div class="product-information">
            <!--Показываем информацию о продукте-->
            <h2><?php echo $product['name']; ?></h2>
            <p><b>Код товара:</b> <?php echo $product['code']; ?></p>
            <p><b>Цена:</b> <?php echo $product['price']; ?> Br</p>
            <p><b>Наличие:</b> <?php echo Product::getAvailabilityText($product['availability']); ?></p>
            <p><b>Производитель:</b> <?php echo $product['brand']; ?></p>
            <button class="button_cart">
               <a href="/cart/add/<?php echo $product['id']; ?>" class="add-to-cart" data-id="<?php echo $product['id']; ?>">
                  <div class="ico_cart_button">в корзину</div>
               </a>
            </button>
            <br />
            <p><b>Описание товара:</b></p>
            <p><?php echo $product['description']; ?></p>

         </div>

      </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>