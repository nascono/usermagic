<?php
$out = array();
if(isset($_GET["x_auth"]))
{
	if($_GET["x_auth"]=="b9604d510ed0732b47b95e56392d0317")
	{
		$db = mysqli_connect("eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","nlc74woxcs5sif1d","mxbfj4mgfnaj3bi1","nb62b3bzhn3djx6q");
		if(isset($_GET["email"])&&isset($_GET["password"]))
		{			
			$sql ='SELECT * FROM `companies` WHERE `email` ="'.$_GET["email"].'"';
			$sql2 ='SELECT * FROM `users` WHERE `email` ="'.$_GET["email"].'"';
			$adet=0;
			$adet+=mysqli_num_rows(mysqli_query($db,$sql));
			$adet+=mysqli_num_rows(mysqli_query($db,$sql2));
			if($adet==0)
			{
				$sql="INSERT INTO `users` (`id`, `full_name`, `city`, `country`, `profession`, `year_of_birth`, `gender`, `email`, `password`, `interests`) VALUES".
				"(NULL, '', '', '', '', '', '', '".$_GET["email"]."', '".$_GET["password"]."', '');";
				mysqli_query($db,$sql);
				$out["id"] =mysqli_insert_id($db);
			}
			else
			{
				$out["error_field"]="email_is_already_captured";
			}
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