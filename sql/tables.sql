CREATE TABLE books (
    title VARCHAR(255),
    author VARCHAR(255),
    publisher VARCHAR(255),
    ISBN VARCHAR(255),
    date_published Date,
    genre VARCHAR(255),
    description VARCHAR(255),
    num_of_copies INT,
    PRIMARY KEY (ISBN)
);

CREATE TABLE reviews (
    review VARCHAR(255),
    review_id INTEGER PRIMARY KEY AUTOINCREMENT,
    ISBN VARCHAR(255),
    username VARCHAR(255),
    FOREIGN KEY (ISBN) REFERENCES books (ISBN)
        ON DELETE CASCADE
);