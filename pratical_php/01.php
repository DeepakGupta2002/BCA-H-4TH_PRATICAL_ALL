<?php

// Get PHP version
$phpVersion = phpversion();

// Get PHP configuration information
$phpConfig = phpinfo();

// Display PHP version
echo "PHP Version: $phpVersion <br><br>";

// Display PHP configuration information
echo "PHP Configuration Information: <br>";
echo $phpConfig;

?>
