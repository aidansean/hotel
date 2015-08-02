<?php
include_once($_SERVER['FILE_PREFIX']."/project_list/project_object.php") ;
$github_uri   = "https://github.com/aidansean/hotel" ;
$blogpost_uri = "http://aidansean.com/projects/?tag=hotel" ;
$project = new project_object("hotel", "L'Hotel d'Aidan", "https://github.com/aidansean/hotel", "http://aidansean.com/projects/?tag=hotel", "hotel/images/project.jpg", "hotel/images/project_bw.jpg", "When I was living near Geneva I had a spare room and many people came to visit for work or leisure.  To make it easier to keep track of who was visiting when I created a page where people could book my spare room.", "Tools", "CSS,HTML,JavaScript,MySQL,PHP") ;
?>