<?php

// Define the maximum number for the multiplication table
$max = 6;

// Print the multiplication table headers
echo "<h2>Multiplication Table up to $max * $max</h2>";
echo "<table border='1'>";
echo "<tr><th>&nbsp;</th>";

// Print column headers
for ($i = 1; $i <= $max; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

// Print table rows
for ($i = 1; $i <= $max; $i++) {
    echo "<tr>";
    echo "<th>$i</th>"; // Row header
    // Print the multiplication results for each column
    for ($j = 1; $j <= $max; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
