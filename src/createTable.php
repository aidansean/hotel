<?php

$mySQL_connection = mysql_connect('localhost', $mysql_username, $mysql_password) or die('Could not connect: ' . mysql_error()) ;
mysql_select_db($mysql_database) or die('Could not select database') ;
//$query = 'CREATE TABLE ' . $mysql_prefix . 'hotel(day INT,month INT,year INT,status INT,name VARCHAR(255), comments VARCHAR(5000),time TIMESTAMP DEFAULT NOW())' ;
//mysql_query($query) or die(mysql_error()) ;

?>