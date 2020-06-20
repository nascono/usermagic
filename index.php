<?php
session_start();
if(isset($_SESSION["company_name"]))
{
	header("Refresh: 0; url=company_profile.php");
	exit();
}
if(isset($_SESSION["user_name"]))
{
	header("Refresh: 0; url=user_profile.php");
	exit();
}
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles/header.css"/>
<link rel="stylesheet" href="styles/page_by_page/index.css"/>
<link rel="stylesheet" href="styles/text_types.css"/>
<link rel="stylesheet" href="styles/button_and_other_elements.css"/>

</head>
<body>

<?php include("top.php"); ?>

<div class="middle" style="margin-top: 4%;">

<div class="middle_box">
<div class="middle_texts">
<div class="middle_box_header_text_box">
Test your </br>Idea, Design, Product
</div>
<div class="middle_box_other_text_box" style="margin-top: 3%;">
Test your product remotely with</br> customers in your target audience.
</div>
<button onclick="window.location='try_for_free.php'" style="margin: 0; margin-top: 4%;" class="button_with_background">Try for free</button>
</div>

<div class="middle_box_other_image_box">
<img src="res/main_page_image.svg">
</div>
</div>





</body>
</html>