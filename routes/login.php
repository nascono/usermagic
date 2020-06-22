<?php
header('Content-Type: text/json');
$out = array();
if(isset($_GET["x_auth"]))
{
	if($_GET["x_auth"]=="b9604d510ed0732b47b95e56392d0317")
	{
		$db = mysqli_connect("eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","nlc74woxcs5sif1d","mxbfj4mgfnaj3bi1","nb62b3bzhn3djx6q");
		if(isset($_GET["email"])&&isset($_GET["password"]))
		{
			$sql ='SELECT * FROM `users` WHERE `email` ="'.$_GET["email"].'" &&`password`="'.$_GET["password"].'"';
			$result=mysqli_query($db,$sql);
			$myvalue=mysqli_num_rows($result);
			$rows= mysqli_fetch_array($result);
			if($myvalue>0)
			{
				$out["id"]=$rows["id"];
			}
			else
			{
				$out["error_field"]="email or password is uncorrect";
			}
		}
		else
		{
			$out["error_field"]="bad request";
		}
	}
	else
	{
		$out["error_field"]="x_auth error";
	}
}
else
{
	$out["error_field"]="bad request";
}
print(json_encode($out));
?>