DROP DATABASE IF EXISTS mabanque;

CREATE DATABASE mabanque CHARACTER SET 'utf8';

CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT,
    user_mail VARCHAR(50),
    user_pw VARCHAR(50),
    login_creation DATE,
    firstname TEXT,
    lastname TEXT,

    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS account (
    id INT AUTO_INCREMENT,
    account_name VARCHAR(50),
    account_number VARCHAR(50),
    account_amount INT,
    account_user_id INT,
    PRIMARY KEY (id)
);

ALTER TABLE account
ADD CONSTRAINT fk_user_id FOREIGN KEY (account_user_id) REFERENCES user(id);

CREATE TABLE IF NOT EXISTS last_operation (
    id INT UNSIGNED AUTO_INCREMENT,
    lastOp_amount INT,
    lastOp_description TEXT(250),
    account_id INT,
    PRIMARY KEY (id)
);

ALTER TABLE last_operation
ADD CONSTRAINT fk_account_id FOREIGN KEY (account_id) REFERENCES account(id);

INSERT INTO user (user_mail, user_pw, login_creation, firstname, lastname)
VALUES ('xxxx.xxxx@hotmail.fr','azprlsjeLAKOZ569','2021-10-15','Yash','Yosh'),
       ('xxxx.xxxx@gmail.com','slkfldfjma5412','2021-10-15','Yosh','Yash');

INSERT INTO account (account_name, account_number, account_amount)
VALUES ('La Poste','Nr°:15324546',4500),
       ('La Banque Française','Nr°:69537845',3700);

INSERT INTO last_operation (lastOp_amount, lastOp_description)
VALUES (90,'dépôt'),(150,'retrait');
