<?php

if (isset($_POST['submit'])) {
    require '../config/db.config.php';

    $error = 0;
    $score = 0;

    $age              = $_POST['age'];
    $sex              = $_POST['sex'];
    $body_temperature = $_POST['body-temperature'];
    $symptoms_1       = $_POST['symptoms1'];
    $symptoms_2       = $_POST['symptoms2'];

    // Body Temperature Score
    if (!empty($age) && !empty($sex) && !empty($body_temperature)) {
        if ($body_temperature > 99.5 || $body_temperature > 100.9) {
            $score += 2;
        }
    } else {
        ++$error;
    }

    // First Step Symptoms Score
    if (!empty($symptoms_1)) {
        $score += 3;
        if (count($symptoms_1) > 1) {
            $score += count($symptoms_1) - 1;
        }
    }

    // Second Step Symptoms Score
    if (!empty($symptoms_2)) {
        $score += count($symptoms_2) * 2;
    }

    // Checking Score & Redirecting to Result Page
    if ($score < 5) {
        if ($error) {
            echo 'Error';
        } else {
            $result = 'Negative';
            $sql    = "INSERT INTO records (age, sex, temperature, date_t, score, result) VALUES ('$age', '$sex', '$body_temperature', curdate(), '$score', '$result')";

            if (mysqli_query($conn, $sql)) {
                header('Location: ../negative-result.php');
            } else {
                echo 'Error: ' . mysqli_error($conn);
            }
        }
    } elseif ($score === 5) {
        if ($error) {
            echo 'Error';
        } else {
            $result = 'Positive';
            $sql    = "INSERT INTO records (age, sex, temperature, date_t, score, result) VALUES ('$age', '$sex', '$body_temperature', curdate(), '$score', '$result')";

            if (mysqli_query($conn, $sql)) {
                header('Location: ../positive-level1-result.php');
            } else {
                echo 'Error: ' . mysqli_error($conn);
            }
        }
    } elseif ($score > 5 && $score < 7) {
        if ($error) {
            echo 'Error';
        } else {
            $result = 'Positive';
            $sql    = "INSERT INTO records (age, sex, temperature, date_t, score, result) VALUES ('$age', '$sex', '$body_temperature', curdate(), '$score', '$result')";

            if (mysqli_query($conn, $sql)) {
                header('Location: ../positive-level2-result.php');
            } else {
                echo 'Error: ' . mysqli_error($conn);
            }
        }
    } else {
        if ($error) {
            echo 'Error';
        } else {
            $result = 'Positive';
            $sql    = "INSERT INTO records (age, sex, temperature, date_t, score, result) VALUES ('$age', '$sex', '$body_temperature', curdate(), '$score', '$result')";

            if (mysqli_query($conn, $sql)) {
                header('Location: ../positive-level3-result.php');
            } else {
                echo 'Error: ' . mysqli_error($conn);
            }
        }
    }
}
