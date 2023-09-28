create database if not exists api_rest_laravel;
use api_rest_laravel;

CREATE TABLE users(
    id int(255) auto_increment NOT NULL,
    name varchar(50),
    surname varchar(100),
    role varchar(20),
    email varchar(255) NOT NULL,
    password varchar(255)
    description text,
    image varchar(255),
    created_at datetime DEFAULT NULL,
    update_at datetime DEFAULT NULL,
    remember_token varchar(255),
    CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE-InnoDb;