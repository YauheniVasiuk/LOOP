-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 26 2022 г., 23:14
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `theloop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `sort_order`, `status`) VALUES
(1, 'Платья', 0, 1),
(2, 'Полуверы ', 1, 1),
(3, 'Костюмы', 2, 1),
(4, 'Майки', 3, 1),
(5, 'Брюки', 4, 1),
(6, 'Шапки', 5, 1),
(7, 'Обувь', 6, 1),
(8, 'Шорты', 7, 1),
(9, 'Для животных', 8, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int NOT NULL,
  `code` int NOT NULL,
  `price` float NOT NULL,
  `availability` int NOT NULL,
  `brand` varchar(255) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'image',
  `description` text NOT NULL,
  `is_new` int NOT NULL DEFAULT '0',
  `is_recommended` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '1',
  `catalog_id` int NOT NULL DEFAULT '0',
  `discount` tinyint(1) NOT NULL DEFAULT '0',
  `discount_price` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `code`, `price`, `availability`, `brand`, `image`, `description`, `is_new`, `is_recommended`, `status`, `catalog_id`, `discount`, `discount_price`) VALUES
(1, 'Товар 1', 1, 1, 300, 1, 'Бренд 2', '/template/images/productW2_db.png', 'Один из лучших брендовых товаров на the LOOP.', 0, 1, 1, 0, 0, 0),
(2, 'Товар 3', 2, 2, 300, 1, 'Бренд 2', '/template/images/productW_db.png', 'Один из лучших брендовых товаров на the LOOP.', 1, 1, 1, 1, 0, 0),
(3, 'Товар 3', 3, 3, 100, 1, 'Бренд 3', '/template/images/productCH_db.png', 'Один из лучших брендовых товаров на the LOOP.', 1, 1, 1, 2, 0, 0),
(4, 'Товар 4', 4, 4, 100, 1, 'Бренд 4', '/template/images/productM2_db.png', 'Один из лучших брендовых товаров на the LOOP.', 1, 1, 1, 0, 0, 0),
(5, 'Товар 5', 5, 5, 100, 1, 'Бренд 5', '/template/images/productW2_db.png', 'Один из лучших брендовых товаров на the LOOP.', 1, 1, 1, 1, 0, 0),
(6, 'Товар 6', 6, 6, 100, 1, 'Бренд 6', '/template/images/productCH2_db.png', 'Один из лучших брендовых товаров на the LOOP.', 1, 1, 1, 2, 0, 0),
(7, 'Товар 7', 7, 7, 100, 1, 'Бренд 7', '/template/images/productM_db.png', 'Один из лучших брендовых товаров на the LOOP.', 1, 1, 1, 0, 0, 0),
(8, 'Товар 8', 8, 8, 100, 1, 'Бренд 8', '/template/images/productW_db.png', 'Один из лучших брендовых товаров на the LOOP.', 1, 1, 1, 1, 0, 0),
(9, 'Товар 9', 5, 9, 100, 1, 'Бренд 1', '/template/images/productM_db.png', 'Один из лучших брендовых товаров на the LOOP.', 1, 1, 1, 0, 0, 0),
(11, 'Товар 11', 5, 11, 100, 1, 'Бренд 3', '/template/images/productCH_db.png', 'Один из лучших брендовых товаров на the LOOP.', 0, 1, 1, 2, 0, 0),
(12, 'Товар 12', 5, 12, 100, 1, 'Бренд 4', '/template/images/productM2_db.png', 'Один из лучших брендовых товаров на the LOOP.', 0, 1, 1, 0, 0, 0),
(13, 'Товар 13', 5, 13, 100, 1, 'Бренд 5', '/template/images/productW2_db.png', 'Один из лучших брендовых товаров на the LOOP.', 0, 1, 1, 1, 1, 25),
(14, 'Товар 14', 5, 14, 100, 1, 'Бренд 6', '/template/images/productCH2_db.png', 'Один из лучших брендовых товаров на the LOOP.', 1, 1, 1, 2, 1, 25),
(15, 'Товар 15', 5, 15, 100, 1, 'Бренд 7', '/template/images/productM_db.png', 'Один из лучших брендовых товаров на the LOOP.', 0, 1, 1, 0, 1, 40),
(16, 'Товар 8', 5, 16, 100, 1, 'Бренд 8', '/template/images/productW_db.png', 'Один из лучших брендовых товаров на the LOOP.', 1, 1, 1, 1, 1, 50),
(17, 'Товар 17', 5, 17, 100, 1, 'Бренд 7', '/template/images/productCH_db.png', 'Один из лучших брендовых товаров на the LOOP.', 0, 1, 1, 2, 1, 70),
(18, 'Товар 18', 5, 18, 100, 1, 'Бренд 8', '/template/images/productCH2_db.png', 'Один из лучших брендовых товаров на the LOOP.', 1, 1, 1, 2, 1, 90),
(19, 'Товар 19', 9, 19, 150, 1, 'Бренд A', '/template/images/productA_db.png', 'Один из лучших брендовых товаров на the LOOP.', 0, 1, 1, 3, 0, 0),
(20, 'Товар 20', 9, 20, 150, 1, 'Бренд A', '/template/images/productA2_db.png', 'Один из лучших брендовых товаров на the LOOP.', 1, 1, 1, 3, 0, 0),
(21, 'Товар 21', 9, 21, 150, 1, 'Бренд A', '/template/images/productA_db.png', 'Один из лучших брендовых товаров на the LOOP.', 0, 1, 1, 3, 1, 20),
(22, 'Товар 22', 9, 22, 150, 1, 'Бренд A', '/template/images/productA2_db.png', 'Один из лучших брендовых товаров на the LOOP.', 1, 1, 1, 3, 0, 0),
(23, 'Товар 23', 9, 23, 150, 1, 'Бренд A', '/template/images/productA2_db.png', 'Один из лучших брендовых товаров на the LOOP.', 0, 1, 1, 3, 1, 30),
(24, 'Товар 24', 9, 24, 150, 1, 'Бренд A', '/template/images/productA_db.png', 'Один из лучших брендовых товаров на the LOOP.', 1, 1, 1, 3, 0, 0),
(25, 'Товар 25', 5, 25, 100, 1, 'Бренд 5', '/template/images/productM2_db.png', 'Один из лучших брендовых товаров на the LOOP.', 0, 1, 1, 0, 1, 25),
(26, 'Товар 26', 5, 26, 100, 1, 'Бренд 6', '/template/images/productW2_db.png', 'Один из лучших брендовых товаров на the LOOP.', 1, 1, 1, 1, 1, 25),
(27, 'Товар 27', 5, 27, 100, 1, 'Бренд 7', '/template/images/productCH2_db.png', 'Один из лучших брендовых товаров на the LOOP.', 0, 1, 1, 2, 1, 40),
(28, 'Товар 28', 5, 28, 100, 1, 'Бренд 8', '/template/images/productW2_db.png', 'Один из лучших брендовых товаров на the LOOP.', 1, 1, 1, 1, 1, 50),
(29, 'Товар 29', 5, 29, 100, 1, 'Бренд 7', '/template/images/productW_db.png', 'Один из лучших брендовых товаров на the LOOP.', 0, 1, 1, 1, 1, 70),
(30, 'Товар 30', 5, 30, 100, 1, 'Бренд 8', '/template/images/productCH_db.png', 'Один из лучших брендовых товаров на the LOOP.', 1, 1, 1, 2, 1, 90),
(32, 'Товар 1', 3, 1, 250, 1, 'Брэнд1', 'image', 'Лучший добавленый товар', 1, 1, 1, 0, 0, 0),
(35, 'prod3', 2, 1, 150, 1, 'Брэнд1', 'image', 'add', 1, 1, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `product_order`
--

CREATE TABLE `product_order` (
  `id` int NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_comment` text NOT NULL,
  `user_id` int DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `products`, `status`) VALUES
(1, 'Евгений СУПЕР разраб', '12345678910', 'Сейчас', 1, '2022-05-17 19:37:02', '{\"29\":1,\"26\":3,\"28\":3,\"30\":2,\"27\":1}', 1),
(2, 'женя', '12345678910', 'Сейчас', NULL, '2022-05-17 19:43:24', '{\"27\":1,\"30\":1,\"17\":1,\"14\":3,\"18\":3}', 1),
(3, 'женя', '12345678910', 'Сейчас', NULL, '2022-05-17 19:44:13', '{\"29\":2,\"26\":1}', 1),
(4, 'женя', '12345678910', 'Сейчас', NULL, '2022-05-17 19:46:38', '{\"15\":1,\"25\":1,\"12\":3}', 1),
(5, 'женя', '12345678910', 'Сейчас', NULL, '2022-05-17 19:58:46', '{\"29\":2,\"28\":2}', 1),
(6, 'женя', '12345678910', 'Сейчас', NULL, '2022-05-22 12:04:25', '{\"29\":1,\"30\":3,\"26\":2}', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Евгений СУПЕР разраб', 'ddd@ddd.dd', '123456', 'admin'),
(2, 'Evgen', 'fff@fff.ff', '123456', 'user'),
(3, 'evgen', 'jyujk@fffl.rt', '123456', 'user'),
(4, 'evgen', '12123@sdcsdc.rttr', '$2y$10$Dnom4gHTHYOmgQ8ZicDv5ejbKpds306C7HpGgzqNQt4xLtD9DiCA2', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
