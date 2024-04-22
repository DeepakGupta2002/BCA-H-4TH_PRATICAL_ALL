<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Name Display</title>
</head>
<body>
    <h2>Enter Your Name</h2>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    // Check if form is submitted and name is set
    if (isset($_POST['name'])) {
        // Get the submitted name
        $name = $_POST['name'];
        // Display the name using PHP echo statement
        echo "<h2>Hello, $name!</h2>";
    }
    ?>
</body>
</html>
