<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="catalog_cat">
   <div class="catalog">
      <div class="container">

         <div class="catalog_content_cat">

            <div class="catalog_title_cat">
               <h3>товары для <?php switch ($catalogId) {
                                 case 0:
                                    echo "мужчин";
                                    break;
                                 case 1:
                                    echo "женщин";
                                    break;
                                 case 2:
                                    echo "детей";
                                    break;
                                 case 3:
                                    echo "животных";
                                    break;
                              } ?></h3>
            </div>

            <div class="catalog_content_cat_list_wrapper">
               <?php foreach ($catalogProducts as $product) : ?>
                  <div class="catalog_content_cat_list">
                     <a href="<?php echo $product['id']; ?>">
                        <?php if ($product['is_new'] == 1) : ?>
                           <div class="new">
                              <img src="/template/images/new.png" alt="new">
                           </div>
                        <?php endif; ?>
                        <img src="<?php echo $product['image']; ?>" alt="product">
                     </a>
                     <div class="catalog_content_cat_price">
                        Цена :<?php echo $product['price'] ?>Br
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