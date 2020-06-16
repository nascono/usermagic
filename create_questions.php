<?php
/*if(!isset($_POST))
{
	header("Location: index.php");
	exit();
}*/
if(!isset($_SESSION['company_name']))
{
	header("Location: index.php");
	exit();
}

?>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="styles/page_by_page/create_questions.css"/>
<link rel="stylesheet" href="styles/text_types.css"/>
<link rel="stylesheet" href="styles/button_and_other_elements.css"/>
<link rel="stylesheet" href="styles/header.css"/>
</head>
<body>
<?php include("top.php"); ?>
<div class="middle">
<?php
echo"<pre>";
print_r($_POST);
?>
</div>
</body>
</html>