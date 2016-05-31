<?php

/** File creator: Gia Thanh Vuong
 *  Check if a customer has logged in, should be included at the start of the file 
 */
require_once("CustomerStatus.class");
$customerStatus = new CustomerStatus();
$isLogged = $customerStatus->isLoggedIn;
?>
