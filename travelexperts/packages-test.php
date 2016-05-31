<?php
/** File creator: Gia Thanh Vuong
 *
 */

require_once("Package.class");
require_once("Connection.class");
$conn = new Connection();
$sql ="SELECT * FROM `packages`";
$result = $conn->getConn()->query($sql);
//print_r($result);
if ($result) {
  $pkgArray = array();
  while ($row = $result->fetch_assoc()) {
    //print_r($row);
    $pkgArray[] = new Package($row['PackageId'],$row['PkgName'], $row['PkgStartDate'], $row['PkgEndDate'], $row['PkgDesc'], $row['PkgBasePrice']+$row['PkgAgencyCommission'], $row['PkgImg']);
  }

}

// div counter
$i = 0;
foreach ($pkgArray as $pkg) {
if ($i == 0) {
  echo "<div class='row text-center'>";
}

  $pkg->show();
  $i++;

  if ($i == 3) {
      echo "</div>";
      $i = 0;
  }
}
if ($i != 0) {
    echo "</div>";
  }

$conn->close();

 ?>
