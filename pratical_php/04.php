<?php

// Initial character variable
$d = 'A00';

// Loop to print numbers from A01 to A05
for ($i = 1; $i <= 5; $i++) {
    // Convert character variable to numeric value
    $numericPart = intval(substr($d, 1)) + $i;
    // Format the result back to the desired format (Axx)
    $result = $d[0] . sprintf("%02d", $numericPart);
    // Print the result
    echo $result . "\n";
}

?>
