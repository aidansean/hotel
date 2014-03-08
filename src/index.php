<?php

include_once('mysql.php') ;
include_once('admin.php') ;
include_once('common.php') ;
$option = 'home' ;
if(isset($_REQUEST['page'])){
  switch($_REQUEST['page']){
    case 'book'   : $option = 'book'    ; break ;
    case 'local'  : $option = 'local'   ; break ;
    case 'contact': $option = 'contact' ; break ;
    case 'gallery': $option = 'gallery' ; break ;
    default : $option = 'home' ; break ;
  }
}

?>

<html>
<head>
<title>L'hotel d'Aidan</title>
<link type="text/css" rel="stylesheet" media="all" href="style.css" />
<script src="status.php?nWeeks=<?php echo $nWeeks ; ?>" type="text/javascript"></script>
<script src="book.js" type="text/javascript"></script>
</head>
<body>
<div id="outer_container">
<div id="container">
  <div id="heading">
    <h1>Bienvenue &agrave; l'hotel d'Aidan!</h1>
  </div>
  
  <div id="navcontainer">
    <ul id="navlist">
      <li id="currentNavButton"><a href="?page=home">Home</a></li>
      <li><a href="?page=book">Book</a></li>
      <li><a href="?page=local">Local area</a></li>
      <li><a href="?page=gallery">Gallery</a></li>
      <li><a href="?page=contact">Contact</a></li>
    </ul>
  </div>

  <div id="content">
    <?php include($option.'.php') ;?>
  </div>
</div>
</div>
</body>
</html>