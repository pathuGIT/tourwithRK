CREATE DATABASE IF NOT EXISTS tourwithRK;
USE tourwithRK;

CREATE TABLE IF NOT EXISTS feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    country VARCHAR(255) NOT NULL,
    feedback TEXT NOT NULL,
    image_path VARCHAR(255)
);
ALTER TABLE feedback
ADD CONSTRAINT unique_email UNIQUE (email);
ALTER TABLE feedback ADD COLUMN `check` TINYINT(1) NOT NULL DEFAULT 0;


CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    country VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    number_of_guests INT NOT NULL,
    date_of_arrival DATE NOT NULL,
    vehicle VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
ALTER TABLE bookings ADD COLUMN `status` VARCHAR(50) NOT NULL DEFAULT 'new';

CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO admin (username, password) VALUES ('adminUser', 'adminPass');
INSERT INTO admin (username, password) VALUES ('secondAdmin', 'secondPass');