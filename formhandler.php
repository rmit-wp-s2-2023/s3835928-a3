<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $course_id = $_POST["course_id"];
    $title = $_POST["title"];
    $credit_points = $_POST["credit_points"];
    $career = $_POST["career"];
} else {
    echo "Form not submitted.";
}