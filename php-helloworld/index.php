<?php
print "Hello, World! php version is " . PHP_VERSION . "\n";

$host= gethostname();
$ip = gethostbyname($host);

echo "Server IP Address is: $ip " . "\n";
?>
