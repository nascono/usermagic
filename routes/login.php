<?php
header('Content-Type: text/json');
$out = array();
if(isset($_POST["x_auth"]))
{
	if($_POST["x_auth"]=="b9604d510ed0732b47b95e56392d0317")
	{
		$db = mysqli_connect("eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","nlc74woxcs5sif1d","mxbfj4mgfnaj3bi1","nb62b3bzhn3djx6q");
		if(isset($_POST["email"])&&isset($_POST["password"]))
		{
			$sql ='SELECT * FROM `users` WHERE `email` ="'.$_POST["email"].'" &&`password`="'.$_POST["password"].'"';
			$result=mysqli_query($db,$sql);
			$myvalue=mysqli_num_rows($result);
			$rows= mysqli_fetch_array($result);
			if($myvalue>0)
			{
				$out["id"]=$rows["id"];
				$out["complated"] ="true";
			}
			else
			{
				$out["error"]="email_or_password_is_uncorrect";
			}
		}
		else
		{
			$out["error"]="bad_request";
		}
	}
	else
	{
		$out["error"]="x_auth_error";
	}
}
else
{
	$out["error"]="bad_request";
}
print(json_encode($out));
?>