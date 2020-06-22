<?php
header('Content-Type: text/json');
$out = array();
if(isset($_POST["x_auth"]))
{
	if($_POST["x_auth"]=="b9604d510ed0732b47b95e56392d0317")
	{
		$db = mysqli_connect("eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","nlc74woxcs5sif1d","mxbfj4mgfnaj3bi1","nb62b3bzhn3djx6q");
		if(isset($_POST["user_id"])&&isset($_POST["campaign_id"])&&isset($_POST["test_answers"]))
		{			
			$sql="INSERT INTO `unapproved_test_answers` (`id`, `campaign_id`, `user_id`, `test_answers`) VALUES (NULL, '".$_POST["campaign_id"]."', '".$_POST["user_id"]."', '".$_POST["test_answers"]."')";
			mysqli_query($db,$sql);
			$out["unapproved_test_id"]=mysqli_insert_id($db);
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