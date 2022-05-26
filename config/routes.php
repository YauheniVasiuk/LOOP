<?php

return array(

   'delivery' => 'site/delivery', // actionDelivery in SiteController
   'about' => 'site/about', // actionAbout in SiteController
   'payment' => 'site/payment', // actionPyament in SiteController
   'product/([0-9]+)' => 'product/view/$1', // actionView in ProductController

   'catalog/([0-9]+)' => 'catalog/index/$1', // actionIndex in CatalogController
   'catalog_d' => 'catalog/discount', // actionDiscount in CatalogController
   'catalog_n' => 'catalog/new', // actionNew in CatalogController
   'catalog' => 'catalog/catalog', // actionCatalog in CatalogController
   'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory in CatalogController
   'category/([0-9]+)' => 'catalog/category/$1', // actionCategory in CatalogController

   'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', //actionAddAjax in CartController
   'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd in CartController
   'cart/checkout' => 'cart/checkout', // actionCheckout in CartController
   'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete in CartController
   'cart' => 'cart/index', // actionIndex in CartController

   'user/register' => 'user/register', //actionRegister in UserController
   'user/login' => 'user/login', //actionLogin in UserController
   'user/logout' => 'user/logout', //actionLogout in UserController

   'admin/product/create' => 'adminProduct/create',
   'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
   'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
   'admin/product' => 'adminProduct/index',

   'cabinet/edit' => 'cabinet/edit', //actionEdit in CabinetController
   'cabinet' => 'cabinet/index', //actionIndex in CabinetController

   'admin' => 'admin/index', // actionIndex in AdminController

   'contacts' => 'site/contact', //actionContact in SiteController

   '' => 'site/index', // actionIndex in SiteController
);
