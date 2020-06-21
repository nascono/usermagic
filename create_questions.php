<?php
session_start();
if(!isset($_SESSION['company_name']) OR !isset($_SESSION['campaign_id']))
{
header("Location: index.php");
exit();
}
if($_POST)
{
	$test_name = $_POST["test_name"];
	$question_texts_json = json_encode($_POST["question_texts"]);
	$db = mysqli_connect("eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","nlc74woxcs5sif1d","mxbfj4mgfnaj3bi1","nb62b3bzhn3djx6q");
	$sql ="INSERT INTO `tests` (`id`, `campaign_id`,`company_id`, `reached_user`, `test_json`, `test_name`) VALUES (NULL, '".
	$_SESSION['campaign_id']."', '".
	$_SESSION['company_id']."', '"."0"."', '".
	$question_texts_json."', '".
	$test_name."');";
	mysqli_query($db,$sql);

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
<div class="questions">

<div class="question_box">
<span>Type your question</span>
<input class="block" type="text" class="question_input_box"/>
</div>

</div>
<div class="button_box">
</div>
</body>
</html>