<?php
$error_code="";
if($_POST)
{
$db = mysqli_connect("eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","nlc74woxcs5sif1d","mxbfj4mgfnaj3bi1","nb62b3bzhn3djx6q");
$sql ='SELECT * FROM `companies` WHERE `email` ="'.$_POST["email"].'"';
$sql2 ='SELECT * FROM `users` WHERE `email` ="'.$_POST["email"].'"';
mysqli_query($db,"SET NAMES UTF8");
$adet=0;
$adet+=mysqli_num_rows(mysqli_query($db,$sql));
$adet+=mysqli_num_rows(mysqli_query($db,$sql2));

if($adet==0)
{
	$sql="INSERT INTO `users` (`id`, `first_name`, `last_name`, `city`, `country`, `profession`, `age`, `gender`, `email`, `password`) VALUES (NULL, '".$_POST["first_name"]."', '".$_POST["last_name"]."', '".$_POST["city"]."', '".$_POST["country"]."', '".$_POST["profession"]."', '".$_POST["age"]."', '".$_POST["gender"]."', '".$_POST["email"]."', '".$_POST["password"]."');";
	mysqli_query($db,$sql);
	echo "Successfully register you are directing to main page";
	header("Refresh: 3; url=index.php");
	exit();
}
else
{
	header("Location: sign_up.php#slide-3?error_code=1");
}
}
function get_error()
{
	if($_GET["error_code"])
	{print("Email has already captured.");}
}

?>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="styles/page_by_page/sign_up.css"/>
<link rel="stylesheet" href="styles/text_types.css"/>
<link rel="stylesheet" href="styles/button_and_other_elements.css"/>
<link rel="stylesheet" href="styles/header.css"/>
</head>
<body id="body">

<?php include("top.php"); ?>






<div class="middle_flex">
<div class="middle_flex_left">

<img class="middle_flex_left_image" style="max-width: 50%;" src=" res/sign_up_pic.svg"/>
</div>



<div class="middle_flex_right">
<form method="post" onsubmit="return isValidForm()">
<div class="middle_flex_right_form">
<div class="slides">

<div class="slide" id="slide-1">
<span style="margin-top: 11%;" class="text_type_8 block">Welcome to Usermagic</span>
<span class="text_type_9 block">Earn money by completing forms or giving feedback on apps and websites.</span>


<div class="block" style="margin-top: 4%;">
<div class="inline_block" style="width: 45%;">
<span class="block text_type_10">First Name</span>
<input type="text" name="first_name" id="first_name" class="input_type_text block small_textbox"/>

</div>
<div class="inline_block" style="margin-left: 9%; width: 45%;">
<span class="block text_type_10">Last Name</span>
<input type="text" name="last_name" id="last_name" class="input_type_text block small_textbox"/>

</div>
</div>

<div class="block" style="margin-top: 4%;">
<div class="inline_block" style="width: 45%;">
<span class="block text_type_10">City</span>
<input type="text" name="city" id="city" class="input_type_text block small_textbox"/>

</div>
<div class="inline_block" style="margin-left: 9%; width: 45%;">
<span class="block text_type_10">Country</span>
<input type="text" name="country" id="country" class="input_type_text block small_textbox"/>

</div>
</div>
<div style="margin-top: 10%; text-align: -webkit-center;" class="block">
<span onclick="window.location='#slide-2';" class="block button_with_background_2">Perfect!</span>
<div><span class="text_type_11">Already a member?&nbsp;</span><span onclick="window.location='sign_in.php';" style="cursor: pointer;" class="text_type_12">Sign in</span></div>
<div class="block" style="margin-top: 10%;"><div onclick="window.location='#slide-1';" class="circle_blue"></div><div onclick="window.location='#slide-2';" class="circle_grey"></div><div onclick="window.location='#slide-3';" class="circle_grey"></div></div>
</div>



</div>


<div class="slide" id="slide-2">
<span style="margin-top: 11%;" class="text_type_8 block">Welcome to Usermagic</span>
<span class="text_type_9 block">Earn money by completing forms or giving feedback on apps and websites.</span>


<div class="block" style="margin-top: 4%;">
<div class="inline_block" style="width: 99%;">
<span class="block text_type_10">Profession</span>
<input type="text" name="profession" id="profession" class="input_type_text block small_textbox"/>

</div>

</div>

<div class="block" style="margin-top: 4%;">
<div class="inline_block" style="width: 45%;">
<span class="block text_type_10">Age</span>
<input type="text" name="age" id="age" class="input_type_text block small_textbox"/>

</div>
<div class="inline_block" style="margin-left: 9%; width: 45%;">
<span class="block text_type_10">Gender</span>
<input type="text" name="gender" id="gender" class="input_type_text block small_textbox"/>

</div>
</div>

<div style="margin-top: 10%; text-align: -webkit-center;" class="block">
<span onclick="window.location='#slide-3';" class="block button_with_background_2">Almost Done!</span>
<div><span class="text_type_11">Already a member?&nbsp;</span><span onclick="window.location='sign_in.php';" style="cursor: pointer;" class="text_type_12">Sign in</span></div>
<div class="block" style="margin-top: 10%;"><div onclick="window.location='#slide-1';" class="circle_grey"></div><div onclick="window.location='#slide-2';" class="circle_blue"></div><div onclick="window.location='#slide-3';" class="circle_grey"></div></div>
</div>



</div>

<div class="slide" id="slide-3">
<span style="margin-top: 11%;" class="text_type_8 block">Welcome to Usermagic</span>
<span class="text_type_9 block">Earn money by completing forms or giving feedback on apps and websites.</span>


<div class="block" style="margin-top: 4%;">
<div class="inline_block" style="width: 99%;">
<span class="block text_type_10">Email</span>
<input type="email" name="email" id="email" class="input_type_text block small_textbox"/>

</div>

</div>

<div class="block" style="margin-top: 4%;">
<div class="inline_block" style="width: 45%;">
<span class="block text_type_10">Password</span>
<input type="password" name="password" id="password" class="input_type_text block small_textbox"/>

</div>
<div class="inline_block" style="margin-left: 9%; width: 45%;">
<span class="block text_type_10">Confirm Password</span>
<input type="password" name="confirm_password" id="confirm_password" class="input_type_text block small_textbox"/>

</div>
</div>
<div class="block" style="margin-top: 1%; text-align: -webkit-center;">
<span><?php get_error();?></span>
</div>
<div style="margin-top: 10%; text-align: -webkit-center;" class="block">
<input id="submit_button" type="submit" class="block button_with_background_2" value="Let's Begin!"/>
<div><span class="text_type_11">Already a member?&nbsp;</span><span onclick="window.location='sign_in.php';" style="cursor: pointer;" class="text_type_12">Sign in</span></div>
<div class="block" style="margin-top: 10%;"><div onclick="window.location='#slide-1';" class="circle_grey"></div><div onclick="window.location='#slide-2';" class="circle_grey"></div><div onclick="window.location='#slide-3';" class="circle_blue"></div></div>
<div class="block"></div>
</div>



</div>


</div>
</div>
</form>
</div>

</div>

</body>
<script>



function isValidForm()
{
var passwordmatch = false;
var other_bools = false;
if(document.getElementById("confirm_password").value==document.getElementById("password").value)
{
passwordmatch = true;
}
else
{
passwordmatch=false;
alert("passwords don't match");
}

if(document.getElementById("first_name").value!=""&&
document.getElementById("last_name").value!=""&&
document.getElementById("city".value)!=""&&
document.getElementById("country").value!=""&&
document.getElementById("profession").value!=""&&
document.getElementById("age").value!=""&&
document.getElementById("gender").value!=""&&
document.getElementById("email").value!=""&&
document.getElementById("password").value!="")
{
other_bools= true;
}
else
{
other_bools= false;
alert("please fill every blanks");
}

return passwordmatch && other_bools;
}
</script>

</html>
