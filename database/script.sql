CREATE DATABASE php_mysql_crud_alen_07dic23;

USE php_mysql_crud_alen_07dic23;

CREATE TABLE task(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

ALTER TABLE task ADD image LONGBLOB;

DESCRIBE task;