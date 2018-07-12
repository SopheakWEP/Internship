
<?php 
session_start();
if (!isset($_SESSION['lang'])) 
{
	$_SESSION['lang'] = 'kh';
}
elseif (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) 
{
	if ($_GET['lang'] == "kh") 
	{
		$_SESSION['lang'] = "kh";
	}
	elseif ($_GET['lang'] == "en")
	{
		$_SESSION['lang'] = "en";
	}
}
require_once "languages/".$_SESSION['lang'].".php";
?>
