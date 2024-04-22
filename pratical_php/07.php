<?php

try {
    // Code that may throw exceptions
    $result = 10 / 0; // This will throw a division by zero error
} catch (DivisionByZeroError $e) {
    // Catch the specific DivisionByZeroError exception
    echo "Caught DivisionByZeroError: " . $e->getMessage();
} catch (Exception $e) {
    // Catch any other type of exception
    echo "Caught Exception: " . $e->getMessage();
}

?>
