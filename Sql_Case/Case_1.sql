CREATE SCHEMA bookstoredb;

-- TABLE FOR THE LIST OF AUTHORS
CREATE TABLE bookstoredb.tbl_authors (
  Author_id INT NOT NULL AUTO_INCREMENT,
  Author_Name VARCHAR(45) NOT NULL,
  Biography VARCHAR(45) NULL,
 
  PRIMARY KEY (Author_id)
  
);

-- table for the list of publishers
CREATE TABLE bookstoredb.tbl_publishers (
  Publisher_id INT NOT NULL,
  Publisher_Name VARCHAR(45) NOT NULL,
  Address VARCHAR(45) NOT NULL,
  PRIMARY KEY (Publisher_id)
 
);
-- table for books with reference to the punlishers and authors of each book
CREATE TABLE bookstoredb.tbl_books(
ISBN VARCHAR(30) NOT NULL,
Title VARCHAR(45) NOT NULL,
Publication_Date DATE NOT NULL,
Price INT NOT NULL,
_Description TEXT NOT NULL,
Publisher_id INT NOT NULL,
Author_id INT NOT NULL,

PRIMARY KEY(ISBN),
  INDEX fk_Publisher_id_idx (Publisher_id ASC) VISIBLE,
  INDEX fk_Author_id_idx (Author_id ASC) VISIBLE,
  CONSTRAINT fk_Publisher_id
    FOREIGN KEY (Publisher_id)
    REFERENCES tbl_publishers (Publisher_id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT,
  CONSTRAINT fk_Author_id
    FOREIGN KEY (Author_id)
    REFERENCES tbl_authors (Author_id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
);

-- table for the list of customers or patrons

CREATE TABLE bookstoredb.tbl_customers (
  Customer_id INT NOT NULL AUTO_INCREMENT,
  Customer_Name VARCHAR(45) NOT NULL,
  Email VARCHAR(45) NOT NULL,
  _Password VARCHAR(45) NOT NULL,

  PRIMARY KEY (Customer_id)
);

-- table for list of orders done by(reference to) customers 
CREATE TABLE bookstoredb.tbl_orders (
  Order_id INT NOT NULL AUTO_INCREMENT,
  _Date DATE NOT NULL,
  _Status TEXT(45) NOT NULL,
  Total_Price INT NOT NULL,
  Shipping_Address VARCHAR(45) NOT NULL,
  Customer_id INT NOT NULL,
  PRIMARY KEY (Order_id),
  INDEX fk_Customer_id_idx (Customer_id ASC) VISIBLE,
  CONSTRAINT fk_Customer_id
    FOREIGN KEY (Customer_id)
    REFERENCES tbl_customers(Customer_id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
);

-- table for further details in each order. Also acts as a bridge between orders and books
-- (specified what book/s have been ordered)
CREATE TABLE bookstoredb.tbl_orderinfo(
Order_Info_id INT NOT NULL,
ISBN VARCHAR(30) NOT NULL,
Order_id INT NOT NULL,

PRIMARY KEY(Order_Info_id),
 INDEX fk_Order_id_idx (Order_id ASC) VISIBLE,
  INDEX fk_ISBN_idx (ISBN ASC) VISIBLE,
  CONSTRAINT fk_Order_id_info
    FOREIGN KEY (Order_id)
    REFERENCES tbl_orders(Order_id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT,
  CONSTRAINT fk_ISBN_orderinfo
    FOREIGN KEY (ISBN)
    REFERENCES tbl_books(ISBN)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
);

-- table for shipments containing certain orders
CREATE TABLE bookstoredb.tbl_shipments (
  Tracking_Number INT NOT NULL,
  Shipping_Date DATE NOT NULL,
  Delivery_Date DATE NOT NULL,
  Order_id INT NOT NULL,
  
  PRIMARY KEY (Tracking_Number),
  INDEX fk_Order_id_idx (Order_id ASC) VISIBLE,
  CONSTRAINT fk_Order_id
    FOREIGN KEY (Order_id)
    REFERENCES tbl_orders(Order_id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
);
