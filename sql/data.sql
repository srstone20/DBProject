delete from books;
delete from reviews;

INSERT INTO books VALUES ('1984', 'George Orwell', 'Secker & Warburg', '9786589711377', '1949-6-8', 'Science Fiction', '1984 is a dystopian novella by George Orwell published in 1949, which follows the life of Winston Smith, a low ranking member of the Party, who is frustrated by the omnipresent eyes of the party, and its ominous ruler Big Brother. Big Brother controls every aspect of people''s lives.', '14.99', '10');
INSERT INTO books VALUES ('The Great Gatsbay', 'F. Scott Fitzgerald', 'Charles Scribner''s Sons', '9780333791035', '1925-4-10', 'Tragedy', 'The Great Gatsby is a 1925 novel by American writer F. Scott Fitzgerald. Set in the Jazz Age on Long Island, near New York City, the novel depicts first-person narrator Nick Carraway''s interactions with mysterious millionaire Jay Gatsby and Gatsby''s obsession to reunite with his former lover, Daisy Buchanan.', '7.99', '20');

INSERT INTO reviews (review, ISBN, username)
VALUES ('How can I love a story so much as it destroys my soul? This book leads you down a dark hole and you won''t recover when you make the journey. Yet, you have to make the journey… you must see the destination. When you do, you realize humanity is doomed but… you still love the story.', '9786589711377', 'Mary');
INSERT INTO reviews (review, ISBN, username)
VALUES ('Too long.', '9786589711377', 'Billy from Middle School');
INSERT INTO reviews (review, ISBN, username)
VALUES ('It is one of those reads you can''t put down. The writer is colorful and descriptive. He makes you feel like you are almost there. Definitely a good read.', '9780333791035', 'Richard');