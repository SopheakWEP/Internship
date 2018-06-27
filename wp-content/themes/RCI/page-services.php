<?php 
	get_header();
	$pages = array('section_1','section_2','section_3','section_4','section_5');
	foreach ($pages as  $page) {
		include 'en_service/'.$page.'.php';
	}
	get_footer(); 
?>