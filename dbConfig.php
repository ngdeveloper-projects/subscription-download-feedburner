<?php
$dbhost = 'localhost';
$dbuser = 'USER_NAME_OF_DB';
$dbpass = 'DB_PASSWORD';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
$item_per_page = 100;
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('DB_NAME');
?>