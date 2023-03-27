-- CREATE TABLE books (
--     title VARCHAR(255),
--     author VARCHAR(255),
--     publisher VARCHAR(255),
--     ISBN VARCHAR(255),
--     date_published Date,
--     genre VARCHAR(255),
--     description VARCHAR(255),
--     num_of_copies INT,
--     price FLOAT,
--     PRIMARY KEY (ISBN)
-- );

-- CREATE TABLE reviews (
--     review VARCHAR(255),
--     review_id INTEGER PRIMARY KEY AUTOINCREMENT,
--     ISBN VARCHAR(255),
--     username VARCHAR(255),
--     FOREIGN KEY (ISBN) REFERENCES books (ISBN)
--         ON DELETE CASCADE
-- );


CREATE TABLE books (
    ISBN VARCHAR(255) NOT NULL PRIMARY KEY,
    Author VARCHAR(255) NOT NULL,
    Title VARCHAR(255) NOT NULL,
    Publisher VARCHAR(255) NOT NULL,
    Date_published DATE NOT NULL,
    Genre VARCHAR(255) NOT NULL,
    Price FLOAT NOT NULL,
    Description VARCHAR(255) NOT NULL,
    Num_of_copies INTEGER NOT NULL
)

CREATE TABLE reviews (

)

CREATE TABLE user (
    Username VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Fname VARCHAR(255) NOT NULL,
    Lname VARCHAR(255) NOT NULL,
    Address VARCHAR(255) NOT NULL,
    City VARCHAR(255) NOT NULL,
    State CHAR(2) NOT NULL,
    PRIMARY KEY (Username, Password)
)

CREATE TABLE purchase (
    Purchase_id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    Date_purchased DATE NOT NULL,
    Subtotal FLOAT NOT NULL,
    Tax FLOAT NOT NULL,
    Shipping_cost FLOAT NOT NULL,
    Total FLOAT NOT NULL
)

CREATE TABLE credit (
    CardNo INTEGER NOT NULL PRIMARY KEY,
    SecCode INTEGER NOT NULL,
    ExpDate DATE NOT NULL,
    Name VARCHAR(255) NOT NULL
)

CREATE TABLE cart (

)