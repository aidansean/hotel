<?php

$nWeeks = 12 ;
if(isset($_REQUEST['nWeeks'])){
  if(is_numeric($_REQUEST['nWeeks'])){
    if($_GET['nWeeks']>=1) $nWeeks = floor($_REQUEST['nWeeks']) ;
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

$statusName = array() ;
$statusName[0] = 'Available' ;
$statusName[1] = 'Unavailable' ;
$statusName[2] = 'Requested' ;
$statusName[3] = 'Booked' ;
$statusName[4] = 'Rejected' ;

function daysSinceToday($day,$month,$year){
  $thisDay   = 0+date('j') ;
  $thisMonth = 0+date('n') ;
  $thisYear  = 0+date('Y') ;
  $daysPerMonth = array() ;
  $daysPerMonth[1]  = 31 ;
  $daysPerMonth[2]  = 28 ;
  $daysPerMonth[3]  = 31 ;
  $daysPerMonth[4]  = 30 ;
  $daysPerMonth[5]  = 31 ;
  $daysPerMonth[6]  = 30 ;
  $daysPerMonth[7]  = 31 ;
  $daysPerMonth[8]  = 31 ;
  $daysPerMonth[9]  = 30 ;
  $daysPerMonth[10] = 31 ;
  $daysPerMonth[11] = 30 ;
  $daysPerMonth[12] = 31 ;
  $days = 0 ;
  while(true){
    if($day==$thisDay AND $month==$thisMonth AND $year==$thisYear) break ;
    $day-- ;
    if($day<1){
      $month-- ;
      if($month<1){
        $month = 12 ;
        $year-- ;
      }
      $day = $daysPerMonth[$month] ;
    }
    $days++ ;    
    if($year<$thisYear){
      $days = -1000 ;
      break ;
    }
  }
  return $days ;
}

?>