<?php
    /*
    * Includes
    */
    require __DIR__.'/steamauth/steamauth.php';
    require __DIR__.'/includes/db.php';
    require __DIR__.'/classes/paypal-api.php';
	require __DIR__.'/config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PayPal Donations</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .table {
            table-layout: fixed;
            word-wrap: break-word;
        }
    </style>
  </head>
  <body style="background-color: #EEE;">
    <div class="container" style="margin-top: 30px; margin-bottom: 30px; padding-bottom: 10px; background-color: #FFF; height: 580px;">
		<h1>PayPal Donations</h1>
		<span class="small pull-left" style="padding-right: 10px;">by Trinia (FreakyLike)</span>
		<hr>
		<?php
if(!isset($_SESSION['steamid'])) {
    echo "<div style='margin: 30px auto; text-align: center;'>Welcome! Please login in order to donate.<br />";
    loginbutton();
	echo "</div>";
	}  else {
    include ('steamauth/userInfo.php');
	?>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">PayPal Donations</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li class="active"><a href="donate.php">Donate</a></li>
      <li><a href="account.php">Account Info</a></li>
    </ul>
  </div>
</nav>
  <span style='float:right;'><?php logoutbutton(); ?></span>
    <div style='margin: 30px auto; padding-bottom: 2px; text-align: center;'><br />
      <h3><b>Donate</b></h3>
      <h4><i>Please select the amount you wish to donate.</i></h4>
      <br />
      <div class="header-stroke"></div>
      <div style='padding-top: 75px; padding-bottom: 75px;'>
        <form action="<?=$paypal_url?>" method="post">
          <input type="hidden" name="business" value="<?=$paypal_email?>" />
          <input type="hidden" name="notify_url" value="<?=$notify_url?>" />
          <input type="hidden" name="cancel_return" value="<?=$cancel_url?>" />
          <input type="hidden" name="return" value="<?=$success_url?>" />
          <input type="hidden" name="rm" value="2" />
          <input type="hidden" name="lc" value="" />
          <input type="hidden" name="no_shipping" value="1" />
          <input type="hidden" name="no_note" value="1" />
          <input type="hidden" name="currency_code" value="<?=$paypal_currency?>" />
          <input type="hidden" name="page_style" value="paypal" />
          <input type="hidden" name="charset" value="utf-8" />
          <input type="hidden" name="item_name" value="Donation: Tier I" />
          <input type="hidden" value="_xclick" name="cmd"/>
          <input type="hidden" name="amount" value="<?=$amount_tier1?>" />
          <input type="hidden" name="custom" value="<?=$steamprofile['steamid_ingame']?>">
          <button name="submit" action="<?=$paypal_url?>" type="submit" class="btn btn-primary">Tier I - <?=$amount_tier1?> <?=$paypal_currency?></button>
        </form>
        <form action="<?=$paypal_url?>" method="post">
          <input type="hidden" name="business" value="<?=$paypal_email?>" />
          <input type="hidden" name="notify_url" value="<?=$notify_url?>" />
          <input type="hidden" name="cancel_return" value="<?=$cancel_url?>" />
          <input type="hidden" name="return" value="<?=$success_url?>" />
          <input type="hidden" name="rm" value="2" />
          <input type="hidden" name="lc" value="" />
          <input type="hidden" name="no_shipping" value="1" />
          <input type="hidden" name="no_note" value="1" />
          <input type="hidden" name="currency_code" value="<?=$paypal_currency?>" />
          <input type="hidden" name="page_style" value="paypal" />
          <input type="hidden" name="charset" value="utf-8" />
          <input type="hidden" name="item_name" value="Donation: Tier II" />
          <input type="hidden" value="_xclick" name="cmd"/>
          <input type="hidden" name="amount" value="<?=$amount_tier2?>" />
          <button name="submit" action="<?=$paypal_url?>" type="submit" class="btn btn-primary">Tier II - <?=$amount_tier2?> <?=$paypal_currency?></button>
        </form>
        <form action="<?=$paypal_url?>" method="post">
          <input type="hidden" name="business" value="<?=$paypal_email?>" />
          <input type="hidden" name="notify_url" value="<?=$notify_url?>" />
          <input type="hidden" name="cancel_return" value="<?=$cancel_url?>" />
          <input type="hidden" name="return" value="<?=$success_url?>" />
          <input type="hidden" name="rm" value="2" />
          <input type="hidden" name="lc" value="" />
          <input type="hidden" name="no_shipping" value="1" />
          <input type="hidden" name="no_note" value="1" />
          <input type="hidden" name="currency_code" value="<?=$paypal_currency?>" />
          <input type="hidden" name="page_style" value="paypal" />
          <input type="hidden" name="charset" value="utf-8" />
          <input type="hidden" name="item_name" value="Donation: Tier III" />
          <input type="hidden" value="_xclick" name="cmd"/>
          <input type="hidden" name="amount" value="<?=$amount_tier3?>" />
          <button name="submit" action="<?=$paypal_url?>" type="submit" class="btn btn-primary">Tier III - <?=$amount_tier3?> <?=$paypal_currency?></button>
        </form>
        <form action="<?=$paypal_url?>" method="post">
          <input type="hidden" name="business" value="<?=$paypal_email?>" />
          <input type="hidden" name="notify_url" value="<?=$notify_url?>" />
          <input type="hidden" name="cancel_return" value="<?=$cancel_url?>" />
          <input type="hidden" name="return" value="<?=$success_url?>" />
          <input type="hidden" name="rm" value="2" />
          <input type="hidden" name="lc" value="" />
          <input type="hidden" name="no_shipping" value="1" />
          <input type="hidden" name="no_note" value="1" />
          <input type="hidden" name="currency_code" value="<?=$paypal_currency?>" />
          <input type="hidden" name="page_style" value="paypal" />
          <input type="hidden" name="charset" value="utf-8" />
          <input type="hidden" name="item_name" value="Donation: Tier IV" />
          <input type="hidden" value="_xclick" name="cmd"/>
          <input type="hidden" name="amount" value="<?=$amount_tier4?>" />
          <button name="submit" action="<?=$paypal_url?>" type="submit" class="btn btn-primary">Tier IV - <?=$amount_tier4?> <?=$paypal_currency?></button>
        </form>
        <form action="<?=$paypal_url?>" method="post">
          <input type="hidden" name="business" value="<?=$paypal_email?>" />
          <input type="hidden" name="notify_url" value="<?=$notify_url?>" />
          <input type="hidden" name="cancel_return" value="<?=$cancel_url?>" />
          <input type="hidden" name="return" value="<?=$success_url?>" />
          <input type="hidden" name="rm" value="2" />
          <input type="hidden" name="lc" value="" />
          <input type="hidden" name="no_shipping" value="1" />
          <input type="hidden" name="no_note" value="1" />
          <input type="hidden" name="currency_code" value="<?=$paypal_currency?>" />
          <input type="hidden" name="page_style" value="paypal" />
          <input type="hidden" name="charset" value="utf-8" />
          <input type="hidden" name="item_name" value="Donation: Tier V" />
          <input type="hidden" value="_xclick" name="cmd"/>
          <input type="hidden" name="amount" value="<?=$amount_tier5?>" />
          <button name="submit" action="<?=$paypal_url?>" type="submit" class="btn btn-primary">Tier V - <?=$amount_tier1?> <?=$paypal_currency?></button>
        </form>
      </div>
    </div>
		<?php
		}
		?>
		<hr>
		<div class="pull-right">
			<i>Powered by <a href="http://steampowered.com" target="_blank">Steam</a></i>
		</div>
		Credits to <a href="https://github.com/SmItH197/SteamAuthentication" target="_blank">BlackCetha</a><br />
	</div>

	<!--Version 3.2-->
  </body>
</html>
