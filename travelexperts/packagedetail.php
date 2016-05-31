
<?php

/** File creator: Gia Thanh Vuong
 *
 */

if (!isset($_GET['PackageId']))
header("Location: index.php");

require_once("Package.class");
require_once("Connection.class");
include_once("Service.class");
$PackageId = $_GET['PackageId'];
$conn = new Connection();
$sql ="SELECT * FROM `packages` WHERE `PackageId` LIKE $PackageId";
$result = $conn->getConn()->query($sql);
if ($result) {
  $row = $result->fetch_assoc();
}
$pkg = new Package($row['PackageId'],$row['PkgName'], $row['PkgStartDate'], $row['PkgEndDate'], $row['PkgDesc'], $row['PkgBasePrice']+$row['PkgAgencyCommission'], $row['PkgImg']);

$sql = "SELECT ProdName, SupName FROM `packages_products_suppliers` INNER JOIN products_suppliers ON packages_products_suppliers.ProductSupplierId = products_suppliers.ProductSupplierId INNER JOIN products ON products.ProductId = products_suppliers.ProductId INNER JOIN suppliers ON products_suppliers.SupplierId = suppliers.SupplierId WHERE PackageId LIKE $PackageId";
$result = $conn->getConn()->query($sql);
$serviceArray = array();
if ($result) {
  while ($row = $result->fetch_assoc()) {
    $serviceArray[] = new Service($row['ProdName'], $row['SupName']);
  }
}
$conn->close();
?>

<?php
  $title = "Travel Experts";
  include("header.php");
  include("navbar.php");
 ?>

 <div class="jumbotron">
   <div class="container text-center">
     <h1>Package Detail</h1>

   </div>
 </div>

 <div class="container">
   <div class="panel panel-default">
     <div class="panel-heading">
       <h4 class="text-center"><?php echo$pkg->pkgName ?></h4>
     </div>
     <div class="panel-body"> <img src="<?php echo $pkg->thumbnail  ?>" class="img-responsive" style="width:100%" alt="Image">
     </div>
     <div class="panel-footer text-center">
       <p> <?php echo $pkg->pkgDsc ?> </p>
       <table class="table">
         <tr>
           <td>
             Start date
           </td>
           <td>
             <?php echo $pkg->startDate->format($pkg->dateFormat) ?>
           </td>
         </tr>
         <tr>
           <td>
             End date
           </td>
           <td>
             <?php echo $pkg->endDate->format($pkg->dateFormat) ?>
           </td>
         </tr>
         <tr>
           <td><strong> Services </strong></td>
           <td>
             <strong> Supplier</strong>
           </td>

         </tr>
         <?php
         foreach ($serviceArray as $serv) {
           echo "<tr> <td>";
           echo $serv->ProdName;
           echo "</td>";
           echo "<td>";
           echo $serv->SupName;
           echo "</td> </tr>";
         }
         ?>
       </table>
       <?php printf ("<p><strong> CAD %0.2f </strong></p>", $pkg->pkgPrice); ?>
       <?php echo "<button class='btn btn-default' onclick=\"location.href='order.php?PackageId=$PackageId'\">Order this Package</button>";?>

     </div>


   </div>
 </div>

<?php
  include("footer.php");
 ?>
