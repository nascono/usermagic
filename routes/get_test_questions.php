<?php
$out = array();
if(isset($$_POST["x_auth"]))
{
	if($$_POST["x_auth"]=="b9604d510ed0732b47b95e56392d0317")
	{
		$db = mysqli_connect("eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","nlc74woxcs5sif1d","mxbfj4mgfnaj3bi1","nb62b3bzhn3djx6q");
		mysqli_query($db,"SET NAMES UTF8");
		if(isset($$_POST["campaign_id"]))
		{
			$sql ="SELECT * FROM `tests` WHERE `campaign_id` = ".$$_POST["campaign_id"].";";
			$result=mysqli_query($db,$sql);
			$myvalue=mysqli_num_rows($result);
			$rows= mysqli_fetch_array($result);
			if($myvalue>0)
			{
				$out["id"]=$rows["id"];
				$out["campaign_id"]=$rows["campaign_id"];
				$out["reached_user"]=$rows["reached_user"];
				$out["test_json"]=$rows["test_json"];
				$out["test_name"]=$rows["test_name"];
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