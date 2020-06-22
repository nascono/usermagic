<?php
header('Content-Type: text/json');
$out = array();
$school_types=array();;
$cities=array();

if(isset($_POST["x_auth"]))
{
	if($_POST["x_auth"]=="b9604d510ed0732b47b95e56392d0317")
	{
		if(isset($_POST["country"]))
		{
			$db = mysqli_connect("eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","nlc74woxcs5sif1d","mxbfj4mgfnaj3bi1","nb62b3bzhn3djx6q");
			$sql="SELECT * FROM `cities` WHERE `country` = '".$_POST["country"]."'";
			$result=mysqli_query($db,$sql);
			while($row = mysqli_fetch_assoc($result)) 
			{
				$cities[] = $row["city"];
			}
			
			$sql="SELECT * FROM `school_types` WHERE `country` = '".$_POST["country"]."'";
			$result=mysqli_query($db,$sql);
			while($row = mysqli_fetch_assoc($result)) 
			{
				$school_types[] = $row["school_type"];
			}
		}
		else
		{
			$out["error_field"]="x_auth_error";
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
$out["school_types"]=$school_types;
$out["cities"]=$cities;

print(json_encode($out));
?>