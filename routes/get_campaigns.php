<?php
$asd = array();
$asd[] ="bir";
$asd[] ="iki";
$out = array();
if(isset($_GET["x_auth"]))
{
	if($_GET["x_auth"]=="b9604d510ed0732b47b95e56392d0317")
	{
		$db = mysqli_connect("eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","nlc74woxcs5sif1d","mxbfj4mgfnaj3bi1","nb62b3bzhn3djx6q");
		if(isset($_GET["id"]))
		{
			$sql ="SELECT * FROM `users` WHERE `id` = ".$_GET["id"].";";
			$user= mysqli_fetch_array(mysqli_query($db,$sql));
			$user_interests= json_decode($user["interests"]);
			$sql ="SELECT * FROM `campaigns`";
			$result=mysqli_query($db,$sql);
			while($row = mysqli_fetch_assoc($result)) {
				
				$campaign_interests= json_decode($row["target_interests"]);
				
				$contiune=false;
				foreach($campaign_interests as &$interest)
				{
					if(in_array($interest, $user_interests))
					{
						$contiune=true;
					}
				}
				
				if($user["gender"]==$row["target_gender"] || "all_gender"==$row["target_gender"]){}
				else{$contiune=false; }
				
				if($user["country"]!=$row["target_location"]){$contiune=false;}
				
				$age_1=(int)explode("-",$row["target_age_distance"])[0];
				$age_2=(int)explode("-",$row["target_age_distance"])[1];
				$userage= (int)date("Y")-(int)$user["year_of_birth"];
				if($userage < $age_1 || $userage > $age_2){$contiune=false;}
				
				
				if($contiune)
				{
					$campaign_array = array();
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
					$out[] = $campaign_array;
				}
			}
			
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
print(json_encode($out));
//echo "<pre>";
//print_r(json_decode(json_encode($out)));
?>