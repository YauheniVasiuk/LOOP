<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LOOP</title>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,
   wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,
   300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="/template/css/main.css">
   <link rel="stylesheet" href="/template/css/main_cat.css">
   <link rel="stylesheet" href="/template/css/main_dis.css">
   <link rel="stylesheet" href="/template/css/main_catalog.css">
   <link rel="stylesheet" href="/template/css/main_category.css">
   <link rel="stylesheet" href="/template/css/main_register.css">
   <link rel="stylesheet" href="/template/css/main_cabinet.css">
   <link rel="stylesheet" href="/template/css/main_cart.css">
   <link rel="stylesheet" href="/template/css/main_order.css">
   <link rel="stylesheet" href="/template/css/main_issue.css">
   <link rel="stylesheet" href="/template/css/main_admin.css">
   <link rel="stylesheet" href="/template/css/main_product.css">
   <link rel="stylesheet" href="/template/css/media.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>

   <div class="site">

      <header class="header">
         <div class="container">

            <div class="header_wrapper">

               <div class="header_nav">

                  <button class="header_nav_toggle"><label for="header_nav_toggle"></label></button>

                  <input type="checkbox" id="header_nav_toggle">
                  <ul>
                     <li><a href="/catalog/0">Для мужчин<span class="ico_poligon_main"></span></a>
                        <ul>
                           <li><a href="/category/7">Обувь</a></li>
                           <li><a href="/category/2">Полуверы</a></li>
                           <li><a href="/category/3">Костюмы</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="/catalog/1">Для женщин<span class="ico_poligon_main"></span></a>
                        <ul>
                           <li><a href="/category/7">Обувь</a></li>
                           <li><a href="/category/2">Полуверы</a></li>
                           <li><a href="/category/3">Костюмы</a></li>
                        </ul>
                     </li>
                     <li><a href="/catalog/2">Для детей<span class="ico_poligon_main"></span></a>
                        <ul>
                           <li><a href="/category/7">Обувь</a></li>
                           <li><a href="/category/2">Шапки</a></li>
                           <li><a href="/category/3">Костюмы</a></li>
                        </ul>
                     </li>
                     <div class="header_order">
                        <a href="/payment/">Оплата</a>
                        <a href="/delivery/">Доставка</a>
                        <?php if (User::isGuest()) : ?>
                           <li><a href="/user/login/">Вход</a></li>
                        <?php else : ?>
                           <li><a href="/cabinet/">Aккаунт</a></li>
                           <li><a href="/user/logout/">Выход</a></li>
                        <?php endif; ?>
                     </div>
                  </ul>
               </div>

               <div class="header_logo">
                  <a href="/admin/"><span class="ico_logo"><span class="title_logo">THE&nbspLOOP</span></span></a>
               </div>
               <div class="header_order">
                  <ul>
                     <li><a href="/payment/">Оплата</a></li>
                     <li><a href="/delivery/">Доставка</a></li>
                     <?php if (User::isGuest()) : ?>
                        <li><a href="/user/login/">Вход</a></li>
                     <?php else : ?>
                        <li><a href="/cabinet/">Aккаунт</a></li>
                        <li><a href="/user/logout/">Выход</a></li>
                     <?php endif; ?>
                  </ul>
               </div>

               <div class="header_cart">
                  <ul>
                     <li><a href="/cart/" class="ico_cart"><img src="/template/images/shopping_cart.png" alt="cart"></a></li>
                     <li><a href="/cart/"><span class="ico_strike"> &nbsp;&nbsp;<span id="cart-count"><?php echo Cart::countItems(); ?></span></span></a></li>
                  </ul>
               </div>

            </div>

         </div>

      </header>