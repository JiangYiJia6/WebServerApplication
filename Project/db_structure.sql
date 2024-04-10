-- Check if the database "users" exists. If not, create it.
CREATE DATABASE IF NOT EXISTS users;
USE users;

-- Create the "visitors" table if it does not exist.
CREATE TABLE IF NOT EXISTS visitors (
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(35) NOT NULL,
    lastname VARCHAR(35) NOT NULL,
    email VARCHAR(35) NOT NULL,
    password VARCHAR(35) NOT NULL
);

-- Insert sample data into the "visitors" table.
INSERT INTO visitors (firstname, lastname, email, password)
VALUES
('Karim','Farag','Karim@mail.com','Admin'),
('Jonas', 'Shoukri','Jonas@mail.com','Admin'),
('Serafino','Pampena','Serafino@mail.com','Admin'),
('Bruno','Silva','Bruno@mail.com','Admin'),
('Yijia','Jiang','Yijia@mail.com','Admin');


Select * FROM visitors;