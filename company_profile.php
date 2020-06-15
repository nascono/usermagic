<?php
session_start();
if(!isset($_SESSION['company_name']))
{
exit();
header("Location: index.php");
}

function get_company_name()
{
print($_SESSION['company_name']);
}
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

<?php include("top.php"); ?>






<div  class="middle">
<div style="width: 100%; height: 3%;"></div>
<div  class="block" style="text-align: -webkit-center;">
<span  class="text_type_13">Welcome Back <?php get_company_name(); ?></span>
</div>

<div class="block" style="text-align: -webkit-center;">
<button style="margin-top: 4%;" onclick="window.location='create_qa_campaign.php';" class="select_box_radio_button_3">
<span class="text_type_16">Start a Campaign</span></button>
</div>


<div class="block" style="text-align: -webkit-center;">
<button style="margin-top: 1%;" onclick="window.location='create_qa_campaign.php';" class="select_box_radio_button_3">
<span class="text_type_16">Go to your exsiting campaigns</span></button>
</div>

<div class="block" style="text-align: -webkit-center;">
<button style="margin-top: 1%;" onclick="window.location='?logout';" class="select_box_radio_button_3">
<span class="text_type_16">Log out</span></button>
</div>

</div>
<script>





</script>

</body>
</html>
