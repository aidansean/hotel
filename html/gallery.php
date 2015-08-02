<?php

$image_names = array() ;
$captions = array() ;
$image_names[] = 'fondue'                ; $caption[] = 'Fondue, Geneva\'s finest cuisine.' ;
$image_names[] = 'Chinese_buffet'        ; $caption[] = 'Enjoying the local Chinese buffet.' ;
$image_names[] = 'Ferney_market'         ; $caption[] = 'Browsing Ferney Voltaire market.' ;
$image_names[] = 'cern_graveyard'        ; $caption[] = 'Behind the scenes CERN tour.' ;
$image_names[] = 'Geneva_lakefront'      ; $caption[] = 'Geneva lakefront.' ;
$image_names[] = 'Jet_Deau_at_night'     ; $caption[] = 'Jet d\'eau at night' ;
$image_names[] = 'living_room'           ; $caption[] = 'The luxury Bohr Lounge.' ;
$image_names[] = 'Gex_centre'            ; $caption[] = 'Gex historic town centre.' ;
$image_names[] = 'mushroom_hunting'      ; $caption[] = 'Mushroom hunting!' ;
$image_names[] = 'globe'                 ; $caption[] = 'The Globe, one of the CERN\'s most famous sights.' ;
$image_names[] = 'Jura'                  ; $caption[] = 'The Jura.' ;
$image_names[] = 'globe_portal'          ; $caption[] = 'CERN\'s Universe of Particles exhibit.' ;
$image_names[] = 'hike'                  ; $caption[] = 'Hiking in the Jura.' ;
$image_names[] = 'ice_cream_Lake_Geneva' ; $caption[] = 'Enjoying ice cream on Lake Geneva.' ;
$image_names[] = 'performers'            ; $caption[] = 'Local street entertainment.' ;
$image_names[] = 'pie'                   ; $caption[] = 'The hotel\'s gourmet catering staff, hard at work.' ;
$image_names[] = 'Mont_Blanc'            ; $caption[] = 'Mont Blanc from the balcony.' ;
$image_names[] = 'Saint_Genis_centre'    ; $caption[] = 'Saint Genis historic centre.' ;
//$image_names[] = 'Gex_market'            ; $caption[] = 'Gex farmers market.' ;

echo '<table id="gallery"><tbody>' ;
for($i=0 ; $i<count($image_names) ; $i++){
  if($i%3==0) echo '<tr>' ;
  echo '<td class="gallery"><a href="images/' , $image_names[$i] , '.jpg"><img class="thumbnail" src="images/thumbnails/' , $image_names[$i] ,'_tb.jpg" width="200px" alt="' , $caption[$i] , '"></a><br />' ,  $caption[$i] , '</td>' , PHP_EOL ;  
  if($i%3==2) echo '</tr>' ;
}
switch(count($image_names)%3){
  case 0: break ;
  case 1: echo '<td class="gallery"></td><td class="gallery"></td></tr>' , PHP_EOL ; break ;
  case 2: echo '<td class="gallery"></td></tr>' , PHP_EOL ; break ;
}
echo '</table>' ;

?>