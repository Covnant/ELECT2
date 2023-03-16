-- Create Schema with atleast 6 tables

CREATE SCHEMA fitnessdb;
USE fitnessdb;

-- Table for users info
CREATE TABLE tbl_user(
	user_id INT NOT NULL AUTO_INCREMENT,
    profile_img BLOB NULL,
    user_password VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    objective VARCHAR(50) NOT NULL,
    
    PRIMARY KEY(user_id)
	
); 

-- tables for exercise
CREATE TABLE tbl_exercise(
exercise_id INT NOT NULL AUTO_INCREMENT,
exercise_name VARCHAR(50) NOT NULL,
Category VARCHAR(50) NOT NULL,
exercise_desc VARCHAR(50) NULL,


PRIMARY KEY(exercise_id)

);

-- table for program 
CREATE TABLE tbl_program(
program_id INT NOT NULL AUTO_INCREMENT,
program_name VARCHAR(50) NOT NULL,
program_desc VARCHAR(50) NULL,

PRIMARY KEY (program_id)

);

-- table for exercise detail containing the details about an exercise. 
-- Acts as a bridge between program and exercise
CREATE TABLE tbl_exercise_detail(
exercise_detail_id INT NOT NULL AUTO_INCREMENT,
program_id INT NOT NULL,
exercise_id INT NOT NULL,
sets INT NOT NULL,
reps INT NOT NULL,
weights DECIMAL NOT NULL, 

PRIMARY KEY(exercise_detail_id),
INDEX fk_program_id_idx (program_id ASC) VISIBLE,
  INDEX fk_exercise_id_idx (exercise_id ASC) VISIBLE,
  CONSTRAINT fk_program_id
    FOREIGN KEY (program_id)
    REFERENCES tbl_program (program_id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT,
  CONSTRAINT fk_exercise_id
    FOREIGN KEY (exercise_id)
    REFERENCES tbl_exercise (exercise_id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT


);

-- table for log linked to user as it is personal data on the user
CREATE TABLE tbl_log(
log_id INT NOT NULL AUTO_INCREMENT,
user_id INT NOT NULL,
log_date DATE NOT NULL,
time_started DATETIME NOT NULL,
time_ended DATETIME NOT NULL,

PRIMARY KEY(log_id),
INDEX fk_user_id_idx (user_id ASC) VISIBLE,
  CONSTRAINT fk_user_id
    FOREIGN KEY (user_id)
    REFERENCES tbl_user(user_id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
);

-- bridge table for log and exercise, containing details about the 
-- exercise done by the user with reference to existing exercises
CREATE TABLE tbl_log_detail(
log_detail_id INT NOT NULL AUTO_INCREMENT, 
log_id INT NOT NULL,
exercise_id INT NOT NULL,
sets INT NOT NULL,
reps INT NOT NULL,
weights DECIMAL NOT NULL, 

PRIMARY KEY(log_detail_id),
  INDEX fk_log_id_idx (log_id ASC) VISIBLE,
  INDEX fk_exercise_id_idx (exercise_id ASC) VISIBLE,
  CONSTRAINT fk_log_id
    FOREIGN KEY (log_id)
    REFERENCES tbl_log (log_id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT,
  CONSTRAINT fk_exercise_id_logdet
    FOREIGN KEY (exercise_id)
    REFERENCES tbl_exercise (exercise_id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
);
