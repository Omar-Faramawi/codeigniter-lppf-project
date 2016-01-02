<?php

/* Coopercentral Newsletter 2.0 functions page
   Please fill in the fields below and the run
   this page.  Once it's installed, please
   delete this file
*/

// PLEASE ENTER THE LINES BELOW............................................

// folder that holds these files
$folder = "newsletter";

// names of the newsletter tables

$news_table = "newsletters";
$users_table = "newsletter_users";

// mysql settings
$db_host = "localhost";
$db_user = "lppf_user";
$db_pass = "m?a[efH(LCTe";
$db_name = "lppf_lppf";

// newsletter admin login
$news_admin = "admin";
$news_pass = "admin";

// email address received by your subscribers
$sender_email = "info@lppf.org";

// newsletter archive
// If equals "0", users won't be able to view past newsletters.  If "1", they will be able to
$archives = "1";

// Newsletter footer that shows unsubscribe link
$unsubscribe_msg = "-----------------------------------------------------
To unsubscribe from this newsletter, click %%unsubscribe%%";

// The email message sent to users after they sign up
$success_msg[1] = "Dear %%email%%,

This email is to let you know you've successfully signed up for our newsletter.  Thank you for signing up.

To unsubscribe, click this %%unsubscribe%%";
$subject[1] = "Subscribed to newsletter";

// The email message sent to users after unsubscribing

$success_msg[2] = "Dear %%email%%,

This email is to let you know that you successfully unsubscribed from our newsletter.

Thank you for visiting our website!";
$subject[2] = "Unsubscribed from newsletter";

// DO NOT EDIT BELOW THIS LINE ...........................................

/* DB functions, no editing below this point */

function checkEmail($email){
    return preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email);
}

function db_connect($host, $user, $pass, $db) {
	mysql_connect($host, $user, $pass);
	mysql_select_db($db);
}

function db_field($field, $table, $condition) {
	$result = @mysql_query("SELECT $field FROM $table WHERE $condition");
	$row = mysql_fetch_array($result);
	return $row[$field];
}

function db_num($table, $condition) {
	$result = @mysql_query("SELECT * FROM $table WHERE $condition");
	return mysql_num_rows($result);
}

function db_max($table) {
	$result = @mysql_query("SELECT MAX(id) FROM $table");
	$row = mysql_fetch_array($result);
	return $row[0];
}

function parse_msg($msg, $email) {

	global $folder;

	$link = "http://".$_SERVER[SERVER_NAME]."/".$folder."/newsletter.php";
	$msg = str_replace("%%email%%",$email, $msg);
	$msg = str_replace("%%unsubscribe%%", "$link?email=$email&action=unsub", $msg);
	return $msg;

}

function newsletter_form($type) {

	if($type == "html") {
		$show_type = "HTML";
	} else if($type == "text") {
		$show_type = "Text";
	}

	if($show_type == "HTML") {
		$textarea = "<script type=\"text/javascript\">
			var editor1 = new WYSIWYG_Editor('editor1');
			editor1.display();
		</script>";
	} else if($show_type == "Text") {
		$textarea = "<textarea name=\"".$type."_message\" rows=\"30\" cols=\"100\">";
	}

	echo "<fieldset><legend>$show_type Newsletter</legend>
	<b>Use the form below to send out a $show_type Newsletter</b>
	<table style=\"font-size: 9pt; font-family: Verdana\">
	  <tr>
	    <td>Newsletter Subject</td>
		<td><input type=\"text\" name=\"".$type."_subject\" size=\"65\"></td>
	  </tr>
	  <tr>
	    <td colspan=2>Message</td>
	  </tr>
	  <tr>
	    <td colspan=2>".$textarea."</textarea></td>
	  </tr>
	  </table></fieldset>";

}

function send_newsletter($type, $subject, $msg) {

	global $unsubscribe_msg, $sender_email, $users_table, $_POST;

	if($type == "html") {
		$result = @mysql_query("SELECT * FROM $users_table WHERE email_type='html'") or die(mysql_error());
		while($row = mysql_fetch_array($result)) {
			$send_msg = $msg."\n\n".parse_msg($unsubscribe_msg,$row[email]);
			$send_msg = nl2br($send_msg);
			$send_msg = stripslashes($send_msg);
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: '.$sender_email.'' . "\r\n" .
			'Reply-To: '.$sender_email . "\r\n";
			$sender = '-f'.$sender_email.'';
			mail($row[email],$_POST[html_subject], $send_msg, $headers, $sender);
		}
	} else if($type == "text") {
		$result = @mysql_query("SELECT * FROM $users_table WHERE email_type='text'");
		while($row = mysql_fetch_array($result)) {
			$send_msg = $msg."\n\n".parse_msg($unsubscribe_msg,$row[email]);
			$send_msg = stripslashes($send_msg);
			$headers = 'From: '.$sender_email.'' . "\r\n" .
			'Reply-To: '.$sender_email . "\r\n";
			$sender = '-f'.$sender_email.'';
			mail($row[email],$_POST[text_subject],$send_msg, $headers, $sender);
		}
	}
}

?>