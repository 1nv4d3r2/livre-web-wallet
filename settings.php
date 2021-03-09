<?php

$server_url = "http://192.168.0.32/";  // ENTER WEBSITE URL ALONG WITH A TRAILING SLASH

$db_host = "localhost";
$db_user = "root";
$db_pass = "92930094";
$db_name = "wallet";

$rpc_host = "127.0.0.1";
$rpc_port = "2332";
$rpc_user = "userrpc";
$rpc_pass = "paswwordRPC2021";

$fullname = "LIVRE"; //Website Title (Do Not include 'wallet')
$short = "LVE"; //Coin Short (BTC)
$blockchain_tx_url = "http://191.252.186.97:3001/tx/"; //Blockchain Url
$support = "livredproject@gmail.com"; //Your support eMail
$hide_ids = array(1); //Hide account from admin dashboard
$donation_address = "EafxtrsseA1uRTCbHXN8roBEgBGvVVyDKj"; //Donation Address

$reserve = "0"; //This fee acts as a reserve. The users balance will display as the balance in the daemon minus the reserve. We don't reccomend setting this more than the Fee the daemon charges.

?>
