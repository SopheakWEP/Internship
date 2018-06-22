
<?php 
session_start();
if (!isset($_SESSION['lang'])) 
{
	$_SESSION['lang'] = 'en';
}
elseif (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) 
{
	if ($_GET['lang'] == "en") 
	{
		$_SESSION['lang'] = "en";
	}
	elseif ($_GET['lang'] == "kh")
	{
		$_SESSION['lang'] = "kh";
	}
}
require_once $_SESSION['lang'].".php";
?>