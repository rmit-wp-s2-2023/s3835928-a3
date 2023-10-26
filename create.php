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
    <div class="form-container">
        <form method="post" action="formhandler.php">
            <label for="course_id">Course ID:</label>
            <input type="text" id="course_id" name="course_id"
                title="Course ID must start with COSC followed by 4 digits">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title"
                title="Title must start with an uppercase letter and contain only letters, numbers, and spaces">

            <label for="credit_points">Credit Points:</label>
            <input type="text" id="credit_points" name="credit_points"
                title="Credit Points must be a positive whole number between 1 and 12">

            <label for="career">Career:</label>
            <select id="career" name="career">
                <option value="Undergraduate">Undergraduate</option>
                <option value="Postgraduate">Postgraduate</option>
            </select>

            <input type="submit" value="Submit">
        </form>
    </div>


    <?php require_once("sitemap.php") ?>
</body>