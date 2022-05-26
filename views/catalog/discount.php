<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="catalog_cat">

   <div class="catalog">
      <div class="container">

         <div class="catalog_content_cat">

            <div class="catalog_title_dis">
               <h3>товары на скидке</h3>
            </div>

            <div class="catalog_content_cat_list_wrapper">
               <?php foreach ($discountProducts as $product) : ?>
                  <div class="catalog_content_cat_list">
                     <a href="/product/<?php echo $product['id']; ?>">
                        <?php if ($product['is_new'] == 1) : ?>
                           <div class="new">
                              <img src="/template/images/new.png" alt="new">
                           </div>
                        <?php endif; ?>
                        <?php if ($product['image'] == 'image') : ?>
                           <img src="<?php echo Product::getImage($product['id']); ?>" alt="product" />
                        <?php else : ?>
                           <img src="<?php echo $product['image']; ?>" alt="product" />
                        <?php endif; ?>
                     </a>
                     <div class="catalog_content_cat_price">
                        Цена :<?php echo $product['price'] ?>Br <span class="catalog_content_dis"> - <?php echo $product['discount_price']; ?>%</span>
                     </div>
                     <div class="catalog_content_cat_name">
                        <?php echo $product['name'] ?>
                     </div>
                     <div class="catalog_content_cat_cart">
                        <button class="button_cart">
                           <a href="/cart/add/<?php echo $product['id']; ?>" class="add-to-cart" data-id="<?php echo $product['id']; ?>">
                              <div class="ico_cart_button">в корзину</div>
                           </a>
                        </button>
                     </div>
                  </div>
               <?php endforeach; ?>
            </div>

         </div>

      </div>

   </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>