<?php
	/*
     * Donation Amounts
    */
    $amount_tier1 = "5.00"; // Donation Amount for Tier 1
    $amount_tier2 = "10.00"; // Donation Amount for Tier 2
    $amount_tier3 = "15.00"; // Donation Amount for Tier 3
    $amount_tier4 = "25.00"; // Donation Amount for Tier 4
    $amount_tier5 = "50.00"; // Donation Amount for Tier 5
	
	/*
	 * PayPal Settings
	*/
	
	// Enter the currency which you use. (for example: EUR, USD, CHF)
    $paypal_currency = "EUR";
	
	/*
     * PayPal URL
     * Sandbox-URL: https://www.sandbox.paypal.com/cgi-bin/webscr
     * Live-URL: https://www.paypal.com/cgi-bin/webscr
    */
    $paypal_url = "https://www.paypal.com/cgi-bin/webscr";

    // Enter your PayPal E-Mail here.
    $paypal_email = "yourpaypal@email.com";

    //Enter your Notify URL here.
    $notify_url = "https://yourwebsite.com/donate/classes/paypal-listener.php";

    // Enter your Success URL here.
    $success_url = "https://yourwebsite.com/donate/verify_success.php";

    // Enter your Error URL here.
    $cancel_url = "https://yourwebsite.com/donate/verify_error.php";
	
	/*
	 * Steam API Settings
	*/
	
	// Enter your API Key here - You can find it at: http://steamcommunity.com/dev/apikey
	$steamauth['apikey'] = "YOUR-API-KEY";
	
	// URL of your main website
	$steamauth['domainname'] = "http://yourdomain.com/donate";
	
	// URL which user get redirected to after logout
	$steamauth['logoutpage'] = "http://yourdomain.com/donate";
	
	// URL which user get redirected to after login
	$steamauth['loginpage'] = "http://yourdomain.com/donate";
