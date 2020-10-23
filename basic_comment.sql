CREATE DATABASE db_comment CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE db_comment;
CREATE TABLE tbl_comment(
    id int(11) not null auto_increment PRIMARY KEY,
    name VARCHAR(50) not null,
    cimment text not null,
    comment_itme TIMESTAMP not null default CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT charset=utf8;