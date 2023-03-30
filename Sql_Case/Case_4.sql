-- There will atleast be 3 to 4 tables for the said scenario
-- Creation of schema

CREATE SCHEMA business;
USE business; 

-- table for department names
CREATE TABLE department(
department_id INT NOT NULL AUTO_INCREMENT,
department_name VARCHAR(45) NOT NULL,

PRIMARY KEY(department_id)
);

-- table for employees' personal info and job info. 
-- department id refers to what department the employee is on the department table
CREATE TABLE employees(
employee_id INT NOT NULL AUTO_INCREMENT,
department_id INT NOT NULL,
employee_name VARCHAR(45) NOT NULL,
email VARCHAR(45) NOT NULL,
contact_number INT NOT NULL,
job_title VARCHAR(45) NOT NULL,
daily_rate INT NOT NULL,

PRIMARY KEY(employee_id),
INDEX fk_department_id_idx (department_id ASC) VISIBLE,
  CONSTRAINT fk_department_id
    FOREIGN KEY (department_id)
    REFERENCES department(department_id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
); 
-- table for monitoring employee's performance . This can also be just part of employee table.
CREATE TABLE performance_record (

performance_id INT NOT NULL AUTO_INCREMENT,
employee_id INT NOT NULL,
performance_date DATE NOT NULL,
remarks VARCHAR(100) NULL,

PRIMARY KEY(performance_id),
INDEX fk_employee_id_idx (employee_id ASC) VISIBLE,
  CONSTRAINT fk_employee_id_performance
    FOREIGN KEY (employee_id)
    REFERENCES employees(employee_id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
);

-- table for storing leave history of each employee 
CREATE TABLE leave_history(

leave_id INT NOT NULL AUTO_INCREMENT,
employee_id INT NOT NULL,
date_start DATE NOT NULL,
date_end DATE NOT NULL,

PRIMARY KEY(leave_id),
INDEX fk_employee_id_idx (employee_id ASC) VISIBLE,
  CONSTRAINT fk_employee_id_history
    FOREIGN KEY (employee_id)
    REFERENCES employees(employee_id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
);
