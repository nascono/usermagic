<?php
session_start();
$to_html="";
if(!isset($_SESSION['user_name']))
{
header("Location: index.php");
exit();

}

$db = mysqli_connect("eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","nlc74woxcs5sif1d","mxbfj4mgfnaj3bi1","nb62b3bzhn3djx6q");




$sql ="SELECT * FROM `campaigns`";
while($row = mysqli_fetch_assoc($result)) {
$campaign_interests= json_decode($row["target_interests"]);
$user_interests =json_decode($_SESSION["user_interests"]);
$contiune=false;
foreach($campaign_interests as &$interest)
{
	if(in_array($interest, $user_interests))
	{
		$contiune=true;
	}
}
if($contiune)
{
	$to_html +="";
}


}

?>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="styles/page_by_page/company_profile.css"/>
<link rel="stylesheet" href="styles/text_types.css"/>
<link rel="stylesheet" href="styles/button_and_other_elements.css"/>
<link rel="stylesheet" href="styles/header.css"/>
</head>
<body>

<?php include("top.php"); ?>






<div  class="middle">
<div style="width: 100%; height: 3%;"></div>
<div  class="block" style="text-align: -webkit-center;">
<span  class="text_type_13">Welcome Back <?php get_user_name(); ?> HERE IS CAMPAIGNS</span>
</div>



</div>

</div>
<script>





</script>

</body>
</html>
