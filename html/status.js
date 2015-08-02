<?php

$mySQL_connection = mysql_connect('localhost', $mysql_username, $mysql_password) or die('Could not connect: ' . mysql_error()) ;
mysql_select_db($mysql_database) or die('Could not select database') ;

$nWeeks = 12 ;
if(isset($_GET['nWeeks'])){
  if(is_numeric($_GET['nWeeks'])){
    if($_GET['nWeeks']>=1) $nWeeks = floor($_GET['nWeeks']) ;
  }
}

$start = 0 ;
switch(date('D')){
  case 'Mon': $start = -7 ; break ;
  case 'Tue': $start = -1 ; break ;
  case 'Wed': $start = -2 ; break ;
  case 'Thu': $start = -3 ; break ;
  case 'Fri': $start = -4 ; break ;
  case 'Sat': $start = -5 ; break ;
  case 'Sun': $start = -6 ; break ;
}

echo 'var status = new Array() ;' , PHP_EOL ;
for($i=0 ; $i<7*$nWeeks ; $i++){
  if($i<-$start){ echo 'status[' , $i , '] = 0 ;' , PHP_EOL ; }
  else          { echo 'status[' , $i , '] = 1 ;' , PHP_EOL ; }
}

$query = 'SELECT * FROM ' . $mysql_prefix . 'hotel' ;
$resource = mysql_query($query) ;
$bookings = array() ;
while($row = mysql_fetch_assoc($resource)){
  $nightId = daysSinceToday($row['day'],$row['month'],$row['year'])-$start ;
  $status = $row['status'] ;
}

?>