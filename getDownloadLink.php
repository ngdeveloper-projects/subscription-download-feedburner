<?php
include ("dbConfig.php");
/*
Site: Javadomain.in
Author: Naveen kumar Gunasekaran
Subscribe to get all the tutorials to your email!
*/
if(isset($_POST['Email_ID']) && isset($_POST['Post_ID'])){
$searchParam = $_POST['Email_ID'];
$postParam = $_POST['Post_ID'];

$existingEmail = str_replace(" ","",$searchParam);
$postID = str_replace(" ","",$postParam);
// Email where query

$emailQuery = "SELECT email FROM `subscribe_email` where email='$existingEmail'";
$emailChekQuery = mysql_query($emailQuery) or die(mysql_error());
$emailRow=mysql_fetch_array($emailChekQuery);

if(!empty($emailRow['email'])){
$dwnQuery ="SELECT download_link FROM `subscribe_download` where post_id=$postID";
$downLinkQuery = mysql_query($dwnQuery) or die(mysql_error());
$linkQry = mysql_fetch_array ( $downLinkQuery );
echo $linkQry['download_link'];
}else{
echo 'You are not subscribed to javadomain, Please subscribe to get the download link <br/><p> Download access will be enabled within 5 hours from the time of subscription </p><br/>';	
}

}else{
	echo "something went wrong, please notify to admin [Naveen@javadomain.in]";
}
?>
