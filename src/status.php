<?php

$mySQL_connection = mysql_connect('localhost', $mysql_username, $mysql_password) or die('Could not connect: ' . mysql_error()) ;
mysql_select_db($mysql_database) or die('Could not select database') ;

include_once('common.php') ;

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
$status = array() ;
for($i=0 ; $i<7*$nWeeks ; $i++){
  if($i<-$start){ $status[$i] = 1 ; }
  else          { $status[$i] = 0 ; }
}

$query = 'SELECT * FROM ' . $mysql_prefix . 'hotel' ;
$resource = mysql_query($query) ;
$bookings = array() ;
while($row = mysql_fetch_assoc($resource)){
  $nightId = daysSinceToday($row['day'],$row['month'],$row['year'])-$start ;
  $thisStatus = $row['status'] ;
  if($thisStatus==2) $status[$nightId] = 2 ;
  if($thisStatus==3) $status[$nightId] = 3 ;
  if($thisStatus==1) $status[$nightId] = 1 ;
}
for($i=0 ; $i<7*$nWeeks ; $i++){
  if($i<-$start){ echo 'status[' , $i , '] = ' , $status[$i] , ' ;' , PHP_EOL ; }
  else          { echo 'status[' , $i , '] = ' , $status[$i] , ' ;' , PHP_EOL ; }
}

?>