<?php
if($_POST)
{
$db = mysqli_connect("eu-cdbr-west-03.cleardb.net","b622d4411afd95","fcdf179a","heroku_d686cc7dd5c25ab");
$sql="INSERT INTO `form2` (`id`, `first_name`, `last_name`, `city`, `country`, `profession`, `age`, `gender`, `email`, `password`) VALUES (NULL, '".$_POST["first_name"]."', '".$_POST["last_name"]."', '".$_POST["city"]."', '".$_POST["country"]."', '".$_POST["profession"]."', '".$_POST["age"]."', '".$_POST["gender"]."', '".$_POST["email"]."', '".$_POST["password"]."');";
mysqli_query($db,"SET NAMES UTF8");
mysqli_query($db,$sql);
echo "Successfully register you are directing to main page";
header("Refresh: 3; url=index.php");
exit();
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="text_types.css"/>
</head>
<body id="body">

<div class="top">

<div class="logo_box vertical-center">
<img style="cursor: pointer; height:200px;" onclick="window.location='index.php'" src="res/logo.png"/>
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
