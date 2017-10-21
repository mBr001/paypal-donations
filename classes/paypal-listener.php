<?php namespace Listener;

require __DIR__.'/paypal-api.php';
require __DIR__.'/../includes/db.php';

use PaypalIPN;

$ipn = new PaypalIPN();

// Use the sandbox endpoint during testing.
$ipn->useSandbox();
$verified = $ipn->verifyIPN();
if ($verified) {
    /*
     * Process IPN
     * A list of variables is available here:
     * https://developer.paypal.com/webapps/developer/docs/classic/ipn/integration-guide/IPNandPDTVariables/
     */
    $item_name        = $_POST['item_name'];
    $item_number      = $_POST['item_number'];
    $payment_status   = $_POST['payment_status'];
    $payment_amount   = $_POST['mc_gross'];
    $payment_currency = $_POST['mc_currency'];
    $txn_id           = $_POST['txn_id'];
    $receiver_email   = $_POST['receiver_email'];
    $payer_email      = $_POST['payer_email'];
    $steamid          = $_POST['custom'];
    $payment_date = date('Y-m-d H:i:s');
    $db->query('INSERT INTO paypal (steamid, donation_tier, donation_amount, payment_email, payment_status, payment_date) VALUES (?, ?, ?, ?, ?, ?)', [
      $steamid,
      $item_name,
      $payment_amount,
      $payer_email,
      $payment_status,
      $payment_date
    ]);
}

// Reply with an empty 200 response to indicate to paypal the IPN was received correctly.
header("HTTP/1.1 200 OK");
