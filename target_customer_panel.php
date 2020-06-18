<?php
session_start();
if(!isset($_SESSION['company_name']))
{
header("Location: index.php");
exit();
}


$creator_name=$_SESSION['company_name'];
$creator_id=$_SESSION['company_id'];
$target_interests=json_encode($_POST["interests[]"]) ;
$db = mysqli_connect("eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","nlc74woxcs5sif1d","mxbfj4mgfnaj3bi1","nb62b3bzhn3djx6q");
if($_POST)
{
$sql="INSERT INTO `campaigns` (`id`, `camaign_name`, `creator_id`, `creator_name`, `application_name`, `application_url`, `target_gender`, `target_age_distance`, `target_number_of_testers`, `target_location`, `target_interests`, `requirements_from_tester`) VALUES (NULL, '".
$_POST["camaign_name"]."', '".
$creator_id."', '".
$creator_name."', '".
$_POST["application_name"]."', '".
$_POST["application_url"]."', '".
$_POST["target_gender"]."', '".
$_POST["target_age_distance"]."', '".
$_POST["target_number_of_testers"]."', '".
$_POST["target_location"]."', '".
$target_interests."', '".
$_POST["requirements_from_tester"]."');";
$result = mysqli_query($db,$sql);
$_SESSION["campaign_id"]=mysqli_insert_id($db);
//header("Location: create_questions.php");
echo "<pre>";
print_r($_POST);
 exit();
}
function get_ages()
{
	$str="";
	for ($x = 13; $x <= 30; $x++) {
	$str=$str."<option>".$x."</option>";
	}
	print($str);
}
function get_locations()
{
	$myvalue="";
	$str=array("Turkey","USA");
	for ($x = 0; $x < count($str); $x++) {
	$myvalue=$myvalue."<option>".$str[$x]."</option>";
	}
	print($myvalue);
}
function get_interests()
{
	$myvalue="";
	$str=array("Mobile games","Fashion","Social media","Sports","Software","Technology","Finance","Marketing","Bussines", "Entrepreneurship");
	for ($x = 0; $x < count($str); $x++) {
	$myvalue=$myvalue."<div style=\"margin: 5px;\" onclick=\"interests_added('".
	$str[$x]."');\" id=\"".
	$str[$x]."\" class=\"select_box_radio_button\"><span class=\"text_type_16\">".
	$str[$x]."</span></div>";
	}
	print($myvalue);
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="styles/page_by_page/target_customer_panel.css"/>
<link rel="stylesheet" href="styles/text_types.css"/>
<link rel="stylesheet" href="styles/button_and_other_elements.css"/>
<link rel="stylesheet" href="styles/header.css"/>
</head>
<body>

<?php include("top.php"); ?>






<div class="middle">
<div class="middle_box_customer_panel" style="width: 80%; margin:0 auto;">
<div class="block" style="text-align: -webkit-center; margin-top: 1%;">
<span class="text_type_13">Determine your target customers</span>
</div>

<form method="post">
<div class="block">
<span class="text_type_14">Gender</span>
</div>
<div class="block">
<input type="hidden" name="gender" id="gender_input"/>
<div onclick="gender_changed('all_gender','woman_gender','male_gender');" id="all_gender" class="select_box_radio_button "><span class="text_type_16">All Gender</span></div>

<div onclick="gender_changed('woman_gender','all_gender','male_gender');" id="woman_gender" class="select_box_radio_button"><span class="text_type_16">Woman</span></div>

<div onclick="gender_changed('male_gender','woman_gender','all_gender');" id="male_gender" class="select_box_radio_button"><span class="text_type_16">Male</span></div>
</div>

<div class="block">
<span class="text_type_14">Age</span>
</div>
<div class="block">
<select class="select_box_radio_button text_type_15" name="age_1" id="age_1"><?php get_ages(); ?></select>
<select class="select_box_radio_button text_type_15" name="age_2" id="age_2"><?php get_ages(); ?></select>
</div>

<div class="block">
<span class="text_type_14">Number of Testers</span>
</div>
<div class="block">
<input type="text" id="number_of_testers" name="number_of_testers" class="select_box_input_text text_type_15"/>
</div>

<div class="block">
<span class="text_type_14">Location</span>
</div>
<div class="block">
<select class="select_box_radio_button text_type_15" name="location" id="location"><?php get_locations(); ?></select>
</div>
<div class="block">
<span class="text_type_14">Interests</span>
</div>
<div class="interests_box">
<?php get_interests(); ?>
<div onclick="interests_added('bbb');" id="bbb" class="select_box_radio_button"><span class="text_type_16">bbb</span></div>

</div>
<div class="block">
<div style="text-align: center; line-height: 60px;" onclick="open_modal();" class="inline-block select_box_submit_button"  >Perfect!</div>
</div>




<div style="display: none;" id="hidden_inputs">
</div>



<div class="modal" id="modal">
<div class="modal_box">
<div class="block">
<span class="text_type_14">Campaign Name</span>
</div>
<div class="block">
<input type="text" id="number_of_testers" name="number_of_testers" class="select_box_input_text text_type_15"/>
</div>

<div class="block">
<span class="text_type_14">Application Name</span>
</div>
<div class="block">
<input type="text" id="application_name" name="application_name" class="select_box_input_text text_type_15"/>
</div>


<div class="block">
<span class="text_type_14">Application Link</span>
</div>
<div class="block">
<input type="text" id="application_link" name="application_link" class="select_box_input_text text_type_15"/>
</div>

<div class="block">
<span class="text_type_14">Requirements from tester</span>
</div>
<div class="block">
<input type="text" id="requirements_from_tester" name="requirements_from_tester" class="select_box_input_text text_type_15"/>
</div>

<div class="block">
<input class="select_box_submit_button" type="submit" value="Create survey"/>
</div>

</div>



</div>
</div>
</form>
</div>
</div>
<script>



function gender_changed( str1, str2, str3)
{
	document.getElementById(str1).style.border="2px solid #187CE0";
	document.getElementById(str2).style.border="2px solid #E2E2E2";
	document.getElementById(str3).style.border="2px solid #E2E2E2";
	document.getElementById("gender_input").value=document.getElementById(str1).value;
}


function interests_added(str)
{

try
{
document.getElementById(str+"_input").remove();
document.getElementById(str).style.border="2px solid #E2E2E2";
}
catch(err)
{
var new_element = document.createElement("input");
new_element.type="hidden";
new_element.id=str+"_input";
new_element.name="interests[]";
new_element.value=str;
document.getElementById(str).style.border="2px solid #187CE0";
document.getElementById("hidden_inputs").appendChild(new_element);  
}
}

function open_modal()
{
document.getElementById("modal").style.display ="block";
}
</script>

</body>
</html>
