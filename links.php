<?php
   include("linksvars.php");
   
   $linksarray["http://sait.ca"] = "SAIT";
   $linksarray["http://facebook.com"] = "Facebook";
   $linksarray["http://twitter.com"] = "Twitter";
   $linksarray["http://google.com"] = "Google";
   $linksarray["http://oracle.com"] = "Oracle";
   $linksarray["http://youtube.com"] = "Youtube";
   
   include("header.php");
?>
      <table border="1">
	  <?php
/*	     for ($i=6; $i>=1; $i--)
		 {
		    print("<tr>");
			//for ($j=0; $j<2; $j++)
			//{
			   print("<td>$i</td>");
			   print("<td><a href='page$i.php'>Page $i</a></td>");
			//}
		    print("</tr>");
*/
	     $index = 1;
		 foreach ($linksarray as $url=>$text)
		 {
		    print("<tr>");
			print("<td>$index</td>");
			$index++;
			print("<td><a href='$url' target='_blank'>$text</a></td>");
		    print("</tr>");
		 }
	  ?>
	  </table>
   </body>

</html>
