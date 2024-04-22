<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Values Table</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<?php
// Define an associative array with string keys and corresponding values
$stringValues = array(
    "Name" => "John Doe",
    "Age" => 30,
    "Country" => "USA",
    "Email" => "john.doe@example.com"
);
?>

<h2>String Values Table</h2>

<table>
    <tr>
        <th>String</th>
        <th>Value</th>
    </tr>
    <?php
    // Loop through the associative array and display each string and its corresponding value in a table row
    foreach ($stringValues as $string => $value) {
        echo "<tr>";
        echo "<td>$string</td>";
        echo "<td>$value</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
