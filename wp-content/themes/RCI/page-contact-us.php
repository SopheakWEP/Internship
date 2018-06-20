<?php 
	get_header();

		$pages = array('section_1','section_2','section_3');
		foreach ($pages as  $page) {
			include 'en_contact/'.$page.'.php';
		}
	get_footer(); 
?>