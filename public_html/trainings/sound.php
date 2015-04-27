<?php
    require '../../config/database.php';

    // verify POST arguments
    if($soundId = intval($_POST['soundId']) && $trainingResultId = intval($_POST['trainingResultId'])) {
        $dbCon = new dbController();

        // make sure records exists for training
        $training = $dbCon->executeSelect("
            SELECT *
            FROM training_results
            WHERE id = " . $trainingResultId
        );

        // make sure sound exists
        $sound = $dbCon->executeSelect("
            SELECT *
            FROM trainings_sounds
            LEFT JOIN sounds ON (trainings_sounds.sound_id = sounds.id) 
            WHERE training_id = " . $training[0]['training_id'] . " 
            AND sound_id = " . $soundId
        );
        
        $result = $_POST['result'] == "true" ? 1 : 0;

        $insertResult = $dbCon->executeInsert("
            INSERT INTO sound_results(training_results_id, sound_id, correct, result_date)
            VALUES(" . $trainingResultId . ", " . $soundId . ", " . $result . ", now())
        ");

        $updateResult = $dbCon->executeInsert("
            UPDATE training_results SET answered_count = answered_count + 1, correct_count = correct_count + " . $result . "
            WHERE id = " . $trainingResultId
        );

    } else {
        echo "fail";
    }
    
    echo "success";

?>
