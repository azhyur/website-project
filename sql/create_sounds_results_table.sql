CREATE TABLE IF NOT EXISTS sound_results (
    training_results_id INT NOT NULL,
    sound_id INT NOT NULL,
    correct TINYINT NOT NULL,
    result_date DATETIME NOT NULL
);
