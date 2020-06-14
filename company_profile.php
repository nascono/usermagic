<?php
session_start();
if(!isset($_SESSION['company_name']))
{
exit();
}
function get_company_name()
{
print($_SESSION['company_name']);
}
function sign_or_profile()
{
$return_value="<button onclick=\"window.location='sign_in.php'\" class=\"button_without_background\">Sign in</button>";
if(isset($_SESSION['company_name']))
{
$return_value="<button onclick=\"window.location='company_profile.php'\" class=\"button_without_background\">".$_SESSION['company_name']."</button>";
}
print($return_value);
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="styles/page_by_page/company_profile.css"/>
<link rel="stylesheet" href="styles/text_types.css"/>
<link rel="stylesheet" href="styles/button_and_other_elements.css"/>
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
<?php sign_or_profile();?>
</div>


</div>






<div  class="middle">
<div style="width: 100%; height: 3%;"></div>
<div  class="block" style="text-align: -webkit-center;">
<span  class="text_type_13">Welcome Back <?php get_name(); ?></span>
</div>

<div class="block" style="text-align: -webkit-center;">
<button style="margin-top: 4%;" onclick="window.location='create_qa_campaign.php';" class="select_box_radio_button_3"><span class="text_type_16">Start a Campaign</span></button>
</div>


<div class="block" style="text-align: -webkit-center;">
<button style="margin-top: 1%;" onclick="window.location='create_qa_campaign.php';" class="select_box_radio_button_3">
<span class="text_type_16">Go to your exsiting campaigns</span></button>
</div>

</div>
<script>





</script>

</body>
</html>
