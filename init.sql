drop database if exists a11dc564;
create database `a11dc564` DEFAULT CHARACTER SET utf8;

USE `a11dc564`;

DROP TABLE IF EXISTS `products`;
DROP TABLE IF EXISTS `sales`;

CREATE TABLE `products`
(id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
`name` VARCHAR(255) NOT NULL,
price INT NOT NULL) DEFAULT CHARSET=utf8;

INSERT INTO products (id, name, price) VALUES
    (1, 'ふとんクリーナー', 28800),
    (2, 'ダイソンコードレスクリーナー', 47610),
    (3, 'ロボット掃除機', 51500),
    (4, 'ブラザーコンピュータミシン', 18900),
    (5, '毛玉取り器', 2480),
    (6, 'ふとん専用ダニクリーナー', 17800),
    (7, '全自動洗濯機', 55000),
    (8, 'コードレスアイロン', 5980);

CREATE TABLE `sales`
(id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
product_id INT NOT NULL,
sales_at DATETIME NOT NULL,
quantity INT NOT NULL) DEFAULT CHARSET=utf8;