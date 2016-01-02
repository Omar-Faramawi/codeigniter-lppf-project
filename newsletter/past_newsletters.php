<?php

/* Coopercentral Newsletter 2.0 archive page
   If $archives="1" on the function page,
   users will be able to view past archives
*/
include("functions.php");
if($archives == "0") {
	echo "<center>This page is not available to view.  Contact the webmaster in order to view this page.</center>";
} else if($archives == "1") {
	db_connect($db_host, $db_user, $db_pass, $db_name);
	
	if(!isset($_GET[newsletterID])) {
		echo "<h1 align=\"center\">View Past Newsletters</h1>
		Below are all the newsletters that have been sent out<p>
		<table border=\"1\" cellpadding=\"3\">
		  <tr>
		    <th>Type</th>
			<th>Subject</th>
			<th>Date</th>
		  </tr>";

		  $result = @mysql_query("SELECT * FROM $news_table ORDER BY time DESC");
		  if(mysql_num_rows($result) < 1) {
			  echo "<tr><td colspan=3>No newsletters have been sent out yet</td></tr></table>";
		  } else {
			  while($row = mysql_fetch_array($result)) {
				  if($row[email_type] == "html") {
					  $email_type = "HTML";
				  } else if($row[email_type] == "text") {
					  $email_type = "Text";
				  }
				  echo "<tr>
					<td align=\"center\">$email_type</td>
					<td><a href=\"".$_SERVER[PHP_SELF]."?newsletterID=".$row[0]."\"><b>".$row[subject]."</b></a></td>
					<td>".date("Y-m-d",$row[time])."</td>
				  </tr>";
			  }
			  echo "</table>";
		  }
	} else {

		$result = @mysql_query("SELECT * FROM $news_table WHERE id='".$_GET[newsletterID]."'");
		$row = mysql_fetch_array($result);
		if($row[email_type] == "html") {
			$email_type = "HTML";
			$email_msg = nl2br($row[newsletter]);
		} else if($row[email_type] == "text") {
		   $email_type = "Text";
		   $email_msg = htmlspecialchars($row[newsletter]);
		   $email_msg = nl2br($email_msg);
		}
		echo "<h2 align=\"center\">Newsletter archive for ".date("Y-m-d",$row[time])."</h2>";
		echo "<center><table bgcolor=\"#000000\" cellpadding=\"1\" width=\"50%\">
		  <tr>
		    <td><table bgcolor=\"#FFFFFF\" cellpadding=\"6\" width=\"100%\">
			  <tr>
			    <td>Subject: <b>".$row[subject]."</b><br>
				Type: <b>$email_type</b><p>
				$email_msg</td>
			  </tr>
			 </table></td>
		  </tr>
		</table><p align=\"center\"><a href=\"".$_SERVER[PHP_SELF]."\">Return to list</a>";

	}

}

?>