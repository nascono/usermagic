<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="text_types.css"/>
</head>
<body>

<div class="top">

<div class="logo_box vertical-center">
<img style="cursor: pointer;" onclick="window.location='index.php'" src="res/logo.svg"/>
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

<img class="middle_flex_left_image" style="max-width: 50%;" src=" res/sign_in_pic.svg"/>
</div>



<div class="middle_flex_right">

<div class="middle_flex_right_form">

<div class="middle_flex_right_form_image_box">
<img class="middle_flex_right_form_image" src=" res/welcome_back_pic.svg"/>
</div>




<form method="post">

<span class="text_type_4 block">E-mail</span>

<input class="textbox block text_type_4" type="text" name="email"/>

<div style="margin-top: 60px; width: 100%; position: relative;" class="block">
<span class="text_type_4">Password</span> 
<span onclick="alert('asd');" class="text_type_5" style="cursor: pointer; position: absolute; right: 0;">Forgot your password?</span>
</div>

<input class="textbox block" type="password" name="password"/>


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
