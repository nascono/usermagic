<?php
$out = array();
if(isset($_POST["x_auth"]))
{
	if($_POST["x_auth"]=="b9604d510ed0732b47b95e56392d0317")
	{
		$db = mysqli_connect("eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","nlc74woxcs5sif1d","mxbfj4mgfnaj3bi1","nb62b3bzhn3djx6q");
		if(isset($_POST["id"])&&
		isset($_POST["full_name"])&&
		isset($_POST["city"])&&
		isset($_POST["country"])&&
		isset($_POST["profession"])&&
		isset($_POST["year_of_birth"])&&
		isset($_POST["gender"])&&
		isset($_POST["interests"])&&)
		{
			$sql="UPDATE `users` SET `full_name` = '".
			$_POST["full_name"]."', `city` = '".
			$_POST["city"]."', `country` = '".
			$_POST["country"]."', `profession` = '".
			$_POST["profession"]."', `year_of_birth` = '".
			$_POST["year_of_birth"]."', `gender` = '".
			$_POST["gender"]."', `interests` = '".
			$_POST["interests"]."' WHERE `users`.`id` = ".$_POST["id"].";";
			mysqli_query($db,$sql);
			$out["id"]=$_POST["id"];
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