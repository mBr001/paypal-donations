
<?php
    /*
    * Includes
    */
    require __DIR__.'/steamauth/steamauth.php';

    $total_donated = "Unknown";
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
      <li><a href="donate.php">Donate</a></li>
      <li class="active"><a href="account.php">Account Info</a></li>
    </ul>
  </div>
</nav>
  <span style='float:right;'><?php logoutbutton(); ?></span>
		<br />
    <div style='margin: 30px auto; text-align: center;'>
      <h3><b>Account Info</b></h3>
      <h4><i>Here are all your account details.</i></h4><br />
      <div class="header-stroke"></div><br />
      <h4>Username: <?=$steamprofile['personaname']?></h4>
      <h4>SteamID: <?=$steamprofile['steamid_ingame']?></h4>
      <h4>SteamID64: <?=$steamprofile['steamid']?></h4>
      <br /><br />

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
