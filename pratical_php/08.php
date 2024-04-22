<?php

try {
    // Code that may throw exceptions
    $randomNumber = rand(1, 3);
    
    if ($randomNumber == 1) {
        throw new InvalidArgumentException("Invalid argument exception occurred");
    } elseif ($randomNumber == 2) {
        throw new OutOfRangeException("Out of range exception occurred");
    } else {
        throw new RuntimeException("Runtime exception occurred");
    }
} catch (InvalidArgumentException $e) {
    // Catch and handle InvalidArgumentException
    echo "Caught InvalidArgumentException: " . $e->getMessage() . "<br>";
} catch (OutOfRangeException $e) {
    // Catch and handle OutOfRangeException
    echo "Caught OutOfRangeException: " . $e->getMessage() . "<br>";
} catch (RuntimeException $e) {
    // Catch and handle RuntimeException
    echo "Caught RuntimeException: " . $e->getMessage() . "<br>";
} catch (Exception $e) {
    // Catch any other type of exception
    echo "Caught Exception: " . $e->getMessage() . "<br>";
}

?>
