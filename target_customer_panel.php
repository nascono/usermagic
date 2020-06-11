<?php
if($_POST)
{
echo"<pre>";
 print_r($_POST);
 exit();
}
function get_ages()
{
	for ($x = 13; $x <= 40; $x++) {
	echo "<opinion>A</opinion>";
	}
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="text_types.css"/>
</head>
<body>

<div class="top">
<div class="top_items">
<div class="logo_box vertical-center">
<img style="cursor: pointer; height:80px;" onclick="window.location='index.php'" src="res/logom.png"/>
</div>
</div>

<div class="other_buttons_box vertical-center">
<button onclick="window.location='sign_up.php'" class="button_without_background">Get paid to test</button>
<button onclick="window.location='solutions.php'" class="button_without_background">Solutions</button>
<button onclick="window.location='index.php'" class="button_without_background">Pricing</button>
<button onclick="window.location='index.php'" class="button_without_background">Contact us</button>
<button onclick="window.location='try_for_free.php'" class="button_with_background">Try for free</button>
<button onclick="window.location='sign_in.php'" class="button_without_background">Sign in</button>
</div>


</div>






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
<select class="select_box_radio_button text_type_15" name="location" id="location"><option>Turkey</option><option>USA</option></select>
</div>
<div class="block">
<span class="text_type_14">Interests</span>
</div>
<div class="interests_box">
<div onclick="interests_added('asd');" id="asd" class="select_box_radio_button "><span class="text_type_16">asd</span></div>
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
