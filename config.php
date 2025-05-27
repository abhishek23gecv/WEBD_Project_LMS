<?php 
// DB credentials.
define('DB_HOST','sql211.infinityfree.com');
define('DB_USER','if0_38946321');
define('DB_PASS','SpedXn1iFNSZvAO');
define('DB_NAME','if0_38946321_library');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>