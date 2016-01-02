<?php

/* Coopercentral Newsletter 2.0 form page
   Use this page to subscribe/unsubscribe
   to the newsletter
*/

include("functions.php");
db_connect($db_host, $db_user, $db_pass, $db_name);

echo "<h1 align=\"center\">Newsletter</h1>";

if(isset($_GET[email])) {
	$email = $_GET[email];
}
if(isset($_GET[action])) {
	$action = $_GET[action];
}

if(!isset($email) && !isset($action)) {

	echo "<center>Use the form below to subscribe to our newsletter<p>
	<form method=\"GET\" action=\"".$_SERVER[PHP_SELF]."\">
	<table bgcolor=\"#000000\" cellpadding=\"1\" width=\"25%\">
	  <tr>
	    <td><table width=\"100%\" bgcolor=\"#F1F1F1\">
		  <tr>
		    <td><table><tr><td>Email Address</td>
			<td><input type=\"text\" name=\"email\" size=\"30\"></td>
		  </tr>
		  <tr>
		    <td>Email Type</td>
			<td><input type=\"radio\" name=\"email_type\" value=\"html\"> HTML <input type=\"radio\" name=\"email_type\" value=\"text\"> Text</td>
		  </tr>
		  <tr>
		    <td>Action</td>
			<td><input type=\"radio\" name=\"action\" value=\"sub\"> Subscribe <input type=\"radio\" name=\"action\" value=\"unsub\"> Unsubscribe</td>
		  <tr>
		    <td colspan=2 align=center><input type=submit value=submit></td>
		  </tr>
		 </table></td>
		  </tr>
		</td>
	   </tr>
	 </table></form></center>";

} else if((!empty($email) && empty($action)) || (empty($email) && !empty($action)) || (empty($email))) {

	echo "<center><font color=\"red\"><b>Please enter all fields to subscribe to this email</b></font></center>";

} else if(!empty($email) && !empty($action)) {

	if($_GET[action] == "unsub") {

		// check for user
		if(db_num($users_table,"email='$email'") < 1) {
			echo "<center><font color=\"red\"><b>The email address entered is not in the database</b></font></center>";
		} else {

			// unsubscribe user
			$remove = @mysql_query("DELETE FROM $users_table WHERE email='".$email."'");
			$send_msg = parse_msg($success_msg[2], $email);
			$headers = 'From: '.$sender_email.'' . "\r\n" .
			'Reply-To: '.$sender_email . "\r\n";
			$sender = '-f'.$sender_email.'';
			mail($email, $subject[2], $send_msg, $headers, $sender);
			echo "<center><b>You have successfully been removed from this list</b></center>";

		}
	
	} else if($_GET[action] == "sub") {

		// check existing email
		if(db_num($users_table,"email='$email'") > 0) {
			echo "<center><font color=\"red\"><b>This email address is already subscribed to this newsletter</b></center>";

		} else {

			// subscribe user
			if(empty($_GET[email_type]) || !checkEmail($email)) {
				echo "<center><font color=\"red\"><b>Be sure you enter an email type (HTML/Text) and make sure your email address entered is a valid email</b></font></center>";
			} else {
							
				$insert = @mysql_query("INSERT INTO $users_table VALUES ('".(db_max($users_table)+1)."', '".$email."', '".$_GET[email_type]."', '".time()."')");
				$send_msg = parse_msg($success_msg[1], $email);
				$headers = 'From: '.$sender_email.'' . "\r\n" .
				'Reply-To: '.$sender_email . "\r\n";
				$sender = '-f'.$sender_email.'';
				mail($email, $subject[1], $send_msg, $headers, $sender);
				echo "<center>You successfully subscribed <b>".$email."</b> to our newsletter.  Thank you for signing up.</center>";

			}

		}

	}	

}

?>