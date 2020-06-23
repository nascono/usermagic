<?php
header('Content-Type: text/json');
$out = array();
if(isset($_POST["x_auth"]))
{
	if($_POST["x_auth"]=="b9604d510ed0732b47b95e56392d0317")
	{
		if(isset($_POST["id"]))
		{
			$db = mysqli_connect("eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","nlc74woxcs5sif1d","mxbfj4mgfnaj3bi1","nb62b3bzhn3djx6q");
			$waiting_campaigns=get_campaign_by_status_with_id($db,$_POST["id"],"waiting");
			$approved_campaigns=get_campaign_by_status_with_id($db,$_POST["id"],"approved");
			$unapproved_campaigns=get_campaign_by_status_with_id($db,$_POST["id"],"unapproved");
			$out =array_merge($waiting_campaigns,$approved_campaigns,$unapproved_campaigns);
		}
		else
		{
			$out["error_field"]="bad_request";
		}
	}
	else
	{
		$out["error_field"]="x_auth error";
	}
}
else
{
	$out["error_field"]="bad_request";
}


function get_campaign_by_id($db,$id)
{
	$sql ="SELECT * FROM `campaigns` WHERE `id` = ".$id."";
	$result=mysqli_query($db,$sql);
	$row = mysqli_fetch_assoc($result);
	$campaign_array = array();
	$campaign_array["campaign_id"]=$row["id"];
	$campaign_array["campaign_name"]=$row["campaign_name"];
	$campaign_array["creator_id"]=$row["creator_id"];
	$campaign_array["creator_name"]=$row["creator_name"];
	$campaign_array["application_name"]=$row["application_name"];
	$campaign_array["application_url"]=$row["application_url"];
	$campaign_array["target_gender"]=$row["target_gender"];
	$campaign_array["target_age_distance"]=$row["target_age_distance"];
	$campaign_array["target_number_of_testers"]=$row["target_number_of_testers"];
	$campaign_array["target_location"]=$row["target_location"];
	$campaign_array["target_interests"]=$row["target_interests"];
	$campaign_array["requirements_from_tester"]=$row["requirements_from_tester"];
	$campaign_array["earning"]=$row["earning"];
	$campaign_array["image"]=$row["image"];
	return $campaign_array;
}
function get_campaign_by_status_with_id($db,$user_id,$str)
{
	$sql ="SELECT * FROM `".$str."_test_answers` WHERE `user_id` = '".$user_id."'";
	$result=mysqli_query($db,$sql);
	$my_array = array();
	while($row = mysqli_fetch_assoc($result)) 
	{
		$my_campaign = get_campaign_by_id($db,$row["campaign_id"]);
		$my_campaign["status"]=$str;
		if(isset($row["message"])){$my_campaign["message"]=$row["message"];}
		$my_array[] = $my_campaign;
	}
	return $my_array;
}
//print(json_encode($out));
echo "<pre>";
print_r(json_decode(json_encode($out)));
?>