<?php

if(isset($_POST['query']) AND isset($_POST['email']) AND isset($_POST['name'])){
  $message = array() ;
  $message[] = 'Hotel query:' ;
  $message[] = 'Name: '           . $_POST['name']  ;
  $message[] = 'E-mail address: ' . $_POST['email'] ;
  $message[] = 'Query: '          . $_POST['query'] ;
  $headers = 'From: ' . $admin_email . "\r\n" . 'Reply-To: ' . $admin_email . "\r\n" . 'X-Mailer: PHP/' . phpversion();
  mail($admin_email, 'L\'hotel d\'Aidan query' ,implode(PHP_EOL,$message)) ;
  
  echo '<p>Your message has been sent.</p>' ;
}

?>
  &nbsp;
  <form method="post" action="index.php?page=contact">
  <table id="contact_table">
    <tr>
      <th class="contact">Name</th>
      <td><input type="text" name="name"/></td>
    </tr>
    <tr>
      <th class="contact">E-mail address</th>
      <td><input type="text" name="email"/></td>
    </tr>
    <tr>
      <th class="contact">Message</th>
      <td><textarea name="query" cols="40" rows="5"></textarea></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit"/></td>
    </tr>
  </table>
  </form>
