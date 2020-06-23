<?php
header('Content-Type: text/json');
$out = array();
if(isset($_POST["x_auth"]))
{
	if($_POST["x_auth"]=="b9604d510ed0732b47b95e56392d0317")
	{
		$db = mysqli_connect("eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","nlc74woxcs5sif1d","mxbfj4mgfnaj3bi1","nb62b3bzhn3djx6q");
		mysqli_query($db,"SET NAMES UTF8");
		if(isset($_POST["id"]))
		{
			$sql ="SELECT * FROM `users` WHERE `id` = ".$_POST["id"].";";
			$result=mysqli_query($db,$sql);
			$myvalue=mysqli_num_rows($result);
			$rows= mysqli_fetch_array($result);
			if($myvalue>0)
			{
				$out["id"]=$rows["id"];
				$out["full_name"]=$rows["full_name"];
				$out["city"]=$rows["city"];
				$out["country"]=$rows["country"];
				$out["profession"]=$rows["profession"];
				$out["year_of_birth"]=$rows["year_of_birth"];
				$out["gender"]=$rows["gender"];
				$out["email"]=$rows["email"];
				$out["interests"]=$rows["interests"];
				$out["school_type"]=$rows["school_type"];
				$out["money"]=$rows["money"];
			}
			else
			{
				$out["error_field"]="id_is_invaild";
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