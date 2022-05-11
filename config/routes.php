<?php

return array(

   'product/([0-9]+)' => 'product/view/$1', // actionView in ProductController

   'catalog_d' => 'catalog/discount', // actionDiscount in CatalogController
   'catalog_n' => 'catalog/new', // actionNew in CatalogController
   'catalog/([0-9]+)' => 'catalog/index/$1', // actionIndex in CatalogController
   'catalog' => 'catalog/catalog', // actionCatalog in CatalogController
   'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory in CatalogController
   'category/([0-9]+)' => 'catalog/category/$1', // actionCategory in CatalogController

   'user/register' => 'user/register', //actionRegister in UserController

   '' => 'site/index', // actionIndex in SiteController
);
