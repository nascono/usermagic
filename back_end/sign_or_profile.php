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

?>