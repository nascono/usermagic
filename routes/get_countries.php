<?php
header('Content-Type: text/json');
$out = array();
if(isset($_POST["x_auth"]))
{
	if($_POST["x_auth"]=="b9604d510ed0732b47b95e56392d0317")
	{
		$db = mysqli_connect("eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","nlc74woxcs5sif1d","mxbfj4mgfnaj3bi1","nb62b3bzhn3djx6q");
		$sql="SELECT * FROM `countries`";
		$result=mysqli_query($db,$sql);
		while($row = mysqli_fetch_assoc($result)) 
		{
			$out[] = $row["country"];
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