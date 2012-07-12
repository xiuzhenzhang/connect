/*
 * connect.php
 */
 
<?php

$dbconn = mysql_connect('yallara.cs.rmit.edu.au:54544', 'winestore', 'abc123');

if (!$dbconn) {
  echo "Could not connect to mysql on yallara \n";
  exit;
}

echo "Connected to mysql on yallara\n";

if (!mysql_select_db("winestore", $dbconn)) {
  echo "Could not use database winestore\n";
  echo mysql_error() . "\n";
  exit;
}
echo "Connected to database winestore\n";
mysql_close($dbconn);
?>
