# SQL Commands from "PHP and MySQL for Dynamic Web Sites: Visual QuickPro Guide (4th Edition)"
# Written by Larry Ullman, Published September 2011

# This file contains the CREATE, INSERT, and ALTER SQL statements used in the book, listed by chapter.
# The SQL commands here are from the steps where they are entered into the MySQL client.
# SQL commands from the tips and from the PHP scripts are not included.
# You SHOULD NOT attempt to run this file in MySQL as is. Cut and paste the specific commands as needed.
# This file is encoded in UTF8 to support the characters in various languages. For more information, see Chapter 6.


# ---------
# Chapter 5
# ---------

#CREATE DATABASE test;

USE test;

CREATE TABLE jte_users (
user_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
first_name VARCHAR(20) NOT NULL,
last_name VARCHAR(40) NOT NULL,
email VARCHAR(60) NOT NULL,
pass CHAR(40) NOT NULL,
registration_date DATETIME NOT NULL,
PRIMARY KEY (user_id)
);

INSERT INTO jte_users 
(first_name, last_name, email, pass, registration_date) 
VALUES ('Larry', 'Ullman', 'email@example.com', SHA1('mypass'), NOW());

INSERT INTO jte_users VALUES 
(NULL, 'Zoe', 'Isabella', 'email2@example.com', SHA1('mojito'), NOW());

INSERT INTO jte_users (first_name, last_name, email, pass, registration_date) VALUES
('John', 'Lennon', 'john@beatles.com', SHA1('Happin3ss'), NOW()),
('Paul', 'McCartney', 'paul@beatles.com', SHA1('letITbe'), NOW()),
('George', 'Harrison', 'george@beatles.com ', SHA1('something'), NOW()),
('Ringo', 'Starr', 'ringo@beatles.com', SHA1('thisboy'), NOW());

INSERT INTO jte_users (first_name, last_name, email, pass, registration_date) VALUES
('David', 'Jones', 'davey@monkees.com', SHA1('fasfd'), NOW()),
('Peter', 'Tork', 'peter@monkees.com', SHA1('warw'), NOW()),
('Micky', 'Dolenz', 'micky@monkees.com ', SHA1('afsa'), NOW()),
('Mike', 'Nesmith', 'mike@monkees.com', SHA1('abdfadf'), NOW()),
('David', 'Sedaris', 'david@authors.com', SHA1('adfwrq'), NOW()),
('Nick', 'Hornby', 'nick@authors.com', SHA1('jk78'), NOW()),
('Melissa', 'Bank', 'melissa@authors.com', SHA1('jhk,h'), NOW()),
('Toni', 'Morrison', 'toni@authors.com', SHA1('hdhd'), NOW()),
('Jonathan', 'Franzen', 'jonathan@authors.com', SHA1('64654'), NOW()),
('Don', 'DeLillo', 'don@authors.com', SHA1('asf8'), NOW()),
('Graham', 'Greene', 'graham@authors.com', SHA1('5684eq'), NOW()),
('Michael', 'Chabon', 'michael@authors.com', SHA1('srw6'), NOW()),
('Richard', 'Brautigan', 'richard@authors.com', SHA1('zfs654'), NOW()),
('Russell', 'Banks', 'russell@authors.com', SHA1('wwr321'), NOW()),
('Homer', 'Simpson', 'homer@simpson.com', SHA1('5srw651'), NOW()),
('Marge', 'Simpson', 'marge@simpson.com', SHA1('ljsa'), NOW()),
('Bart', 'Simpson', 'bart@simpson.com', SHA1('pwqojz'), NOW()),
('Lisa', 'Simpson', 'lisa@simpson.com', SHA1('uh6'), NOW()),
('Maggie', 'Simpson', 'maggie@simpson.com', SHA1('plda664'), NOW()),
('Abe', 'Simpson', 'abe@simpson.com', SHA1('qopkrokr65'), NOW());

UPDATE jte_users SET email='mike@authors.com' WHERE user_id = 18;

DELETE FROM jte_users WHERE user_id = 8 LIMIT 1;


# ---------
# Chapter 6
# ---------

CREATE DATABASE jte_forum CHARACTER SET utf8 COLLATE utf8_general_ci;
USE jte_forum;

CREATE TABLE jte_forums (
forum_id TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
name VARCHAR(60) NOT NULL,
PRIMARY KEY (forum_id),
UNIQUE (name)
) ENGINE = INNODB;

CREATE TABLE jte_messages (
message_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
parent_id INT UNSIGNED NOT NULL DEFAULT 0,
forum_id TINYINT UNSIGNED NOT NULL,
user_id MEDIUMINT UNSIGNED NOT NULL,
subject VARCHAR(100) NOT NULL,
body LONGTEXT NOT NULL,
date_entered DATETIME NOT NULL,
PRIMARY KEY (message_id),
INDEX (parent_id),
INDEX (forum_id),
INDEX (user_id),
INDEX (date_entered)
) ENGINE = MYISAM;

CREATE TABLE jte_users (
user_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
username VARCHAR(30) NOT NULL,
pass CHAR(40) NOT NULL,
first_name VARCHAR(20) NOT NULL,
last_name VARCHAR(40) NOT NULL,
email VARCHAR(60) NOT NULL,
PRIMARY KEY (user_id),
UNIQUE (username),
UNIQUE (email),
INDEX login (pass, email)
) ENGINE = INNODB;

#CHARSET utf8;

INSERT INTO jte_forums (name) VALUES 
('MySQL'), ('PHP'), ('Sports'), 
('HTML'), ('CSS'), ('Kindling'); 
INSERT INTO jte_forums (name) VALUES ('Modern Dance');

INSERT INTO jte_users (username, pass, first_name, last_name, email) VALUES 
('troutster', SHA1('mypass'), 'Larry', 'Ullman', 'lu@example.com'),
('funny man', SHA1('monkey'), 'David', 'Brent', 'db@example.com'),
('Gareth', SHA1('asstmgr'), 'Gareth', 'Keenan', 'gk@example.com');
INSERT INTO jte_users (username, pass, first_name, last_name, email) VALUES 
('tim', SHA1( 'psych' ) , 'Tim', 'Canterbury', 'tc@example.com'),
('finchy', SHA1('jerk'), 'Chris', 'Finch', 'cf@example.com');

SELECT * FROM jte_forums;
SELECT user_id, username FROM jte_users;
INSERT INTO jte_messages (parent_id, forum_id, user_id, subject, body, date_entered) VALUES
(0, 1, 1, 'Question about normalization.', 'I''m confused about normalization. For the second normal form (2NF), I read...', UTC_TIMESTAMP()),
(0, 1, 2, 'Database Design', 'I''m creating a new database and am having problems with the structure. How many tables should I have?...', UTC_TIMESTAMP()),
(2, 1, 2, 'Database Design', 'The number of tables your database includes...', UTC_TIMESTAMP()),
(0, 1, 3, 'Database Design', 'Okay, thanks!', UTC_TIMESTAMP()),
(0, 2, 3, 'PHP Errors', 'I''m using the scripts from Chapter 3 and I can''t get the first calculator example to work. When I submit the form...', UTC_TIMESTAMP());
INSERT INTO jte_messages (parent_id, forum_id, user_id, subject, body, date_entered) VALUES
(5, 2, 1, 'PHP Errors', 'What version of PHP are you using?', UTC_TIMESTAMP()),
(6, 2, 3, 'PHP Errors', 'Version 5.2', UTC_TIMESTAMP()),
(7, 2, 1, 'PHP Errors', 'In that case, try the debugging steps outlined in Chapter 7.', UTC_TIMESTAMP()),
(0, 3, 2, 'Chicago Bulls', 'Can the Bulls really win it all this year?', UTC_TIMESTAMP()),
(9, 3, 1, 'Chicago Bulls', 'I don\'t know, but they sure look good!', UTC_TIMESTAMP()),
(0, 5, 3, 'CSS Resources', 'Where can I found out more information about CSS?', UTC_TIMESTAMP()),
(11, 5, 1, 'CSS Resources', 'Read Elizabeth Castro''s excellent book on (X)HTML and CSS. Or search Google on "CSS".', UTC_TIMESTAMP()),
(0, 4, 3, 'HTML vs. XHTML', 'What are the differences between HTML and XHTML?', UTC_TIMESTAMP()),
(13, 4, 1, 'HTML vs. XHTML', 'XHTML is a cross between HTML and XML. The differences are largely syntactic. Blah, blah, blah...', UTC_TIMESTAMP()),
(0, 6, 4, 'Why?', 'Why do you have a forum dedicated to kindling? Don''t you deal mostly with PHP, MySQL, and so forth?', UTC_TIMESTAMP()),
(0, 2, 3, 'Dynamic HTML using PHP', 'Can I use PHP to dynamically generate HTML on the fly? Thanks...', UTC_TIMESTAMP()),
(16, 2, 1, 'Dynamic HTML using PHP', 'You most certainly can.', UTC_TIMESTAMP()),
(17, 2, 3, 'Dynamic HTML using PHP, still not clear', 'Um, how?', UTC_TIMESTAMP()),
(18, 2, 2, 'Dynamic HTML using PHP, clearer?', 'I think what Larry is trying to say is that you should buy and read his book.', UTC_TIMESTAMP()),
(15, 6, 4, 'Why? Why? Why?', 'Really, why?', UTC_TIMESTAMP()),
(20, 6, 1, 'Because', 'Because', UTC_TIMESTAMP());		

CREATE DATABASE jte_banking CHARACTER SET utf8 COLLATE utf8_general_ci;
USE jte_banking;

CREATE TABLE jte_customers (
customer_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
first_name VARCHAR(20) NOT NULL,
last_name VARCHAR(40) NOT NULL,
PRIMARY KEY (customer_id),
INDEX full_name (last_name, first_name)
) ENGINE = INNODB;

CREATE TABLE jte_accounts (
account_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
customer_id INT UNSIGNED NOT NULL,
type ENUM('Checking', 'Savings') NOT NULL,
balance DECIMAL(10,2) UNSIGNED NOT NULL DEFAULT 0.0,
PRIMARY KEY (account_id),
INDEX (customer_id),
FOREIGN KEY (customer_id) REFERENCES customers (customer_id) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = INNODB;

CREATE TABLE jte_transactions (
transaction_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
to_account_id INT UNSIGNED NOT NULL,
from_account_id INT UNSIGNED NOT NULL,
amount DECIMAL(5,2) UNSIGNED NOT NULL,
date_entered TIMESTAMP NOT NULL,
PRIMARY KEY (transaction_id),
INDEX (to_account_id),
INDEX (from_account_id),
INDEX (date_entered),
FOREIGN KEY (to_account_id) REFERENCES accounts (account_id)
ON DELETE NO ACTION ON UPDATE NO ACTION,
FOREIGN KEY (from_account_id) REFERENCES accounts (account_id) 
ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = INNODB;

INSERT INTO jte_customers (first_name, last_name) 
VALUES ('Sarah', 'Vowell'), ('David', 'Sedaris'), ('Kojo', 'Nnamdi');
INSERT INTO accounts (customer_id, balance) 
VALUES (1, 5460.23), (2, 909325.24), (3, 892.00);
INSERT INTO accounts (customer_id, type, balance) 
VALUES (2, 'Savings', 13546.97);