CREATE TABLE reviews (
    id INT(6) UNSIGNED AUTo_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    reviews TEXT NOT NULL,
    rating INT(1) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);