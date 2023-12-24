CREATE TABLE products(
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    product_name varchar(255) NOT NULL,
    product_description varchar(255) NOT NULL,
    product_price int(11) NOT NULL,
    product_info LONGTEXT NOT NULL,
    product_image varchar(1000) NOT NULL
);


ALTER TABLE users ADD COLUMN last_activity TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;

ALTER TABLE users ADD COLUMN is_product TINYINT DEFAULT 0;

ALTER TABLE your_table MODIFY COLUMN product_info VARCHAR(255);  -- Change 255 to the desired length



CREATE TABLE cart(
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    product_name varchar(255) NOT NULL,
    product_price int(11) NOT NULL,
    product_quantity int(11) NOT NULL,
    users_id int(11) NOT NULL,
    product_id int(11) NOT NULL,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- for uploading to the server
CREATE TABLE users(
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    is_admin TINYINT(1) NOT NULL DEFAULT 0,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP;   
    last_activity TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    fullName varchar(255) NOT NULL,
    profileImage varchar(1000) NOT NULL
);



CREATE TABLE cart(
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    product_name varchar(255) NOT NULL,
    product_price int(11) NOT NULL,
    product_quantity int(11) NOT NULL,
    users_id int(11) NOT NULL, 
    product_id int(11) NOT NULL,
    date_added TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    is_product int(11) NOT NULL DEFAULT 1;
    product_image varchar(255) NOT NULL
);

 CREATE TABLE products(
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    product_name varchar(255) NOT NULL,
    product_description varchar(255) NOT NULL,
    product_price int(11) NOT NULL,
    product_info varchar(255) NOT NULL,
    product_image varchar(1000) NOT NULL,
    is_product TINYINT(1) NOT NULL DEFAULT 0,
    dateAdded TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
 );

 CREATE TABLE review(
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    product_id int(11) NOT NULL,
    comments varchar(255) NOT NULL,
    profilePhoto varchar(1000) NOT NULL,
    date_added TIMESTAMP NOT NULL DEFAULT TIMESTAMP,
    productImage varchar(1000) NOT NULL
 );