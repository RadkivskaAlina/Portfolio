CREATE TABLE `review` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `text` TEXT NOT NULL,
    `phone_id` INT(11),
    `site_id` INT(11),
    `user_id` INT(11) NOT NULL,
    `date_added` DATE NOT NULL,
    `category_id` INT(11),
    PRIMARY KEY (`id`)
)

CREATE TABLE `phone` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `phone` VARCHAR(255),
    `mentions_counter` INT(11) DEFAULT 0,
    `searches_counter` INT(11) DEFAULT 0,
    PRIMARY KEY (`id`)
)

CREATE TABLE `site` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `url` VARCHAR(255),
    `mentions_counter` INT(11) DEFAULT 0,
    `searches_counter` INT(11) DEFAULT 0,
    PRIMARY KEY (`id`)
)

CREATE TABLE `user` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255),
    `ip` VARCHAR(255),
    `reviews_counter` INT(11) DEFAULT 0,
    `date_added` DATE NOT NULL,
    PRIMARY KEY (`id`)
)

CREATE TABLE `user_admin` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `login` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
)

INSERT INTO review (text, phone_id, user_id, date_added)
VALUES
    ("текст пробного комментария1", "1", "1", "2020-07-04"),
    ("текст пробного комментария2", "1", "1", "2020-07-04"),
    ("текст пробного комментария3", "1", "1", "2020-07-04"),
    ("текст пробного комментария4", "2", "1", "2020-07-04"),
    ("текст пробного комментария5", "2", "1", "2020-07-04"),
    ("текст пробного комментария6", "2", "1", "2020-07-04"),
    ("текст пробного комментария7", "1", "1", "2020-07-04"),
    ("текст пробного комментария8", "1", "1", "2020-07-04"),
    ("текст пробного комментария9", "1", "1", "2020-07-04"),
    ("текст пробного комментария10", "3", "1", "2020-07-04"),
    ("текст пробного комментария11", "3", "1", "2020-07-04"),
    ("текст пробного комментария12", "3", "1", "2020-07-04"),
    ("текст пробного комментария13", "1", "1", "2020-07-04");

INSERT INTO phone (phone, mentions_counter, searches_counter)
VALUES
    ("098-987-98-90", "15", "5"),
    ("098-987-98-80", "10", "15"),
    ("098-987-98-70", "5", "0");

INSERT INTO user (name, reviews_counter, date_added)
VALUES
    ("Anton1", "5", "2020-07-04"),
    ("Anton2", "1", "2020-07-04"),
    ("Anton3", "2", "2020-07-04"),
    ("Anton4", "7", "2020-07-04");

ALTER TABLE phone ADD COLUMN `title` TEXT NOT NULL;
ALTER TABLE site ADD COLUMN `title` TEXT NOT NULL;
































-- CREATE TABLE `category` (
--     `id` INT(11) NOT NULL AUTO_INCREMENT,
--     `title` VARCHAR(255),
--     PRIMARY KEY (`id`)
-- )