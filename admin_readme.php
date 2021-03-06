<?php
/*
+---------------------------------------------------------------+
|        On This Day Menu for e107 v7xx - by Father Barry
|
|        This module for the e107 .7+ website system
|        Copyright Barry Keal 2004-2008
|
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|
+---------------------------------------------------------------+
*/
require_once("../../class2.php");
if (!defined('e107_INIT'))
{
    exit;
}
if (!getperms("P"))
{
    header("location:" . e_HTTP . "index.php");
    exit;
}

e107::lan('onthisday_menu', 'admin', true);
require_once("ver.php");
require_once(e_ADMIN . "auth.php");
if (!defined('ADMIN_WIDTH'))
{
    define(ADMIN_WIDTH, "width:100%;");
}
$otd_text = "
<table class='fborder' style='" . ADMIN_WIDTH . "'>
	<tr>
		<td class='fcaption' colspan='2'>" . OTD_R01 . "</td>
	</tr>
	<tr>
		<td class='forumheader3' style='width:15%;' >" . OTD_R02 . "</td>
		<td class='forumheader3'>" . OTD_R01 . "</td>
	</tr>
	<tr>
		<td class='forumheader3' style='width:15%;' >" . OTD_R04 . "</td>
		<td class='forumheader3'>" . OTD_R05 . "</td>
	</tr>
	<tr>
		<td class='forumheader3' style='width:15%;' >" . OTD_R06 . "</td>
		<td class='forumheader3'>" . $eplug_version . "</td>
	</tr>
	<tr>
		<td class='forumheader3' style='width:15%;' >" . OTD_R08 . "</td>
		<td class='forumheader3'>" . OTD_R09 . "</td>
	</tr>
	<tr>
		<td class='forumheader3' style='width:15%;' >" . OTD_R10 . "</td>
		<td class='forumheader3'>" . OTD_R11 . "</td>
	</tr>
	<tr>
		<td class='forumheader3' style='width:15%;' >" . OTD_R12 . "</td>
		<td class='forumheader3'>" . OTD_R13 . "</td>
	</tr>
	<tr>
		<td class='forumheader3' style='width:15%;' >" . OTD_R14 . "</td>
		<td class='forumheader3'>" . OTD_R15 . "</td>
	</tr>
	<tr>
		<td class='forumheader3' style='width:15%;' >" . OTD_R16 . "</td>
		<td class='forumheader3'>" . OTD_R17 . "</td>
	</tr>
		<tr>
		<td class='forumheader3' style='width:15%;' >" . OTD_R25 . "</td>
		<td class='forumheader3'>" . OTD_R24 . "</td>
	</tr>
	<tr>
		<td class='forumheader3' colspan='2'>
		<strong>" . OTD_R18 . "</strong><br /><br />" . OTD_R19 . "<br /><br />
	</td>
	</tr>
	<tr>
		<td class='fcaption' colspan='2'>&nbsp;</td>
	</tr>
</table>";
// readme;
$ns->tablerender($eplug_name, $otd_text);
require_once(e_ADMIN . "footer.php");

?>