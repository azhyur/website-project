CREATE TABLE IF NOT EXISTS training_results {
    user_id INT NOT NULL,
    training_id INT NOT NULL,
    answered_count TINYINT NOT NULL,
    correct_count TINYINT NOT NULL,
    result_date DATETIME NOT NULL
};
