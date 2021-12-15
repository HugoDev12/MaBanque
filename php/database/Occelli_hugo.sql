DROP DATABASE IF EXISTS mabanque;
CREATE DATABASE mabanque CHARACTER SET 'utf8';
USE mabanque;

DROP USER IF EXISTS 'BanquePHP'@'localhost';
CREATE USER 'BanquePHP'@'localhost';
GRANT ALL PRIVILEGES ON mabanque.* TO 'BanquePHP'@'localhost' IDENTIFIED BY 'banque76';

CREATE TABLE IF NOT EXISTS user (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_mail VARCHAR(50) NOT NULL UNIQUE,
    user_pw VARCHAR(50) NOT NULL,
    login_creation DATE,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS accounts (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    account_name VARCHAR(50),
    account_amount INT,
    account_user_id INT UNSIGNED,
    PRIMARY KEY (id),
    FOREIGN KEY (account_user_id) REFERENCES user(id)
);

CREATE TABLE IF NOT EXISTS account_details (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    account_date DATE,
    account_number VARCHAR(50),
    lastOp_description VARCHAR(50),
    account_id INT UNSIGNED,
    PRIMARY KEY (id),
    FOREIGN KEY (account_id) REFERENCES accounts(id)
);

INSERT INTO user (user_mail, user_pw, login_creation)
VALUES ('xxxx.xxxx@hotmail.fr','azprlsjeLAKOZ569','2021-10-15'),
       ('xxxx.xxxx@gmail.com','slkfldfjma5412','2021-10-15');

INSERT INTO accounts (account_name, account_amount, account_user_id)
VALUES ('La Poste',4500,1),
       ('La Banque Française',3700,1);

INSERT INTO account_details (account_date, account_number, lastOp_description, account_id)
VALUES ('2021-10-15','Nr°151564643 fr01','dépôt 50€',1),('2021-10-15','Nr°151564640 fr02','retrait 70€',2);
