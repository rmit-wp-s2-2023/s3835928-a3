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
    <div class="page">
        <h3>Staff Members</h3>
        <?php
        $data = json_decode($response, true);
        foreach ($data as $items) {
            echo '<div class="staff">';
            echo '<h2>' . $items['firstName'] . ' ' . $items['lastName'] . '</h2>';
            echo '<p>Staff ID: ' . $items['staffID'] . '</p>';
            echo '<p>Email: ' . $items['email'] . '</p>';
            echo '</div>';
        }
        ?>
    </div>

    <?php require_once("sitemap.php") ?>
</body>