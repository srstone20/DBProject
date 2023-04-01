DROP TABLE IF EXISTS book;
DROP TABLE IF EXISTS review;
DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS purchase;
DROP TABLE IF EXISTS credit;
DROP TABLE IF EXISTS cart;
DROP TABLE IF EXISTS past_cart;

CREATE TABLE book (
    ISBN VARCHAR(13) NOT NULL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    publisher VARCHAR(255) NOT NULL,
    date_published DATE NOT NULL,
    genre VARCHAR(255) NOT NULL,
    price INTEGER NOT NULL,
    num_of_copies INTEGER NOT NULL,
    img_link VARCHAR(255),
    description VARCHAR(255)
);

CREATE TABLE review (
    username VARCHAR(255),
    ISBN VARCHAR(13),
    review VARCHAR(1023),
    PRIMARY KEY (username, ISBN)
    FOREIGN KEY (ISBN) REFERENCES book(ISBN)
    FOREIGN KEY (username) REFERENCES user(username)
);

CREATE TABLE user (
    username VARCHAR(255) NOT NULL PRIMARY KEY,
    PIN VARCHAR(255) NOT NULL,
    fname VARCHAR(255) NOT NULL,
    lname VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    address2 VARCHAR(255),
    city VARCHAR(255) NOT NULL,
    state CHAR(2) NOT NULL,
    zip INTEGER NOT NULL,
    card_no VARCHAR(16) NOT NULL,
    FOREIGN KEY (card_no) REFERENCES credit(card_no)
);

CREATE TABLE purchase (
    purchase_id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    date_purchased DATE NOT NULL,
    subtotal FLOAT NOT NULL,
    tax FLOAT NOT NULL,
    shipping_cost FLOAT NOT NULL,
    total FLOAT NOT NULL,
    username VARCHAR(255) NOT NULL,
    FOREIGN KEY (username) REFERENCES user(username)
);

CREATE TABLE credit (
    card_no VARCHAR(16) NOT NULL PRIMARY KEY,
    sec_code INTEGER NOT NULL,
    exp_date DATE NOT NULL
);

CREATE TABLE cart (
    username VARCHAR(255) NOT NULL,
    ISBN VARCHAR(13) NOT NULL,
    quantity INTEGER NOT NULL,
    PRIMARY KEY (username, ISBN)
    FOREIGN KEY (ISBN) REFERENCES book(ISBN)
    FOREIGN KEY (username) REFERENCES user(username)
);

CREATE TABLE past_cart (
    purchase_id INTEGER NOT NULL,
    ISBN VARCHAR(13) NOT NULL,
    quantity INTEGER NOT NULL,
    PRIMARY KEY (purchase_id, ISBN)
    FOREIGN KEY (ISBN) REFERENCES book(ISBN)
    FOREIGN KEY (purchase_id) REFERENCES purchase(purchase_id)
);