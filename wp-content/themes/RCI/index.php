<?php 
	get_header();
		$pages = array('section_1','section_2','section_3','section_4','section_5','section_6','section_7','section_8');
		foreach ($pages as  $page) {
			include 'en_home/'.$page.'.php';
		}
	get_footer(); 
?>