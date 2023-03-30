-- Create a schema with atleast 3 tables
CREATE SCHEMA webblog;
USE webblog;

-- Table for the list of users with their password and unique usernames as primary id
CREATE TABLE user_info(
username VARCHAR(45) NOT NULL UNIQUE,
email VARCHAR(45) NOT NULL,
user_password VARCHAR(45) NOT NULL,
user_profile BLOB NULL,

PRIMARY KEY(username)

);

-- table for list of blogs, referencing to the user's username as author name. 
CREATE TABLE blog_entry(
blog_id INT NOT NULL AUTO_INCREMENT,
author_name VARCHAR(45) NOT NULL,
blog_title VARCHAR(45) NOT NULL,
blog_body VARCHAR(100) NULL,
blog_date DATE NOT NULL,

PRIMARY KEY(blog_id),
INDEX fk_author_name_idx (author_name ASC) VISIBLE,
  CONSTRAINT fk_authorName_blog
    FOREIGN KEY (author_name)
    REFERENCES user_info(username)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
);

-- table for list of comments, referencing to the user's username as author name. 
-- It also references to the blog the comment is posted to through blog id. 
CREATE TABLE comment_entry(
comment_id INT NOT NULL AUTO_INCREMENT,
blog_id INT NOT NULL,
author_name VARCHAR(45) NOT NULL,
comment_body VARCHAR(100) NULL,
comment_date DATE NOT NULL,

PRIMARY KEY (comment_id),
INDEX fk_blog_id_idx (blog_id ASC) VISIBLE,
  INDEX fk_author_name_idx (author_name ASC) VISIBLE,
  CONSTRAINT fk_blog_id
    FOREIGN KEY (blog_id)
    REFERENCES blog_entry(blog_id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT,
  CONSTRAINT fk_author_name_comm
    FOREIGN KEY (author_name)
    REFERENCES user_info(username)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
);
