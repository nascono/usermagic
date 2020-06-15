<?php
session_start();
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