<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $course_id = $_POST["course_id"];
    $title = $_POST["title"];
    $credit_points = $_POST["credit_points"];
    $career = $_POST["career"];

    function validateCourseID($course_id)
    {
        return preg_match('/^COSC\d{4}$/', $course_id);
    }

    function validateTitle($title)
    {
        return preg_match('/^[A-Z][A-Za-z0-9 ]*$/', $title);
    }

    function validateCreditPoints($credit_points)
    {
        return is_numeric($credit_points) && $credit_points >= 1 && $credit_points <= 12 && floor($credit_points) == $credit_points;
    }

    function validateCareer($career)
    {
        return $career === "Undergraduate" || $career === "Postgraduate";
    }

    $errors = [];

    if (!validateCourseID($course_id)) {
        $errors[] = "Invalid Course ID. It must start with COSC followed by 4 digits.";
    }

    if (!validateTitle($title)) {
        $errors[] = "Invalid Title. It must start with an uppercase letter and contain only letters, numbers, and spaces.";
    }

    if (!validateCreditPoints($credit_points)) {
        $errors[] = "Invalid Credit Points. It must be a positive whole number between 1 and 12. No decimal.";
    }

    if (!validateCareer($career)) {
        $errors[] = "Invalid Career. It must be either 'Undergraduate' or 'Postgraduate'.";
    }

    // Error handling
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Goes to index after submitting
        header("Location: index.php");
        exit();
    }
} else {
    echo "Form not submitted.";
}