<?php


if($_POST)
{

echo"<pre>";
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
	$str=array("aaa","ccc");
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

<form method="post" action="create_questions.php">
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
<input class="select_box_submit_button" type="submit" value="Create survey"/>
</div>




<div style="display: none;" id="hidden_inputs">
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
new_element.value=document.getElementById(str).innerHTML;
document.getElementById(str).style.border="2px solid #187CE0";
document.getElementById("hidden_inputs").appendChild(new_element);  
}
}
</script>

</body>
</html>
