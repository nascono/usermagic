<?php
if($_POST)
{
echo "ssss";
$db = mysqli_connect("eu-cdbr-west-03.cleardb.net","b622d4411afd95","fcdf179a","heroku_d686cc7dd5c25ab");
$sql ='SELECT * FROM `companies` WHERE `email` ="'.$_POST["email"].'" &&`password`="'.$_POST["password"].'"';
$result=mysqli_query($db,$sql);
$myvalue=mysqli_num_rows($result);
$rows= mysqli_fetch_array($result);
if($myvalue>0)
{
	session_start();
	$_SESSION['company_name']=$rows["company"];
	header("Refresh: 0; url=company_profile.php");
}
exit();
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="styles/page_by_page/sign_in.css"/>
<link rel="stylesheet" href="styles/text_types.css"/>
<link rel="stylesheet" href="styles/button_and_other_elements.css"/>
<link rel="stylesheet" href="styles/header.css"/>
</head>
<body>

<?php include("top.php"); ?>






<div class="middle_flex">
<div class="middle_flex_left">

<img class="middle_flex_left_image" style="max-width: 50%;" src=" res/sign_in_pic.svg"/>
</div>



<div class="middle_flex_right">

<div class="middle_flex_right_form">

<div class="middle_flex_right_form_image_box">
<img class="middle_flex_right_form_image" src=" res/welcome_back_pic.svg"/>
</div>




<form method="post">

<span class="text_type_4 block">E-mail</span>

<input class="textbox block input_type_text" type="text" name="email"/>

<div style="margin-top: 60px; width: 100%; position: relative;" class="block">
<span class="text_type_4">Password</span> 
<span onclick="alert('asd');" class="text_type_5" style="cursor: pointer; position: absolute; right: 0;">Forgot your password?</span>
</div>

<input class="textbox block input_type_text" type="password" name="password"/>


<span class="block text_type_7" style="margin-top: 5px;">asd</span>


<div style="margin-top: 30px;" class="block">
<span class="text_type_5">Not a member?</span>
<span style="cursor: pointer;" class="text_type_6">&nbsp;Sign up</span>
</div>

<div class="block middle_flex_right_form_button_box">
<input class="button_with_background_2" type="submit" value="Sign in"/>
</div>



</form>

</div>
</div>
</div>


</body>
</html>
