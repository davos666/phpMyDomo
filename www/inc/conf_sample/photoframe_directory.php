<?php
/*

PLEASE READ the /phpMyDomo/doc/howto/photoframe.md for more informations

## Description  ----------------------------------------------------------------------------------
Lists photos located in a directory of albums sub-directories.

Structure:
/path/to/Albums
	Albums_name_1
		photo1.jpg
		photo2.jpg
		...

	Album_name_2
		photo1.jpg
		photo2.jpg
		...
	

## Requirements  ----------------------------------------------------------------------------------
The album directory path ($photo['path']) must be WITHIN the www folder!  

*/

// ##############################################################################
// Player Preferences  ##########################################################
// ##############################################################################

$photo['prefs']['speed']				=5;		//time in seconds
$photo['prefs']['transition']			=3;		// 0=None, 1=Fade, 2=Slide Top, 3=Slide Right, 4=Slide Bottom, 5=Slide Left, 6=Carousel Right, 7=Carousel Left
$photo['prefs']['transition_speed']		=0.8;	//time in seconds
$photo['prefs']['random']				=true;	// true | false
$photo['prefs']['performance']			=1;	// 0=Normal, 1=Hybrid speed/quality, 2=Optimizes image quality, 3=Optimizes transition speed //  (Only works for Firefox/IE, not Webkit)


$photo['prefs']['show_thumb_nav']		=true;	// true | false
$photo['prefs']['show_slide_nav']		=true;	// true | false

$photo['prefs']['show_progress_bar']	=false;	// true | false
$photo['prefs']['show_control_bar']		=true;	// true | false
$photo['prefs']['show_play']			=true;	// true | false
$photo['prefs']['show_album']			=false;	// true | false
$photo['prefs']['show_caption']			=true;	// true | false
$photo['prefs']['show_date']			=true;	// true | false
$photo['prefs']['show_counter']			=true;	// true | false
$photo['prefs']['show_bullets']			=true;	// true | false
$photo['prefs']['show_albums']			=false;	// true | false
$photo['prefs']['show_thumb']			=true;	// true | false



// ##############################################################################
// Plugin Configuration  ########################################################
// ##############################################################################

//path to the albums directory (must be a subdirectory of the "www" directory), ie:
//$photo['path']		='/path/to/pmd/www/my_albums';
$photo['path']		=$this->conf['paths']['docs'].'photoframe_example';

/*
	Tips: If you have enabled the "FollowSymLinks" Options in the Apache virtual host configuration, you might be able to make a symbolic link to an external directory, ie:  
	ln -s /mnt/photos /path_to_pmd/www/albums
	and thus use $photo['path']="/path_to_pmd/www/albums";
*/


?>