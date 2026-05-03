DROP DATABASE IF EXISTS ascension;
CREATE DATABASE ascension;
USE ascension;

CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(32) NOT NULL,
    email VARCHAR(128) NOT NULL,
    password VARCHAR(60) NOT NULL,
    is_admin BOOLEAN DEFAULT FALSE,
    date_joined DATETIME NOT NULL DEFAULT NOW()
);

CREATE TABLE comments (
    comment_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    character_name VARCHAR(255) NOT NULL,
    battlenet_id VARCHAR(255) NOT NULL,
    class VARCHAR(50) NOT NULL,
    specialization VARCHAR(50) NOT NULL,
    additional_info LONGTEXT,
    admin_reply LONGTEXT DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);
