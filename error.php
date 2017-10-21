<?php
    /*
    * Includes
    */
    require __DIR__.'/steamauth/steamauth.php';
    require __DIR__.'/classes/Helper.php';

    if (!isset($_SERVER['HTTP_REFERER']))
    Helper::redirect('/');
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
    <div style='margin: 30px auto; padding-bottom: 81px; text-align: center;'><br />
      <h3><b>Donate</b></h3>
      <h4><i>Payment Status</i></h4>
      <br />
      <div class="header-stroke"></div>
      <br />
      <span style='float:center;'><h3><b>Your payment was not successful!</b></h3>
      <h4>If this is wrong, please contact an administrator.</h4></span>
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
