CREATE TABLE tb_category (
	kat_id INT(11) NOT NULL AUTO_INCREMENT,
	kat_nama VARCHAR(100) NOT NULL,
	kat_text VARCHAR(100) DEFAULT NULL,
	PRIMARY KEY(kat_id)
);

CREATE TABLE tb_post (
	post_id INT(11) NOT NULL AUTO_INCREMENT,
	post_date DATE,
	post_slug VARCHAR(25) NOT NULL,
	post_title VARCHAR(100) NOT NULL,
	post_text TEXT DEFAULT NULL,
	kat_id INT(11) NOT NULL,
	PRIMARY KEY(post_id),
	FOREIGN KEY(kat_id) REFERENCES tb_category(kat_id)
);

CREATE TABLE tb_photos (
	photo_id INT(11) NOT NULL AUTO_INCREMENT,
	photo_date DATE,
	photo_title VARCHAR(100) NOT NULL,
	photo_text TEXT DEFAULT NULL,
	post_id INT(11) NOT NULL,
	PRIMARY KEY(photo_id),
	FOREIGN KEY(post_id) REFERENCES tb_post(post_id)
);

CREATE TABLE tb_album (
	album_id INT(11) NOT NULL AUTO_INCREMENT,
	album_nama VARCHAR(100) NOT NULL,
	album_text VARCHAR(100) NOT NULL,
	photo_id INT(11) NOT NULL,
	PRIMARY KEY(album_id),
	FOREIGN KEY(photo_id) REFERENCES tb_photos(photo_id)
);

CREATE TABLE tb_user (
	user_id INT(11) NOT NULL AUTO_INCREMENT,
	user_name VARCHAR(100) NOT NULL,
	user_password VARCHAR(256) NOT NULL,
	user_email VARCHAR(100) NOT NULL,
	user_nama_lengkap VARCHAR(100) NOT NULL,
	user_role CHAR(2) DEFAULT '2',
	PRIMARY KEY(user_id),
	UNIQUE KEY(user_name, user_email)
);