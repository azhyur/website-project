CREATE TABLE IF NOT EXISTS training_results (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    training_id INT NOT NULL,
    answered_count TINYINT NOT NULL,
    correct_count TINYINT NOT NULL,
    start_datetime DATETIME NOT NULL,
    finish_datetime DATETIME NOT NULL
);
