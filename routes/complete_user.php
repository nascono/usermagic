<?php
header('Content-Type: text/json');
$out = array();
if(isset($_GET["x_auth"]))
{
	if($_GET["x_auth"]=="b9604d510ed0732b47b95e56392d0317")
	{
		$db = mysqli_connect("eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","nlc74woxcs5sif1d","mxbfj4mgfnaj3bi1","nb62b3bzhn3djx6q");
		if(isset($_GET["id"])&&
		isset($_GET["full_name"])&&
		isset($_GET["city"])&&
		isset($_GET["country"])&&
		isset($_GET["profession"])&&
		isset($_GET["year_of_birth"])&&
		isset($_GET["gender"])&&
		isset($_GET["interests"]))
		{
			$sql="UPDATE `users` SET `full_name` = '".
			$_GET["full_name"]."', `city` = '".
			$_GET["city"]."', `country` = '".
			$_GET["country"]."', `profession` = '".
			$_GET["profession"]."', `year_of_birth` = '".
			$_GET["year_of_birth"]."', `gender` = '".
			$_GET["gender"]."', `interests` = '".
			$_GET["interests"]."' WHERE `users`.`id` = ".$_GET["id"].";";
			mysqli_query($db,$sql);
			$out["id"]=$_GET["id"];
		}
		else
		{
			$out["error_field"]="bad_request";
		}
	}
	else
	{
		$out["error_field"]="x_auth_error";
	}
}
else
{
	$out["error_field"]="bad_request";
}
print(json_encode($out));
?>