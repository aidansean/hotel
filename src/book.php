<?php

$mySQL_connection = mysql_connect('localhost', $mysql_username, $mysql_password) or die('Could not connect: ' . mysql_error()) ;
mysql_select_db($mysql_database) or die('Could not select database') ;

if(isset($_POST['username'])){
  if($_POST['username']==$admin_username AND $_POST['password']==$admin_password){
    $keys = array_keys($_POST) ;
    foreach($keys as $key){
      if(substr_count($key,'booking_')==1){
        $parts = explode('_',$key) ;
        $id = $parts[1] ;
        $query = 'UPDATE ' . $mysql_prefix . 'hotel SET status=' . $_POST[$key] . ' WHERE id=' . $id . ' LIMIT 1' ;
        mysql_query($query) or die(mysql_error()) ;
      }
    }
  }
}

if(isset($_POST['requestBooking'])){
  $name      = mysql_real_escape_string($_POST['name']     ) ;
  $reason    = mysql_real_escape_string($_POST['reason']   ) ;
  $comments  = mysql_real_escape_string($_POST['comments'] ) ;
  $startDate = explode(' ',mysql_real_escape_string($_POST['startDate'])) ;
  $endDate   = explode(' ',mysql_real_escape_string($_POST['endDate']  )) ;
  
  $monthNumber = array() ; $daysPerMonth = array() ;
  $monthNumber['Jan'] =  1 ; $daysPerMonth[1]  = 31 ;
  $monthNumber['Feb'] =  2 ; $daysPerMonth[2]  = 28 ;
  $monthNumber['Mar'] =  3 ; $daysPerMonth[3]  = 31 ;
  $monthNumber['Apr'] =  4 ; $daysPerMonth[4]  = 30 ;
  $monthNumber['May'] =  5 ; $daysPerMonth[5]  = 31 ;
  $monthNumber['Jun'] =  6 ; $daysPerMonth[6]  = 30 ;
  $monthNumber['Jul'] =  7 ; $daysPerMonth[7]  = 31 ;
  $monthNumber['Aug'] =  8 ; $daysPerMonth[8]  = 31 ;
  $monthNumber['Sep'] =  9 ; $daysPerMonth[9]  = 30 ;
  $monthNumber['Oct'] = 10 ; $daysPerMonth[10] = 31 ;
  $monthNumber['Nov'] = 11 ; $daysPerMonth[11] = 30 ;
  $monthNumber['Dec'] = 12 ; $daysPerMonth[12] = 31 ;
  
  $year     = $startDate[2] ;
  $month    = $monthNumber[$startDate[1]] ;
  $day      = $startDate[0] ;
  $yearEnd  = $endDate[2] ;
  $monthEnd = $monthNumber[$endDate[1]] ;
  $dayEnd   = $endDate[0] ;
  
  while(true){
    $query = 'INSERT INTO ' . $mysql_prefix . 'hotel (day,month,year,name,reason,comments,status) VALUES (' . $day .',' . $month . ',' . $year . ',"' . $name . '","' . $reason . '","' . $comments . '",2)' ;
    mysql_query($query) or die(mysql_error()) ;
    if($day==$dayEnd AND $month==$monthEnd AND $year==$yearEnd) break ;
    $day++ ;
    $dpm = $daysPerMonth[$month] ;
    if(($year%4)==0 AND ($year%400)!=0 AND $month==2) $dpm++ ; // Leap years
    if($day>$daysPerMonth[$month]){
      $day = 1 ;
      $month++ ;
      if($month>12){
        $month = 1 ;
        $year++ ;
      }
    }
  }
  $message = array() ;
  $message[] = 'Hotel booking information:' ;
  $message[] = 'Name: '       . $name       ;
  $message[] = 'Reason: '     . $reason     ;
  $message[] = 'Comments: '   . $comments   ;
  $message[] = 'Start date: ' . implode(' ',$startDate)  ;
  $message[] = 'End date: '   . implode(' ',$endDate  )  ;
  $headers = 'From: ' . $admin_email . "\r\n" . 'Reply-To: ' . $admin_email . "\r\n" . 'X-Mailer: PHP/' . phpversion();
  mail($admin_email,'L\'hotel d\'Aidan booking' ,implode(PHP_EOL,$message)) ;
}

$query = 'SELECT * FROM ' . $mysql_prefix . 'hotel' ;
$resource = mysql_query($query) ;
$bookings = array() ;
while($row = mysql_fetch_assoc($resource)){
  $nightId = daysSinceToday($row['day'],$row['month'],$row['year'])-$start ;
  $booking = $row ;
  $booking['nightId'] = $nightId ;
  $bookings[] = $booking ;
}

?>

<div id="bookingForm" onload="setStatus()">
  <form method="post" action="index.php">
  <input type="hidden" name="nWeeks" value="<?php echo $nWeeks ; ?>"/>
  <input type="hidden" name="page" value="book"/>
  <p>Please ensure you've filled in:</p>
  <ul>
    <li>your name</li>
    <li>the reason for your stay</li>
    <li>any comments that might help (eg "I would like a lift from the airport")</li>
  </ul>
  <p id="instruction">Please choose a first night from the calendar below.</p>
  <table id="bookingTable">
    <tbody>
      <tr>
        <th class="bookingTable">Name</th>
        <td class="bookingTable"><input id="inputName" onChange="addButton()" type="text" value="" name="name" size="30"/></td>
      </tr>
      <tr>
        <th class="bookingTable">First night</th>
        <td class="bookingTable">
          <span id="startDate">None</span>
          <span class="resetDate" id="resetStart" onClick="resetStart()"></span>
          <input type="hidden" id="startDateInput" value="" name="startDate"/>
        </td>
      </tr>
      <tr>
        <th class="bookingTable">Last night</th>
        <td class="bookingTable">
          <span id="endDate">None</span>
          <span class="resetDate" id="resetEnd" onClick="resetEnd()"></span>
          <input type="hidden" id="endDateInput" value="" name="endDate"/>
        </td></tr>
      <tr>
        <th class="bookingTable">Reason for stay</th>
        <td class="bookingTable"><input type="text" value="" name="reason" size="30"/></td>
      </tr>
      <tr>
        <th class="bookingTable">Comments</th>
        <td class="bookingTable"><input type="text" value="" name="comments" size="30"/></td>
      </tr>
      <tr>
        <th class="bookingTable">Status</th>
        <td class="bookingTable"><span id="bookingStatus">No booking</td></td>
      </tr>
      <tr>
        <th></th>
        <td class="bookingTable"><span id="submitButton">&nbsp;</span></td>
      </tr>
    </tbody>
  </table>
  </form>
</div>

<table id="calendarTable">
<thead>
  <tr>
    <th class="calendar">M</th>
    <th class="calendar">T</th>
    <th class="calendar">W</th>
    <th class="calendar">T</th>
    <th class="calendar">F</th>
    <th class="calendar">S</th>
    <th class="calendar">S</th>
  </tr>
</thead>
<tbody>
<?php
$counter = $start ;
$iColor = 0 ;
for($week=0 ; $week<$nWeeks ; $week++){
  echo '<tr>' , PHP_EOL ;
  for($i=0 ; $i<7 ; $i++){
    $time = time()+86400*$counter ;
    if(date('j',$time)=='1') $iColor = 1-$iColor ;
    $date     = date('j M',$time) ;
    $fullDate = date('j M Y',$time) ;
    $bookDate = date('j M Y',$time) ;
    $nightId = $counter-$start ;
    $status  = ($counter<0) ? 1 : 0 ;
    $names = '' ;
    foreach($bookings as $booking){
      if($booking['nightId']==$nightId){
        $status = $booking['status'] ;
        $names  = $names . '<br />' . $booking['name'] ; 
      }
    }
    $class = 'calendar color' . $iColor . $statusName[$status] ;
    echo '  <td id="night_' . $nightId . '"class="' , $class , '"';
    if($status==0 OR $status==2) echo ' onClick="clickOnDate(\'' , $bookDate , '\',' , $nightId , ')"' ;
    echo '>' ;
    $day   = date('j',$time) ;
    echo ($day==1) ? $fullDate : $date ;
    echo '<br /><br />' ;
    echo $statusName[$status] ;
    if($status==2) echo '<br />(Maybe available)' ;
    if($status!=1) echo $names ;
    echo '</td>' , PHP_EOL ;
    $counter++ ;
  }
  echo '</tr>' , PHP_EOL ;
}
?>
  <tr>
    <th class="calendar">M</th>
    <th class="calendar">T</th>
    <th class="calendar">W</th>
    <th class="calendar">T</th>
    <th class="calendar">F</th>
    <th class="calendar">S</th>
    <th class="calendar">S</th>
  </tr>
</tbody>
</table>

<?php

if(isset($_POST['username'])){
  if($_POST['username']==$admin_username AND $_POST['password']==$admin_password){
    echo '<h2>Admin summary</h2>'                  , PHP_EOL ;
    echo '<form method="post" action="index.php">' , PHP_EOL ;
    echo '<table id="summaryTable">'               , PHP_EOL ;
    echo '  <thead>'                               , PHP_EOL ;
    echo '    <tr>'                                , PHP_EOL ;
    echo '      <th class="summary">Id</th>'       , PHP_EOL ;
    echo '      <th class="summary">Name</th>'     , PHP_EOL ;
    echo '      <th class="summary">Reason</th>'   , PHP_EOL ;
    echo '      <th class="summary">Comments</th>' , PHP_EOL ;
    echo '      <th class="summary">Date</th>'     , PHP_EOL ;
    echo '      <th class="summary">Status</th>'   , PHP_EOL ;
    echo '    </tr>'                               , PHP_EOL ;
    echo '  </thead>'                              , PHP_EOL ;
    echo '  <tbody>'                               , PHP_EOL ;
    foreach($bookings as $booking){
      switch($booking['status']){
        case 2: echo '    <tr class="requested">' , PHP_EOL ; break ;
        case 3: echo '    <tr class="booked">'    , PHP_EOL ; break ;
        case 4: echo '    <tr class="rejected">'  , PHP_EOL ; break ;
        default : break ;
      }
      
      echo '      <td class="summary">' , $booking['id']       , '</td>' , PHP_EOL ;
      echo '      <td class="summary">' , $booking['name']     , '</td>' , PHP_EOL ;
      echo '      <td class="summary">' , $booking['reason']   , '</td>' , PHP_EOL ;
      echo '      <td class="summary">' , $booking['comments'] , '</td>' , PHP_EOL ;
      echo '      <td class="summary">' , $booking['year'] , '/' , $booking['month'] , '/' , $booking['day'] , '</td>' , PHP_EOL ;
      echo '      <td class="summary">' , PHP_EOL ;
      echo '        <select name="booking_' , $booking['id'] , '">' , PHP_EOL ;
      for($i=0 ; $i<count($statusName) ; $i++){
        echo '          <option value="' , $i ,'"' ;
        if($booking['status']==$i) echo ' selected="selected"' ;
        echo '>' , $statusName[$i] , '</option>' , PHP_EOL ;
      }
      echo '        </select>' ;
      echo '      </td>' , PHP_EOL ;
      echo '    </tr>' ;
    }
    echo '<td class="summary"></td><td class="summary"></td><td class="summary"></td><td class="summary"></td><td class="summary"></td><td class="summary"><input type="submit" name="admin" value="Apply changes"/></td>' , PHP_EOL ;
    echo '  </tbody>' , PHP_EOL ;
    echo '</table>' , PHP_EOL ;
    echo '<input type="hidden" name="username" value="' , $_POST['username'] , '" />' , PHP_EOL ;
    echo '<input type="hidden" name="password" value="' , $_POST['password'] , '" />' , PHP_EOL ;
    echo '<input type="hidden" name="nWeeks" value="' , $nWeeks , '"/>' , PHP_EOL ;
    echo '<input type="hidden" name="page"   value="book"/>' , PHP_EOL ;
    echo '</form>' , PHP_EOL ;
  }
}
else{
  echo '<h2>Admin login</h2>' , PHP_EOL ;
  echo '<form method="post" action="index.php">' , PHP_EOL ;
  echo '<table class="center">' , PHP_EOL ;
  echo '  <tbody>' , PHP_EOL ;
  echo '    <tr><th>Username</th><td><input type="text"     name="username" value="" /></td></tr>' , PHP_EOL ;
  echo '    <tr><th>Password</th><td><input type="password" name="password" value="" /></td></tr>' , PHP_EOL ;
  echo '    <tr><th></th><td><input type="submit" name="adminLogin" value="Log in" /></td></tr>' , PHP_EOL ;
  echo '  </tbody>' , PHP_EOL ;
  echo '</table>' , PHP_EOL ;
  echo '<input type="hidden" name="nWeeks" value="' , $nWeeks , '"/>' , PHP_EOL ;
  echo '<input type="hidden" name="page"   value="book"/>' , PHP_EOL ;
  echo '</form>' , PHP_EOL ;
}

?>