<?php
session_start();
if(!isset($_SESSION['user_name']))
{
header("Location: index.php");
exit();

}

function get_user_name()
{
print($_SESSION['user_name']);
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
<span  class="text_type_13">Welcome Back <?php get_user_name(); ?></span>
</div>



</div>

</div>
<script>





</script>

</body>
</html>
