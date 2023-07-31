<?php

$_ENV = getenv();
echo "<pre>";
echo "<h2>=========== _ENV ==============</h2>";
print_r($_ENV);
print_r($_ENV['TEMP']);
echo "<h2>=========== _SERVER ==============</h2>";
print_r($_SERVER);


?>