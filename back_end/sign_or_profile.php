<?php
session_start();

function if_session_dont_exists()
{
	if(!isset($_SESSION['company_name']))
	{
	exit();
	}
}

function get_company_name()
{
print($_SESSION['company_name']);
}

function sign_or_profile()
{
$return_value="<button onclick=\"window.location='sign_in.php'\" class=\"button_without_background\">Sign in</button>";
if(isset($_SESSION['company_name']))
{
$return_value="<button onclick=\"window.location='company_profile.php'\" class=\"button_without_background\">".$_SESSION['company_name']."</button>";
}
print($return_value);
}
?>