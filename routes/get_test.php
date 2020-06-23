<?php
header('Content-Type: text/json');
$out = array();
if(isset($_POST["x_auth"]))
{
	if($_POST["x_auth"]=="b9604d510ed0732b47b95e56392d0317")
	{
		$db = mysqli_connect("eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","nlc74woxcs5sif1d","mxbfj4mgfnaj3bi1","nb62b3bzhn3djx6q");
		if(isset($_POST["campaign_id"]))
		{
			$sql = "SELECT * FROM `campaigns` WHERE `id` = ".$_POST["campaign_id"];
			$result=mysqli_query($db,$sql);
			$myvalue=mysqli_num_rows($result);
			$rows= mysqli_fetch_array($result);
			if($myvalue>0)
			{
				$out=json_decode($rows["test_json"]);
			}
			else
			{
				$out["error"]="id_is_invalid";
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
//echo "<pre>";
//print_r(json_decode(json_encode($out)));
?>