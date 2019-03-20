CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_name` varchar(255) NOT NULL,
  `order_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `orders`
  ADD INDEX `orders.name` (`order_name`),
  ADD INDEX `orders.email` (`order_email`),
  ADD INDEX` orders.date` (`order_date`);

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_description` text,
  `product_price` decimal(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `products`
  ADD INDEX `prodocts.name` (`product_name`);

CREATE TABLE `orders_items` (
  `order_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `product_id` int(11) NOT NULL REFERENCES products(product_id),
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





