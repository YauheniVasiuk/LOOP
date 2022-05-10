<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="catalog">
   <div class="container">

      <div class="catalog_content_cat">

         <div class="catalog_title_dis">
            <h3>товары на скидке</h3>
         </div>

         <div class="catalog_content_cat_list_wrapper">
            <?php foreach ($discountProducts as $product) : ?>
               <div class="catalog_content_cat_list">
                  <a href="<?php echo $product['id']; ?>">
                  <?php if ($product['is_new'] == 1) : ?>
                        <div class="new">
                           <img src="/template/images/new.png" alt="new">
                        </div>
                     <?php endif; ?>
                  <img src="<?php echo $product['image']; ?>" alt="product"></a>
                  <div class="catalog_content_cat_price">
                     Цена :<?php echo $product['price'] ?>Br <span class="catalog_content_dis"> - <?php echo $product['discount_price']; ?>%</span>
                  </div>
                  <div class="catalog_content_cat_name">
                     <?php echo $product['name'] ?>
                  </div>
               </div>
            <?php endforeach; ?>
         </div>

      </div>

   </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>