<?php 
	get_header();?>
	<style>
		.owl-nav,.owl-dots, .owl-dot ,.owl-next, .owl-prev{
		    display: none;
		}
	</style>
	<?php
		$pages = array('section_1','section_2','section_3','section_4','section_5','section_6');
		foreach ($pages as  $page) {
			include 'en_solution/'.$page.'.php';
		}
	get_footer(); 
?>