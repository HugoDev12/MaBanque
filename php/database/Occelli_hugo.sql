DROP DATABASE IF EXISTS mabanque;
CREATE DATABASE mabanque CHARACTER SET 'utf8';
USE mabanque;

DROP USER IF EXISTS 'BanquePHP'@'localhost';
CREATE USER 'BanquePHP'@'localhost';
GRANT ALL PRIVILEGES ON mabanque.* TO 'BanquePHP'@'localhost' IDENTIFIED BY 'banque76';

CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    pseudo NVARCHAR(10) NOT NULL UNIQUE,
    first_name TEXT(25) NOT NULL,
    mail NVARCHAR(255) NOT NULL,
    pwd VARCHAR(50) NOT NULL,
    registered DATE,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS accounts (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    account_name VARCHAR(50),
    account_creation DATE,
    account_amount INT,
    account_number VARCHAR(50),
    account_user_id INT UNSIGNED,
    PRIMARY KEY (id),
    FOREIGN KEY (account_user_id) REFERENCES user(id)
);

-- CREATE TABLE IF NOT EXISTS account_details (
--     id INT UNSIGNED NOT NULL AUTO_INCREMENT,
--     account_date DATE,
--     account_number VARCHAR(50),
--     lastOp_description VARCHAR(50) NULL,
--     account_id INT UNSIGNED,
--     PRIMARY KEY (id),
--     FOREIGN KEY (account_id) REFERENCES accounts(id)
-- );

CREATE TABLE IF NOT EXISTS account_details (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    op_date DATE,
    operation TEXT(10),
    op_amount INT UNSIGNED,
    op_text VARCHAR(100),
    account_id INT UNSIGNED,
    PRIMARY KEY (id),
    FOREIGN KEY (account_id) REFERENCES account_details(id)
);

-- INSERT INTO user (user_mail, user_pw, login_creation)
-- VALUES ('xxxx.xxxx@hotmail.fr','azprlsjeLAKOZ569','2021-10-15'),
--        ('xxxx.xxxx@gmail.com','slkfldfjma5412','2021-10-15'),
--        ('occelli.hugo@hotmail.fr','123456','2021-12-15');

-- INSERT INTO accounts (account_name, account_amount, account_user_id)
-- VALUES ('La Poste',4500,1),
--        ('La Banque Française',3700,1);

-- INSERT INTO account_details (account_date, account_number, lastOp_description, account_id)
-- VALUES ('2021-10-15','Nr°151564643 fr01','dépôt 50€',1),('2021-10-15','Nr°151564640 fr02','retrait 70€',2);

INSERT INTO user (pseudo, first_name, mail, pwd, registered)
VALUES ('test','John','john.doe@hotmail.fr','helloworld112' , '2022-01-08');

INSERT INTO accounts (account_name, account_creation, account_amount, account_number, account_user_id)
VALUES ('La Poste', '2022-01-08', 3500, "Nr°350042116 fr14a", 1),
    ('LCL', '2022-01-08', 3800, "Nr°198042116", 1),
    ('Le Crédit mutuel', '2022-01-08', -600, "Nr°65672116", 1);

INSERT INTO account_details (op_date, operation, op_amount, op_text, account_id)
VALUES ('2022-01-08','retrait', 50, 'pour les courses', 1),
    ('2022-01-08', 'dépôt', 100, 'facture à M. Lapaye', 1),
    ('2022-01-08', 'retrait', 80, 'jeu PC', 2),
    ('2022-01-08', 'retrait', 70, 'casque audio PC', 2);
