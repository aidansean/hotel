<?php

$g['c_w'] = 1300 ;
$g['c_h'] =  950 ;

$points  = array() ;
$walls   = array() ;
$doors   = array() ;
$windows = array() ;
$rooms   = array() ;

// Cupboard
addPoint(0, 316, 250) ;
addPoint(1, 263,   0) ;
addPoint(2, 405,   0) ;
addPoint(3, 263, 250) ;
addPoint(4, 322, 250) ;
addPoint(5, 392, 250) ;
addPoint(6, 405, 250) ;
addWall(1,2) ;
addWall(1,3) ;
addWall(0,4) ;
addWall(2,6) ;
addWall(5,6) ;

// Main bedroom
addPoint( 7,   0, 250) ;
addPoint( 8, 316, 250) ;
addPoint( 9,   0, 600) ;
addPoint(10, 316, 600) ;
addPoint(11, 316, 527) ;
addPoint(12, 316, 597) ;
addPoint(64,   0, 371) ;
addPoint(65,   0, 527) ;
addWall( 7, 8) ;
addWall( 8,11) ;
addWall(10,12) ;
addWall( 7, 9) ;
addWall( 9,10) ;

// Second bedroom
addPoint(13,   0, 912) ;
addPoint(14, 316, 912) ;
addPoint(15, 316, 623) ;
addPoint(16, 316, 693) ;
addPoint(17, 316, 912) ;
addPoint(66,   0, 651) ;
addPoint(67,   0, 798) ;
addWall( 9,13) ;
addWall(10,15) ;
addWall(16,17) ;
addWall(13,14) ;

// Bathroom
addPoint(18, 316, 707) ;
addPoint(19, 412, 707) ;
addPoint(20, 482, 707) ;
addPoint(21, 622, 707) ;
addPoint(22, 622, 912) ;
addWall(18, 19) ;
addWall(20, 21) ;
addWall(21, 22) ;
addWall(17, 22) ;

// Toilet
addPoint(23, 636, 707) ;
addPoint(24, 696, 707) ;
addPoint(25, 710, 707) ;
addPoint(26, 710, 912) ;
addWall(21, 23) ;
addWall(24, 25) ;
addWall(25, 26) ;
addWall(22, 26) ;

// Kitchen
addPoint(27,  710, 615) ;
addPoint(28,  938, 615) ;
addPoint(29, 1044, 615) ;
addPoint(30, 1120, 615) ;
addPoint(31, 1120, 912) ;
addPoint(32,  710, 622) ;
addPoint(33,  710, 697) ;
addPoint(59, 1120, 677) ;
addPoint(60, 1120, 761) ;
addPoint(61, 1120, 852) ;
addPoint(63,  991, 615) ;
addWall(27, 28) ;
addWall(29, 30) ;
addWall(30, 59) ;
addWall(61, 31) ;
addWall(31, 26) ;
addWall(27, 32) ;
addWall(25, 33) ;

// Living room
addPoint(34,  617, 250) ;
addPoint(35, 1120, 250) ;
addPoint(36,  617, 255) ;
addPoint(37,  617, 399) ;
addPoint(38,  617, 615) ;
addPoint(56, 1120, 313) ;
addPoint(57, 1120, 430) ;
addPoint(58, 1120, 549) ;
addPoint(62,  617, 327) ;
addWall(34, 35) ;
addWall(35, 56) ;
addWall(30, 58) ;
addWall(34, 36) ;
addWall(37, 38) ;
addWall(38, 27) ;

// Front door
addPoint(39, 434, 250) ;
addPoint(40, 518, 250) ;
addWall( 6, 39) ;
addWall(34, 40) ;

// Closets
addPoint(41, 399, 413) ;
addPoint(42, 412, 413) ;
addPoint(43, 517, 413) ;
addPoint(44, 530, 413) ;
addPoint(45, 530, 486) ;
addPoint(46, 530, 590) ;
addPoint(47, 530, 615) ;
addPoint(48, 399, 615) ;
addPoint(49, 399, 590) ;
addPoint(50, 399, 486) ;
addPoint(51, 399, 469) ;
addPoint(52, 530, 469) ;
addPoint(53, 465, 469) ;
addPoint(54, 465, 615) ;
addPoint(68, 464, 413) ;
addPoint(69, 399, 538) ;
addPoint(70, 530, 538) ;
addWall(41, 42) ;
addWall(43, 44) ;
addWall(44, 45) ;
addWall(46, 47) ;
addWall(47, 48) ;
addWall(48, 49) ;
addWall(41, 50) ;
addWall(51, 52) ;
addWall(53, 54) ;

// Balcony
addPoint(71, 1260, 250) ;
addPoint(72, 1260, 597) ;
addPoint(73, 1220, 597) ;
addPoint(74, 1220, 912) ;
addWall(35, 71) ;
addWall(71, 72) ;
addWall(72, 73) ;
addWall(73, 74) ;
addWall(74, 31) ;

// Doors
addDoor(39, 40) ;
addDoor( 4,  5) ;
addDoor(11, 12) ;
addDoor(15, 16) ;
addDoor(19, 20) ;
addDoor(23, 24) ;
addDoor(32, 33) ;
addDoor(36, 62) ;
addDoor(62, 37) ;
addDoor(28, 63) ;
addDoor(63, 29) ;
addDoor(57, 58) ;
addDoor(59, 60) ;
addDoor(42, 68) ;
addDoor(68, 43) ;
addDoor(45, 70) ;
addDoor(70, 46) ;
addDoor(50, 69) ;
addDoor(69, 49) ;

// Windows
addWindow(56, 57) ;
addWindow(60, 61) ;
addWindow(64, 65) ;
addWindow(66, 67) ;

// Rooms
// Hallway
$p = array( 0 , 34 , 38 , 27 , 25 , 18 , 0 ) ;
$color = 'rgb(240,240,240)' ;
addRoom($p, $color) ;
// Cupboard
$p = array( 1 , 2 , 6 , 3 , 1 ) ;
$color  = 'rgb(255,255,200)' ;
addRoom($p, $color) ;
// Closets
$p = array( 41 , 44 , 47 , 48 , 41 ) ;
$color  = 'rgb(255,255,200)' ;
addRoom($p, $color) ;
// Main bedroom
$p = array( 7 , 8 , 10 , 9, 7 ) ;
$color  = 'rgb(255,200,200)' ;
addRoom($p, $color) ;
// Second bedroom
$p = array( 9 , 10 , 14 , 13 , 9 ) ;
$color  = 'rgb(255,200,200)' ;
addRoom($p, $color) ;
// Bathroom
$p = array( 17 , 18 , 21 , 22 , 17 ) ;
$color  = 'rgb(200,255,200)' ;
addRoom($p, $color) ;
// Toilet
$p = array( 21 , 22 , 26 , 25 , 21 ) ;
$color  = 'rgb(200,255,200)' ;
addRoom($p, $color) ;
// Living room
$p = array( 34 , 35 , 30 , 38 , 34 ) ;
$color  = 'rgb(255,200,255)' ;
addRoom($p, $color) ;
// Kitchen
$p = array( 27 , 30 , 31 , 26 ,27 ) ;
$color  = 'rgb(200,200,255)' ;
addRoom($p, $color) ;
// Baclony
$p = array( 35 , 71 , 72 , 73 , 74 , 31 , 35 ) ;
$color = 'rgb(240,240,240)' ;
addRoom($p, $color) ;

header("Content-type: image/svg+xml") ;
$string = array() ;
$string[] = '<svg width="' . write_int($g['c_w']) . '" height="' . write_int($g['c_h']) . '" ' ;
$string[] = 'version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">' . PHP_EOL ;

$spacing = 100 ;

$show_rooms     = true ;
$show_grid      = true ;
$show_walls     = true ;
$show_doors     = true ;
$show_windows   = true ;
$show_furniture = true ;
$show_labels    = true ;
$show_scale     = true ;
$show_key       = true ;

//if($show_rooms)   foreach($rooms as $room){ $string[] = drawRoom($room) ; }
//if($show_grid)      add_grid()      ;
//if($show_walls)   foreach($walls as $wall)    { $string[] = drawWall($wall)     ; }
//if($show_doors)   foreach($doors as $door)    { $string[] = drawDoor($door)     ; }
//if($show_windows) foreach($windows as $window){ $string[] = drawWindow($window) ; }
if($show_furniture) add_furniture() ;
//if($show_labels)    add_labels()    ;
//if($show_scale)     add_scale()     ;
//if($show_key)       add_key()       ;

$string[] = '</svg>' . PHP_EOL ;
echo implode($string) ;

function add_grid(){
  global $spacing, $string, $g ;
	$X = 0 ;
	for($x=0 ; $X<$g['c_w'] ; $x+=$spacing){
		$string[] = '<line ' .
			'x1="' . write_int(X($x)) . '" ' .
			'y1="' . write_int(Y(-$spacing)) . '" ' .
			'x2="' . write_int(X($x)) . '" ' .
			'y2="' . write_int( 1000) . '" ' .
			'stroke-width="1" stroke="rgb(200,200,200)"/>' ;
		$X = X($x) ;
	}
	$Y = 0 ;
	for($y=0 ; $Y<$g['c_h'] ; $y+=$spacing){
		$string[] = '<line ' .
			'x1="' . write_int(    0) . '" ' .
			'y1="' . write_int(Y($y)) . '" ' .
			'x2="' . write_int( 1500) . '" ' .
			'y2="' . write_int(Y($y)) . '" ' .
			'stroke-width="1" stroke="rgb(200,200,200)"/>' ;
		$Y = Y($y) ;
	}
}

function add_furniture(){
  global $points, $string ;
	// Furniture
	// Bath
	$x = $points[22]->x-170 ;
	$y = $points[22]->y-70  ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="170" height="70" ' ;
	$string[] = 'fill="rgb(255,255,255)" stroke="rgb(100,100,100)" stroke-width="1"/>' . PHP_EOL ;
	$x = $points[22]->x-85 ;
	$y = $points[22]->y-35 ;
	$string[] = '<ellipse cx="' . write_int(X($x)) . '" cy="' . write_int(Y($y)) . '" rx="80" ry="30" ' ;
	$string[] = 'fill="rgb(255,255,255)" stroke="rgb(100,100,100)" stroke-width="1"/>' . PHP_EOL ;
	
	// Toilet
	$x = ($points[22]->x + $points[26]->x)*0.5 ;
	$y =  $points[22]->y ;
	$string[] = '<ellipse cx="' . write_int(X($x)) . '" cy="' . write_int(Y($y-35)) . '" rx="19" ry="24" ' ;
	$string[] = 'fill="rgb(255,255,255)" stroke="rgb(100,100,100)" stroke-width="1"/>' . PHP_EOL ;
	$string[] = '<rect x="' . write_int(X($x-20)) . '" y="' . write_int(Y($y-16)) . '" width="40" height="16" ' ;
	$string[] = 'fill="rgb(255,255,255)" stroke="rgb(100,100,100)" stroke-width="1"/>' . PHP_EOL ;
	
	// Bidet
	$x = $points[22]->x-223 ;
	$y = $points[22]->y-58  ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="38" height="58" ' ;
	$string[] = 'fill="rgb(255,255,255)" stroke="rgb(100,100,100)" stroke-width="1"/>' . PHP_EOL ;
	$x = $points[22]->x-204 ;
	$y = $points[22]->y-29  ;
	$string[] = '<ellipse cx="' . write_int(X($x)) . '" cy="' . write_int(Y($y)) . '" rx="15" ry="25" ' ;
	$string[] = 'fill="rgb(255,255,255)" stroke="rgb(100,100,100)" stroke-width="1"/>' . PHP_EOL ;
	
	// Washing machine
	$x = $points[17]->x    ;
	$y = $points[17]->y-64 ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="64" height="64" ' ;
	$string[] = 'fill="rgb(255,255,255)" stroke="rgb(100,100,100)" stroke-width="1"/>' . PHP_EOL ;
	
	// Bathroom sink
	$x = $points[21]->x-51 ;
	$y = $points[21]->y    ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="51" height="122" ' ;
	$string[] = 'fill="rgb(255,255,255)" stroke="rgb(100,100,100)" stroke-width="1"/>' . PHP_EOL ;
	
	// Bathroom cupboards
	$x = $points[21]->x-75 ;
	$y = $points[21]->y    ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="65" height="20" ' ;
	$string[] = 'fill="rgb(255,255,255)" stroke="rgb(100,100,100)" stroke-width="1"/>' . PHP_EOL ;
	$x = $points[21]->x-107 ;
	$y = $points[21]->y     ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="32" height="32" ' ;
	$string[] = 'fill="rgb(255,255,255)" stroke="rgb(100,100,100)" stroke-width="1"/>' . PHP_EOL ;
	
	// Dishwasher
	$x = $points[26]->x+240 ;
	$y = $points[26]->y-57  ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="10" height="54" ' ;
	$string[] = 'fill="rgb(255,255,255)" stroke="rgb(100,100,100)" stroke-width="1"/>' . PHP_EOL ;
	// Kitchen counters
	$x = $points[26]->x    ;
	$y = $points[26]->y-60 ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="182" height="60" ' ;
	$string[] = 'fill="rgb(255,255,255)" stroke="rgb(100,100,100)" stroke-width="1"/>' . PHP_EOL ;
	$x = $points[26]->x+182 ;
	$y = $points[26]->y-181 ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="60" height="182" ' ;
	$string[] = 'fill="rgb(255,255,255)" stroke="rgb(100,100,100)" stroke-width="1"/>' . PHP_EOL ;
	// Kitchen sinks
	$x = $points[26]->x+38 ;
	$y = $points[26]->y-55 ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="62" height="50" ' ;
	$string[] = 'fill="rgb(255,255,255)" stroke="rgb(100,100,100)" stroke-width="1"/>' . PHP_EOL ;
	$x = $points[26]->x+100 ;
	$y = $points[26]->y-55  ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="62" height="50" ' ;
	$string[] = 'fill="rgb(255,255,255)" stroke="rgb(100,100,100)" stroke-width="1"/>' . PHP_EOL ;
	
	// Fridge
	$x = $points[25]->x ;
	$y = $points[25]->y ;
	//$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="65" height="60" ' ;
	//$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	// Kitchen cupboards
	$x = $points[27]->x+102 ;
	$y = $points[27]->y ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="107" height="44" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	$x = $points[25]->x    ;
	$y = $points[25]->y+70 ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="41" height="60" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	// Kitchen table
	$x = $points[31]->x-65 ;
	$y = $points[31]->y-65 ;
	$string[] = '<circle cx="' . write_int(X($x)) . '" cy="' . write_int(Y($y)) . '" r="57" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	
	// Living room
	// Cupboard
	$x = $points[38]->x+76 ;
	$y = $points[38]->y-52 ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="222" height="51" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	// Sofa
	$x = $points[34]->x+160 ;
	$y = $points[34]->y     ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="215" height="92" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	// Poof
	$x = $points[35]->x-200 ;
	$y = $points[35]->y+100 ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="70" height="70" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	// Coffee table
	$x = $points[34]->x+380 ;
	$y = $points[34]->y    ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="121" height="61" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	// Computer table
	$x = $points[38]->x     ;
	$y = $points[38]->y-180 ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="52" height="80" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	// Computer chair
	$x = $points[38]->x+55  ;
	$y = $points[38]->y-175 ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="77" height="69" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	// TV table
	$x = $points[58]->x-50  ;
	$y = $points[58]->y-20 ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="45" height="80" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	// Shelves
	$x = $points[34]->x+85 ;
	$y = $points[34]->y    ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="70" height="24" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	// Square lamp
	$x = $points[56]->x-120 ;
	$y = $points[56]->y ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="38" height="38" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	// Round lamp
	$x = $points[28]->x-5 ;
	$y = $points[28]->y-20 ;
	$string[] = '<circle cx="' . write_int(X($x)) . '" cy="' . write_int(Y($y)) . '" r="15" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	
	// Master bedroom
	// Bed
	$x = $points[7]->x+50 ;
	$y = $points[7]->y    ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="166" height="207" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	// Cupboard
	$x = $points[8]->x-54 ;
	$y = $points[8]->y+50 ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="53" height="173" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	// Bedside table
	$x = $points[7]->x+2 ;
	$y = $points[7]->y+2 ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="44" height="41" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	// Round lamp
	$x = $points[11]->x-20 ;
	$y = $points[11]->y-20 ;
	$string[] = '<circle cx="' . write_int(X($x)) . '" cy="' . write_int(Y($y)) . '" r="15" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	
	// Second bedroom
	// Bed
	$x = $points[14]->x-191 ;
	$y = $points[14]->y-150 ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="190" height="130" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	// Cupboard
	$x = $points[10]->x-200 ;
	$y = $points[10]->y     ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="99" height="44" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	// Bedside table
	$x = $points[10]->x-45  ;
	$y = $points[10]->y+120 ;
	$string[] = '<rect x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" width="44" height="41" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
	// Round lamp
	$x = $points[13]->x+20 ;
	$y = $points[13]->y-20 ;
	$string[] = '<circle cx="' . write_int(X($x)) . '" cy="' . write_int(Y($y)) . '" r="15" ' ;
	$string[] = 'fill="rgb(255,255,200)" stroke="rgb(100,100,100)" stroke-width="1"/>' ;
}

function add_labels(){
  global $points, $string ;
	// Labels
	$x = 0.5*($points[7]->x+$points[10]->x) ;
	$y = 0.5*($points[7]->y+$points[10]->y) ;
	$string[] = '<text x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" ' 
		. 'font-family="times , serif" font-size="24" '
		. 'text-anchor="middle">Master bedroom</text>' . PHP_EOL ;
	
	$x = 0.5*($points[10]->x+$points[13]->x) ;
	$y = 0.5*($points[10]->y+$points[13]->y) ;
	$string[] = '<text x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" ' 
		. 'font-family="times , serif" font-size="24" '
		. 'text-anchor="middle">Second bedroom</text>' . PHP_EOL ;
	
	$x = 0.5*($points[14]->x+$points[21]->x) ;
	$y = 0.5*($points[14]->y+$points[21]->y) ;
	$string[] = '<text x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" ' 
		. 'font-family="times , serif" font-size="24" '
		. 'text-anchor="middle">Bathroom</text>' . PHP_EOL ;
	
	$x = 0.5*($points[21]->x+$points[26]->x) ;
	$y = 0.5*($points[21]->y+$points[26]->y) ;
	$string[] = '<text x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" ' 
		. 'font-family="times , serif" font-size="24" '
		. 'text-anchor="middle">Toilet</text>' . PHP_EOL ;
	
	$x = 0.5*($points[27]->x+$points[31]->x)-100 ;
	$y = 0.5*($points[27]->y+$points[31]->y) ;
	$string[] = '<text x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" ' 
		. 'font-family="times , serif" font-size="24" ' 
		. 'text-anchor="middle">Kitchen</text>' . PHP_EOL ;
	
	$x = 0.5*($points[34]->x+$points[30]->x) ;
	$y = 0.5*($points[34]->y+$points[30]->y) ;
	$string[] = '<text x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" ' 
		. 'font-family="times , serif" font-size="24" '
		. 'text-anchor="middle">Living room</text>' . PHP_EOL ;
		
	$x = 0.5*($points[71]->x+$points[31]->x) ;
	$y = 0.5*($points[71]->y+$points[31]->y)-100 ;
	$string[] = '<text x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" ' 
		. 'font-family="times , serif" font-size="24" '
		. 'text-anchor="middle">Balcony</text>' . PHP_EOL ;
	
	$x = 0.5*($points[1]->x+$points[6]->x) ;
	$y = 0.5*($points[1]->y+$points[6]->y) ;
	$string[] = '<text x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" ' 
		. 'font-family="times , serif" font-size="24" '
		. 'text-anchor="middle">Cupboard</text>' . PHP_EOL ;
	
	$x = 0.5*($points[41]->x+$points[47]->x) ;
	$y = 0.5*($points[41]->y+$points[47]->y)-65 ;
	$string[] = '<text x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" ' 
		. 'font-family="times , serif" font-size="24" '
		. 'text-anchor="middle">Closets</text>' . PHP_EOL ;
}

function add_scale(){
  global $string ;
  // Scale
  $offsetX = 500 ;
  $offsetY = 100 ;
	for($i=0 ; $i<9 ; $i++){
		$x1 = $offsetX + 25*$i ;
		$y1 = $offsetY ;
		$x2 = $x1 ;
		$y2 = ($i%4==0) ? $y1+15 : $y1+5 ;
		$string[] = '<line x1="' . write_int(X($x1)) . '" y1="' . write_int(Y($y1)) . '" x2="' . write_int(X($x2)) . '" y2="' . write_int(Y($y2)) . '" stroke-width="1" stroke="rgb(0,0,0)" stroke-linecap="square"/>' . PHP_EOL ;
	}
	$x = $offsetX ;
	$y = $offsetY ;
	$string[] = '<line x1="' . write_int(X($x)) . '" y1="' . write_int(Y($y)) . '" x2="' . write_int(X($x+25*8)) . '" y2="' . write_int(Y($y)) . '" stroke-width="1" stroke="rgb(0,0,0)" stroke-linecap="square"/>' . PHP_EOL ;
	
	$x = $offsetX ;
	$y = $offsetY+30 ;
	$string[] = '<text x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" ' 
		. 'font-family="times , serif" font-size="16" '
		. 'text-anchor="middle">0m</text>' . PHP_EOL ;
	
	$x += 100 ;
	$string[] = '<text x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" ' 
		. 'font-family="times , serif" font-size="16" '
		. 'text-anchor="middle">1m</text>' . PHP_EOL ;
		
	$x += 100 ;
	$string[] = '<text x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" ' 
		. 'font-family="times , serif" font-size="16" '
		. 'text-anchor="middle">2m</text>' . PHP_EOL ;
}

function add_key(){
  global $string ;
	// Key
	addpoint(100,800,100) ;
	addpoint(101,850,100) ;
	addpoint(102,800,150) ;
	addpoint(103,850,150) ;
	$door = new door() ;
	$door->set(100,101) ;
	$string[] = drawDoor($door) ;
	$window = new window() ;
	$window->set(102,103) ;
	$string[] = drawWindow($window) ;
	$x = 870 ; $y = 105 ;
	$string[] = '<text x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" ' 
		. 'font-family="times , serif" font-size="16" '
		. 'text-anchor="start">Door</text>' . PHP_EOL ;
	$x = 870 ; $y = 155 ;
	$string[] = '<text x="' . write_int(X($x)) . '" y="' . write_int(Y($y)) . '" ' 
		. 'font-family="times , serif" font-size="16" '
		. 'text-anchor="start">Window</text>' . PHP_EOL ;
}

class wall{
  public $id1 ;
  public $id2 ;
  function set($point1,$point2){
    $this->id1 = $point1 ;
    $this->id2 = $point2 ;
  }
}

class point{
  public $id ;
  public $x ;
  public $y ;
  function set($setId,$setX,$setY){
    $this->id = $setId ;
    $this->x  = $setX ;
    $this->y  = $setY ;
  }
}

class door{
  public $p1 ;
  public $p2 ;
  function set($point1,$point2){
    $this->id1 = $point1 ;
    $this->id2 = $point2 ;
  }
}

class window{
  public $p1 ;
  public $p2 ;
  function set($point1,$point2){
    $this->id1 = $point1 ;
    $this->id2 = $point2 ;
  }
}

class room{
  public $points ;
  public $color ;
  function set($points, $color){
    $this->points = $points ;
    $this->color  = $color ;
  }
}

function addPoint($id,$x,$y){
  global $points ;
  $point = new point() ;
  $point->set($id,$x,$y) ;
  $points[$id] = $point ;
}

function addWall($id1,$id2){
  global $walls , $points ;
  $wall = new wall() ;
  $wall->set($id1,$id2) ;
  $walls[] = $wall ;
}

function addDoor($id1,$id2){
  global $doors , $points ;
  $door = new door() ;
  $door->set($id1,$id2) ;
  $doors[] = $door ;
}

function addWindow($id1,$id2){
  global $windows , $points ;
  $window = new window() ;
  $window->set($id1,$id2) ;
  $windows[] = $window ;
}

function addRoom($points, $color){
  global $rooms ;
  $room = new room;
  $room->set($points, $color) ;
  $rooms[] = $room ;
}

function drawDoor($door){
  global $points ;
  $string = array() ;
  $p1 = $points[$door->id1] ;
  $p2 = $points[$door->id2] ;
  $x1 = X($p1->x) ;
  $y1 = Y($p1->y) ;
  $x2 = X($p2->x) ;
  $y2 = Y($p2->y) ;
  if($x1==$x2){
    $string[] = '<rect ' 
      . 'x="' . write_int($x1-2) . '" ' 
      . 'y="' . write_int($y1) . '" ' 
      . 'width="4" ' 
      . 'height="' . write_int($y2-$y1) . '" ' ;
  }
  else{
    $string[] = '<rect ' 
      . 'x="' . write_int($x1) . '" ' 
      . 'y="' . write_int($y1-2) . '" ' 
      . 'width="' . write_int($x2-$x1) . '" ' 
      . 'height="4" ' ;
  }
  $string[] = 'stroke="rgb(0,0,255)" stroke-width="2" fill="rgb(255,255,255)"/>' . PHP_EOL ;
  return implode($string) ;
}

function drawWindow($window){
  global $points ;
  $string = array() ;
  $p1 = $points[$window->id1] ;
  $p2 = $points[$window->id2] ;
  $x1 = X($p1->x) ;
  $y1 = Y($p1->y) ;
  $x2 = X($p2->x) ;
  $y2 = Y($p2->y) ;
  if($x1==$x2){
    $string[] = '<rect ' 
      . 'x="' . write_int($x1-2) . '" ' 
      . 'y="' . write_int($y1) . '" ' 
      . 'width="4" ' 
      . 'height="' . write_int($y2-$y1) . '" ' ;
  }
  else{
    $string[] = '<rect ' 
      . 'x="' . write_int($x1) . '" ' 
      . 'y="' . write_int($y1-2) . '" ' 
      . 'width="' . write_int($x2-$x1) . '" ' 
      . 'height="4" ' ;
  }
  $string[] = 'stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(255,255,255)"/>' . PHP_EOL ;
  return implode($string) ;
}

function drawRoom($room)
{
  global $points ;
  $string = array() ;
  $string[] = '<path d="M ' ;
  $p = $points[$room->points[0]] ;
  $string[] = write_int(X($p->x)) ;
  $string[] = ' ' ;
  $string[] = write_int(Y($p->y)) ;
  for($i=1 ; $i<count($room->points) ; $i++){
    $p = $points[$room->points[$i]] ;
    $string[] = ' L ' ;
    $string[] = write_int(X($p->x)) ;
    $string[] = ' ' ;
    $string[] = write_int(Y($p->y)) ;
  }
  $string[] = '" ' ;
  $string[] = 'stroke="rgb(0,0,0)" stroke-width="2" fill="' . $room->color . '" />' . PHP_EOL ;
  return implode($string) ;
}

function drawWall($wall){
  global $points ;
  $p1 = $points[$wall->id1] ;
  $p2 = $points[$wall->id2] ;
  $x1 = X($p1->x) ;
  $y1 = Y($p1->y) ;
  $x2 = X($p2->x) ;
  $y2 = Y($p2->y) ;
  return '<line ' 
    . 'x1="' . write_int($x1) . '" ' 
    . 'y1="' . write_int($y1) . '" ' 
    . 'x2="' . write_int($x2) . '" ' 
    . 'y2="' . write_int($y2) . '" ' 
    . 'stroke="rgb(0,0,0)" stroke-width="2" />' . PHP_EOL ;
}

function write_int($int)    { return sprintf("%d"  , $int)   ; }
function write_float($float){ return sprintf("%.2f", $float) ; }
function X($x){ return 10 + $x ; }
function Y($y){ return 10 + $y ; }

?>