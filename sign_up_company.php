<?php
if($_POST)
{
$db = mysqli_connect("eu-cdbr-west-03.cleardb.net","b622d4411afd95","fcdf179a","heroku_d686cc7dd5c25ab");
$sql="INSERT INTO `companies` (`id`, `company`, `title`, `city`, `country`, `full_name`, `email`, `password`) VALUES (NULL, '".
$_POST["company"]."', '".
$_POST["title"]."', '".
$_POST["city"]."', '".
$_POST["country"]."', '".
$_POST["full_name"]."', '".
$_POST["email"]."', '".
$_POST["password"]."');";
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
<link rel="stylesheet" href="styles/page_by_page/sign_up_company.css"/>
<link rel="stylesheet" href="styles/text_types.css"/>
<link rel="stylesheet" href="styles/button_and_other_elements.css"/>
<link rel="stylesheet" href="styles/header.css"/>
</head>
<body id="body">

<?php include("top.php"); ?>






<div class="middle_flex">
<div class="middle_flex_left">

<img class="middle_flex_left_image" style="max-width: 50%;" src=" res/sign_in_pic.svg"/>
</div>



<div class="middle_flex_right">
<form method="post" onsubmit="return isValidForm()">
<div class="middle_flex_right_form">
<div class="slides">

<div class="slide" id="slide-1">
<span style="margin-top: 11%;" class="text_type_8 block">Welcome to Usermagic</span>



<div class="block" style="margin-top: 4%;">
<div class="inline_block" style="width: 45%;">
<span class="block text_type_10">Company</span>
<input type="text" name="company" id="company" class="input_type_text block small_textbox"/>

</div>
<div class="inline_block" style="margin-left: 9%; width: 45%;">
<span class="block text_type_10">Title</span>
<input type="text" name="title" id="title" class="input_type_text block small_textbox"/>

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
<div class="block" style="margin-top: 10%;"><div onclick="window.location='#slide-1';" class="circle_blue"></div><div onclick="window.location='#slide-2';" class="circle_grey"></div></div>
</div>



</div>




<div class="slide" id="slide-2">
<span style="margin-top: 11%;" class="text_type_8 block">Welcome to Usermagic</span>



<div class="block" style="margin-top: 4%;">
<div class="inline_block" style="width: 45%;">
<span class="block text_type_10">Full Name</span>
<input type="text" name="full_name" id="full_name" class="input_type_text block small_textbox"/>

</div>
<div class="inline_block" style="margin-left: 9%; width: 45%;">
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
<div class="block" style="margin-top: 10%;"><div onclick="window.location='#slide-1';" class="circle_grey"></div><div onclick="window.location='#slide-2';" class="circle_blue"></div></div>
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

if(document.getElementById("company").value!=""&&
document.getElementById("title").value!=""&&
document.getElementById("city".value)!=""&&
document.getElementById("country").value!=""&&
document.getElementById("full_name").value!=""&&
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
