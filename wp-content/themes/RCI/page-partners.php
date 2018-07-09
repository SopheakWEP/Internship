
<?php 
    get_header();

        $pages = array('section_1','section_2');
        foreach ($pages as  $page) {
            include 'en_partner/'.$page.'.php';
        }
    get_footer(); 
?>
