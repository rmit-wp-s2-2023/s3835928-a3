<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Assignment 3</title>
        <link rel="stylesheet" href="a3.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    </head>

</html>

<body>

    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        echo "Displaying Staff ID for " . htmlspecialchars($id);
    } else {
        echo "Staff ID is not found.";
    }
    $ch = curl_init();

    $url = "https://titan.csit.rmit.edu.au/~e103884/wp/.services/.staff/?id=" . $id;

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $subject = curl_exec($ch);

    curl_close($ch);
    echo "<h2>Staff Details for " . $id . "</h2>";


    $course = json_decode($subject, true);
    if ($id === "e12345" || $id === "e54321" || $id === "e56789") {
        echo "Staff ID: " . $course["staffID"] . "<br>";
        echo "First Name: " . $course["firstName"] . "<br>";
        echo "Last Name: " . $course["lastName"] . "<br>";
        echo "Email: " . $course["email"] . "<br>";
        echo "Courses:<br>";
        foreach ($course["courses"] as $courses) {
            echo "<ul>";
            echo "<li>Course ID: " . $courses["courseID"] . "</li>";
            echo "<li>Title: " . $courses["title"] . "</li>";
            echo "<li>Credit Points: " . $courses["creditPoints"] . "</li>";
            echo "<li>Career: " . $courses["career"] . "</li>";
            echo "<li>Coordinator: " . $courses["coordinator"] . "</li><br>";
            echo "</ul>";
        }
    } else {
        echo "id is not found";
    }
    ?>
    <?php require_once("sitemap.php") ?>
</body>