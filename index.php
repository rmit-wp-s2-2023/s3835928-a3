<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once("functions.php") ?>
        <title>Assignment 3</title>
        <link rel="stylesheet" href="a3.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    </head>

</html>

<body>

    <?php
    $data = json_decode($response, true);
    foreach ($data as $items) {
        echo "Staff ID: " . $items['staffID'] . "<br>";
        echo "First Name: " . $items['firstName'] . "<br>";
        echo "Last Name: " . $items['lastName'] . "<br>";
        echo "Email: " . $items['email'] . "<br><br>";
    }
    ?>


    <?php require_once("sitemap.php") ?>
</body>