<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="catalog">
   <div class="container">

      <div class="catalog_content_register_wrapper">

         <div class="catalog_content_register">
            <!--Показываем Форму-->
            <div class="row">

               <div class="view-product">
                  <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
               </div>
            </div>

            <div class="product-information">
               <!--/product-information-->

               <?php if ($product['is_new'] == 1) : ?>
                  <div class="new">
                     <img src="/template/images/new.png" alt="new">
                  </div>
               <?php endif; ?>

               <h2><?php echo $product['name']; ?></h2>
               <p>Код товара: <?php echo $product['code']; ?></p>
               <span>
                  <span>US $<?php echo $product['price']; ?></span>
                  <button class="button_cart">
                     <a href="/cart/add/<?php echo $product['id']; ?>" class="add-to-cart" data-id="<?php echo $product['id']; ?>">
                        <div class="ico_cart_button">в корзину</div>
                     </a>
                  </button>
               </span>
               <p><b>Наличие:</b> <?php echo Product::getAvailabilityText($product['availability']); ?></p>
               <p><b>Производитель:</b> <?php echo $product['brand']; ?></p>
            </div>
            <div class="row">
               <br />
               <h5>Описание товара</h5>
               <?php echo $product['description']; ?>
            </div>
            <!--/product-information-->
         </div>
      </div>

   </div>
   </div>
   <!--/product-details-->

   </div>
   </div>


   </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>