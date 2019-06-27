CREATE DATABASE IF NOT EXISTS laravel_master;
USE laravel_master;

CREATE TABLE users(
id 				int(255) auto_increment not null,
role			varchar(20),
name			varchar(10),
surname			varchar(200),
nick			varchar(100),
email			varchar(255),
password		varchar(255),
image			varchar(255),
created_at		datetime,
updated_at		datetime,
remember_token	varchar(255),
CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE images(
id 				int(255) auto_increment not null,
user_id			int(255),
image_path		varchar(255),
description		text,
created_at		datetime,
updated_at		datetime,
CONSTRAINT pk_images PRIMARY KEY(id),
CONSTRAINT fk_images_users FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb;

CREATE TABLE comments(
id 				int(255) auto_increment not null,
user_id			int(255),
images_id		int(255),
content			text,
created_at		datetime,
updated_at		datetime,
CONSTRAINT pk_comments PRIMARY KEY(id),
CONSTRAINT fk_comments_users FOREIGN KEY(user_id) REFERENCES users(id),
CONSTRAINT fk_comments_images FOREIGN KEY(images_id) REFERENCES images(id)
)ENGINE=InnoDb;

CREATE TABLE likes(
id 				int(255) auto_increment not null,
user_id			int(255),
images_id		int(255),
created_at		datetime,
updated_at		datetime,
CONSTRAINT pk_likes PRIMARY KEY(id),
CONSTRAINT fk_likes_users FOREIGN KEY(user_id) REFERENCES users(id),
CONSTRAINT fk_likes_images FOREIGN KEY(images_id) REFERENCES images(id)
)ENGINE=InnoDb;

INSERT INTO users VALUES (null, 'user', 'Victor', 'Robles', 'Victitor', 'victor@victor.com', 'pass', null, CURTIME(), CURTIME(), null)

INSERT INTO images VALUES (null, 1, 'test.jpg', 'Descripción de prueba 1', CURTIME(), CURTIME());
INSERT INTO images VALUES (null, 1, 'playa.jpg', 'Descripción de prueba 2', CURTIME(), CURTIME());
INSERT INTO images VALUES (null, 1, 'arena.jpg', 'Descripción de prueba 3', CURTIME(), CURTIME());
INSERT INTO images VALUES (null, 3, 'familia.jpg', 'Descripción de prueba 4', CURTIME(), CURTIME());

INSERT INTO comments VALUES (null, 1, 4, 'Buena foto de familia', CURTIME(), CURTIME());
INSERT INTO comments VALUES (null, 2, 1, 'Buena foto de playa', CURTIME(), CURTIME());
INSERT INTO comments VALUES (null, 2, 4, 'Que bueno!', CURTIME(), CURTIME());

INSERT INTO likes VALUES (null, 1, 4, CURTIME(), CURTIME());
INSERT INTO likes VALUES (null, 2, 4, CURTIME(), CURTIME());
INSERT INTO likes VALUES (null, 3, 1, CURTIME(), CURTIME());
INSERT INTO likes VALUES (null, 3, 2, CURTIME(), CURTIME());
INSERT INTO likes VALUES (null, 2, 1, CURTIME(), CURTIME());
