<?php
session_start();

function sign_or_profile()
{
	$return_value="<button onclick=\"window.location='sign_in.php'\" class=\"button_without_background\">Sign in</button>";
	if(isset($_SESSION['company_name']))
	{
		$return_value="<button onclick=\"window.location='company_profile.php'\" class=\"button_without_background\">".$_SESSION['company_name']."'s Dashboard"."</button>";
	}
	else if(isset($_SESSION['user_name']))
	{
		$return_value="<button onclick=\"window.location='user_profile.php'\" class=\"button_without_background\">".$_SESSION['user_name']."'s Dashboard"."</button>";
	}
	print($return_value);
}
function log_out_button()
{
	$return_value="";
	if(isset($_SESSION['company_name']) OR isset($_SESSION['user_name']))
	{
		$return_value="<button onclick=\"window.location='log_out.php'\" class=\"button_without_background\">"."Log Out"."</button>";
	}
	print($return_value);
}
function is_company_or_user_dont_show()
{
	$val ="";
	if(isset($_SESSION['company_name']) OR isset($_SESSION['user_name']))
	{
		$val='style="display: none;"';
	}
	print($val);
}
function is_user_show()
{
	if(isset($_SESSION['user_name']))
	{
		print("<button onclick=\"window.location='joinable_campaigns.php'\" class=\"button_without_background\">Joinable Campaigns</button>");
		print("<button onclick=\"window.location='approved_campaigns.php'\" class=\"button_without_background\">Approved Campaigns</button>");
		print("<button onclick=\"window.location='disapproved_campaigns.php'\" class=\"button_without_background\">Disapproved Campaigns</button>");
	}
	
}
?>
<div class="top">
<div class="top_items">
<div class="logo_box vertical-center">
<img style="cursor: pointer; height:80px;" onclick="window.location='index.php'" src="res/logom.png"/>
</div>


<div class="other_buttons_box vertical-center">
<button <?php is_company_or_user_dont_show(); ?> onclick="window.location='sign_up.php'" class="button_without_background">Get paid to test</button>
<button <?php is_company_or_user_dont_show(); ?>  onclick="window.location='solutions.php'" class="button_without_background">Solutions</button>
<button <?php is_company_or_user_dont_show(); ?>  onclick="window.location='index.php'" class="button_without_background">Pricing</button>
<button <?php is_company_or_user_dont_show(); ?>  onclick="window.location='index.php'" class="button_without_background">Contact us</button>
<button <?php is_company_or_user_dont_show(); ?>  onclick="window.location='try_for_free.php'" class="button_with_background">Try for free</button>
<?php is_user_show(); sign_or_profile(); log_out_button(); ?>
</div>

</div>
</div>