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
