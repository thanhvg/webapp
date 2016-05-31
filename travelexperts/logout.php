<?php
/** File creator: Gia Thanh Vuong
 *  kick customer out, delet session
 */

require_once("CustomerStatus.class");
$customerStatus = new CustomerStatus();
if ($customerStatus->isLoggedIn) {
  $customerStatus->logout();
  header("Location: index.php");
}
?>
