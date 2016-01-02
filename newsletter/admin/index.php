<?php
/* Coopercentral Newsletter 2.0 admin page
   Locate the user/pass to login on the
   functions.php page
*/
 error_reporting(0);
include("../functions.php");
db_connect($db_host, $db_user, $db_pass, $db_name);

session_start();
ob_start();
echo "<h1 align=\"center\">Newsletter Admin</h1>";
if(!isset($_SESSION[cc_newsletter_admin])) {
	if(!isset($_POST[submit])) {
		echo "<center>Login below to access the newsletter panel<p>
		<form method=\"POST\" action=\"".$_SERVER[PHP_SELF]."\">
		<table>
		  <tr>
		    <td>Username</td>
			<td><input type=\"text\" name=\"username\"></td>
		  </tr>
		  <tr>
		    <td>Password</td>
			<td><input type=\"password\" name=\"password\"></td>
		  </tr>
		  <tr>
		    <td colspan=2 align=center><input type=\"submit\" name=\"submit\" value=\"Login\"></td>
		  </tr>
		</table></form></center>";

	} else if(isset($_POST[submit]) && empty($_POST[username]) or empty($_POST[password])) {

		echo "<center><b>Please enter a username/password</b></center>";

	} else if(isset($_POST[submit]) && !empty($_POST[username]) && !empty($_POST[password])) {

		if($_POST[username] != $news_admin || $_POST[password] != $news_pass) {

			echo "<center><font color=\"red\"><b>Invalid username/password, please try again</b></font></center>";

		} else {

			$_SESSION[cc_newsletter_admin] = $_POST[username];
			header("Location: $_SERVER[PHP_SELF]");
		
		}

	}

} else {

	echo "<hr><table width=\"100%\"><tr><td width=\"50%\" align=\"left\"><font size=\"-1\">Logged in as: <b>".$_SESSION[cc_newsletter_admin]."</b></font></td>
		<td width=\"50%\" align=\"right\"><font size=\"-1\"><a href=\"".$_SERVER[PHP_SELF]."?action=logout\">Logout</a></font></td></tr></table><p>";

	if(!isset($_GET[action])) {

		if(!isset($_GET[view])) {
			$view = "news";

		} else {
			$view = $_GET[view];
		}
		if($view == "users") {
			$sql = "SELECT * FROM $users_table ORDER BY id DESC";
			$show = "<b>Show Users</b> | <a href=\"".$_SERVER[PHP_SELF]."?view=news\">Show Newsletters</a>";
			$add = "";
		} else if($view == "news") {
			$sql = "SELECT * FROM $news_table ORDER BY id DESC";
			$show = "<a href=\"".$_SERVER[PHP_SELF]."?view=users\">Show Users</a> | <b>Show Newsletters</b>";
			$add = "<a href=\"".$_SERVER[PHP_SELF]."?action=add_news\">Send Newsletter</a>";
		}

		echo "<center>Use the table below to view/remote newsletters and users, and send out a newsletter<p>
		<table>
		  <tr>
		    <td align=\"left\">$add</td>
			<td align=\"right\">$show</td>
		  </tr>
		  <tr>
		    <td colspan=2>
			<table border=\"1\" cellpadding=\"3\" width=\"100%\">";

			  if($view == "users") {
					echo "<tr>
					<th>ID</th>
					<th>Type</th>
					<th>Email</th>
					<th>Added</th>
					<th>Remove</th>";
					$result = @mysql_query($sql);
					if(mysql_num_rows($result) < 1) {
						echo "<tr><td colspan=5>There are no email addresses in the newsletter database yet</td></tr></table>";
					} else {
						while($row = mysql_fetch_array($result)) {
							echo "<tr onMouseOver=\"this.bgColor='#FFFFAA';\" onMouseOut=\"this.bgColor='#FFFFFF';\"><td align=center>".$row[0]."</td>
							<td>".$row[email_type]."</td>
							<td>".$row[email]."</td>
							<td>".date("Y-m-d",$row[time])."</td>
							<td align=center><a href=\"".$_SERVER[PHP_SELF]."?action=del_user&id=$row[0]\">X</a></td>
						</tr>";
						}
					}
			  } else if($view == "news") {
				  echo "<tr><th>ID</th>
				  <th>Type</th>
				  <th>Subject</th>
				  <th>Sent</th>
				  <th>Remove</th>";
				  $result = @mysql_query($sql);
				  if(mysql_num_rows($result) < 1) {
					  echo "<tr><td colspan=5>You have not sent out any HTML or Text newsletters yet</td></tr></table>";
				  } else {
					  while($row = mysql_fetch_array($result)) {
						  echo "<tr onMouseOver=\"this.bgColor='#FFFFAA';\" onMouseOut=\"this.bgColor='#FFFFFF';\"><td align=center>".$row[0]."</td>
						  <td>".$row[email_type]."</td>
						  <td>".$row[subject]."</td>
						  <td>".date("Y-m-d",$row[time])."</td>
						  <td align=center><a href=\"".$_SERVER[PHP_SELF]."?action=del_news&id=$row[0]\">X</a></td>
						</tr>";
					  }
					  echo "</table>";
				  }
			  }			  

	} else if($_GET[action] == "logout") {
		unset($_SESSION[cc_newsletter_admin]);
		session_destroy();
		header("Location: $_SERVER[PHP_SELF]");

	} else if($_GET[action] == "del_user" && isset($_GET[id])) {

		if($_GET[step] != "2") {
			echo "<center><b>Are you sure you want to delete this email address?</b><p>
			<a href=\"".$_SERVER[PHP_SELF]."?action=del_user&id=".$_GET[id]."&step=2\">Yes</a> | <a href=\"".$_SERVER[PHP_SELF]."\">No</a>";
		} else if($_GET[step] == "2") {
			$result = @mysql_query("DELETE FROM $users_table WHERE id='".$_GET[id]."'");
			echo "<center>You successfully removed this user from the newsletter database</center>";
		}
	} else if($_GET[action] == "del_news" && isset($_GET[id])) {

		if($_GET[step] != "2") {
			echo "<center><b>Are you sure you want to delete this newsletter?</b><p>
			<a href=\"".$_SERVER[PHP_SELF]."?action=del_news&id=".$_GET[id]."&step=2\">Yes</a> | <a href=\"".$_SERVER[PHP_SELF]."\">No</a>";
		} else if($_GET[step] == "2") {
			$result = @mysql_query("DELETE FROM $news_table WHERE id='".$_GET[id]."'");
			echo "<center>You successfully removed this newsletter from the database</center>";
		}
	} else if($_GET[action] == "add_news") {

		if(!isset($_GET[email_type])) {

			echo "<center>What kind of newsletter do you want to send out?<p>
			<a href=\"".$_SERVER[PHP_SELF]."?action=add_news&email_type=html\">HTML</a>
			| <a href=\"".$_SERVER[PHP_SELF]."?action=add_news&email_type=text\">Text</a>
			| <a href=\"".$_SERVER[PHP_SELF]."?action=add_news&email_type=both\">Both</a>";

		} else if(isset($_GET[email_type])) {

			if(!isset($_POST[submit])) {

				if($_GET[email_type] == "html" OR $_GET[email_type] == "both") {
					$form_add = "onsubmit=\"editor1.prepareSubmit()\" ";
				}
				if($_GET[email_type] == "html" OR $_GET[email_type] == "both") {
					echo "<script type=\"text/javascript\" src=\"../htmleditor/editor.js\"></script>";
				}
				echo "<h3 align=center>Send out a newsletter</h3><center>
				<table width=\"60%\" align=\"center\" style=\"font-size: 9pt; font-family: Verdana\">
				  <tr>
					<td><form ".$form_add."method=\"POST\" action=\"".$_SERVER[PHP_SELF]."?action=add_news&email_type=".$_GET[email_type]."\">
					<input type=\"hidden\" name=\"email_type\" value=\"".$_GET[email_type]."\">";
					if($_GET[email_type] == "html") {
						newsletter_form("html");
					} else if($_GET[email_type] == "text") {
						newsletter_form("text");
					} else if($_GET[email_type] == "both") {
						newsletter_form("html");
						echo "</td></tr><tr><td>&nbsp;</td></tr><tr><td>";
						newsletter_form("text");
					}
					echo "</td></tr>
					<tr><td colspan=2 align=center><input type=submit name=submit value=submit></form></td>
					</tr></table>";

			} else if(isset($_POST[submit])) {
				$continue = 1;
				if($_GET[email_type] == "html") {
					if(empty($_POST[html_subject]) or empty($_POST[html_message])) {
						$continue = 0;
					} else if(!empty($_POST[html_subject]) && !empty($_POST[html_message])) {
						$continue = 1;
					}
				} else if($_GET[email_type] == "text") {
					if(empty($_POST[text_subject]) or empty($_POST[text_message])) {
						$continue = 0;
					} else if(!empty($_POST[text_subject]) or !empty($_POST[text_message])) {
						$continue = 1;
					}
				} else if($_GET[email_type] == "both") {
					if(empty($_POST[html_subject]) or empty($_POST[html_message]) or empty($_POST[text_subject]) or empty($_POST[text_message])) {
						$continue = 0;
					} else if(!empty($_POST[html_subject]) && !empty($_POST[html_message]) && !empty($_POST[text_subject]) && !empty($_POST[text_message])) {
						$continue = 1;
					}
				}
				if($continue == "0") {
					print_r($_POST);
					echo "<center><font color=\"red\"><b>All fields need to be entered before you can send out this newsletter</b></font></center>";
				} else if($continue == "1") {
					if($_GET[email_type] == "html") {
						send_newsletter($_GET[email_type],$_POST[html_subject],$_POST[html_message]);
						$insert = @mysql_query("INSERT INTO $news_table VALUES ('".(db_max($news_table)+1)."', 'html', '".$_POST[html_subject]."', '".$_POST[html_message]."', '".time()."')");
					} else if($_GET[email_type] == "text") {
						send_newsletter($_GET[email_type],$_POST[text_subject],$_POST[text_message]);
						$insert = @mysql_query("INSERT INTO $news_table VALUES ('".(db_max($news_table)+1)."', 'text', '".$_POST[text_subject]."', '".$_POST[text_message]."', '".time()."')");
					} else if($_GET[email_type] == "both") {
						send_newsletter("html", $_POST[html_subject], $_POST[html_message]);
						send_newsletter("text", $_POST[text_subject], $_POST[text_message]);
						$insert = @mysql_query("INSERT INTO $news_table VALUES ('".(db_max($news_table)+1)."', 'html', '".$_POST[html_subject]."', '".$_POST[html_message]."', '".time()."')");
						$insert2 = @mysql_query("INSERT INTO $news_table VALUES ('".(db_max($news_table)+1)."', 'text', '".$_POST[text_subject]."', '".$_POST[text_message]."', '".time()."')");
					}
					echo "<center>You successfully sent the newsletter to the following people</center>
					<center><table border=\"1\" width=\"50%\" cellpadding=\"3\">
					  <tr>
					    <td width=\"50%\"><b>HTML subscribers</b><br>";
						if($_GET[email_type] == "html" OR $_GET[email_type] == "both") {
							$result = @mysql_query("SELECT * FROM $users_table WHERE email_type = 'html'");
							while($row = mysql_fetch_array($result)) {
								echo "".$row[email]."<br>\n";
							}
						} else if($_GET[email_type] == "text") {
							echo "--No subscribers--";
						}						
						echo "</td><td width=\"50%\"><b>Text subscribers</b><br>";
						if($_GET[email_type] == "text" OR $_GET[email_type] == "both") {
							$result = @mysql_query("SELECT * FROM $users_table WHERE email_type = 'text'");
							while($row = mysql_fetch_array($result)) {
								echo "".$row[email]."<br>\n";
							}
						} else if($_GET[email_type] == "html") {
							echo "--No subscribers--";
						}
						echo "</tr></table>";
				}
			}

		}

	}

}

if(isset($_SESSION[cc_newsletter_admin]) && isset($_GET[action])) {
	echo "<p align=\"center\"><a href=\"".$_SERVER[PHP_SELF]."\">Return</a>";
}

?>