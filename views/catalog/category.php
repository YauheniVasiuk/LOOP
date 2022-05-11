<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="catalog">
   <div class="container">

      <div class="catalog_content_cat">

         <div class="catalog_title_category">
            <ul>
               <?php foreach ($categories as $categoryItem) : ?>
                  <li>
                     <h3>
                        <a href="/category/<?php echo $categoryItem['id']; ?>" class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>">
                           <?php echo $categoryItem['name']; ?>
                        </a>
                     </h3>
                  </li>
               <?php endforeach; ?>
            </ul>
         </div>

         <div class="catalog_content_cat_list_wrapper">
            <?php foreach ($categoryProducts as $product) : ?>
               <div class="catalog_content_cat_list">
                  <a href="/product/<?php echo $product['id']; ?>">
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
               </div>
            <?php endforeach; ?>

         </div>

         <div class="pagination">
            <?php echo $pagination->get(); ?>
         </div>

      </div>

   </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>