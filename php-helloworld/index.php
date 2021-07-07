<?php
//print "Hello, World! php version is " . PHP_VERSION . "\n";

// Get IP address and print
$host= gethostname();
$ip = gethostbyname($host);

echo "POD IP Address is: $ip " . "\n";

 
// Get Hostname and print

echo "POD Hostname is: $host " . "\n";
//echo 'User IP Address - '. $_SERVER['REMOTE_ADDR'] . "\n";
?>
