<?php 
	get_header();

		$pages = array('section_1','section_2','section_3');
		foreach ($pages as  $page) {
			include 'en_clients/'.$page.'.php';
		}
	get_footer(); 
?>