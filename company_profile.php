<?php
include("back_end/sign_or_profile");
if_session_dont_exists();
?>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="styles/page_by_page/company_profile.css"/>
<link rel="stylesheet" href="styles/text_types.css"/>
<link rel="stylesheet" href="styles/button_and_other_elements.css"/>
<link rel="stylesheet" href="styles/header.css"/>
</head>
<body>

<div class="top">
<div class="top_items">
<div class="logo_box vertical-center">
<img style="cursor: pointer; height:80px;" onclick="window.location='index.php'" src="res/logom.png"/>
</div>


<div class="other_buttons_box vertical-center">
<button onclick="window.location='sign_up.php'" class="button_without_background">Get paid to test</button>
<button onclick="window.location='solutions.php'" class="button_without_background">Solutions</button>
<button onclick="window.location='index.php'" class="button_without_background">Pricing</button>
<button onclick="window.location='index.php'" class="button_without_background">Contact us</button>
<button onclick="window.location='try_for_free.php'" class="button_with_background">Try for free</button>
<?php sign_or_profile(); ?>
</div>

</div>
</div>






<div  class="middle">
<div style="width: 100%; height: 3%;"></div>
<div  class="block" style="text-align: -webkit-center;">
<span  class="text_type_13">Welcome Back <?php get_company_name(); ?></span>
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
