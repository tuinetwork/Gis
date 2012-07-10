<style type="text/css">
.dif {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 16px;
	font-style: normal;
	font-weight: bold;
	color: #000;
}
.online {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	font-style: normal;
	color: #0C0;
	font-weight: bold;
}
.offline {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	font-style: normal;
	color: #F00;
	font-weight: bold;
}
.ely {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	font-style: normal;
	color: #0CF;
	font-weight: bold;
}
.asmo {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	font-style: normal;
	color: #F60;
	font-weight: bolder;
}
.text {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	font-style: normal;
	font-weight: bolder;
}
.num {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	font-style: normal;
}
</style>
<!-- Server Status -->
<?php
$ip = "localhost"; //local adress or external ip
$porta = "2106"; //LS port
if (! $sock = @fsockopen($ip, $porta, $num, $error, 5))
echo "<span class=\"dif\">Login Server : </span><img src=\"img/offline.png\"><span class=\"offline\">  OFFLINE  <img src=\"img/offline.png\"></span>";
else{
echo "<span class=\"dif\">Login Server : </span><img src=\"img/online.png\"><span class=\"online\">  ONLINE  <img src=\"img/online.png\"></span>";
fclose($sock);
}
?>
<br>
<?php
$ip = "localhost"; //local adress or external ip
$porta = "7777"; //GS Port
if (! $sock = @fsockopen($ip, $porta, $num, $error, 5))
echo "<span class=\"dif\">Game Server : </span><img src=\"img/offline.png\"><span class=\"offline\">  OFFLINE  <img src=\"img/offline.png\"></span>";
else{
echo "<span class=\"dif\">Game Server : </span><img src=\"img/online.png\"><span class=\"online\">  ONLINE  <img src=\"img/online.png\"></span>";
fclose($sock);
}
?>
<!-- Server Status END -->
<br>
<br>
<!-- All Accounts -->
<span class="text">Accounts</span>
<?php
include "configs.php";
$sql = mysql_query("SELECT count(*) FROM account_data");
echo mysql_result ($sql, 0, 0); ?> 
<!-- All Accounts END -->
<br>
<!-- All Characters -->
<span class="text">Characters</span>
<?php
include "configs.php";
$sql = mysql_query("SELECT count(*) FROM players");
echo mysql_result ($sql, 0, 0); ?> 
<!-- All Characters END -->
<br>
<!-- Reat -->
<?php
include "configs.php";
$sql = mysql_query("SELECT count(*) FROM players where race ='ELYOS'"); //Asmodian to change "ELYOS" to "ASMODIANS"
echo mysql_result($sql, 0, 0); ?> 
<font face="Verdana, Geneva, sans-serif">  <span class="ely">Elyo</span>|<span class="asmo">Asmo</span></font>
<?php
include "configs.php";
$sql = mysql_query("SELECT count(*) FROM players where race ='ASMODIANS'"); //Asmodian to change "ELYOS" to "ASMODIANS"
echo mysql_result($sql, 0, 0); 
?>
<!-- Reat END -->
<br>
<!-- Gender -->
<span class="text">Gender</span>
<br>
<?php
include "configs.php";
$sql = mysql_query("SELECT count(*) FROM players where gender ='FEMALE'"); //Asmodian to change "ELYOS" to "ASMODIANS"
echo mysql_result($sql, 0, 0); ?> 
<font face="Verdana, Geneva, sans-serif">  <span class="ely">MALE</span>|<span class="asmo">FEMALE</span></font>
<?php
include "configs.php";
$sql = mysql_query("SELECT count(*) FROM players where gender ='MALE'"); //Asmodian to change "ELYOS" to "ASMODIANS"
echo mysql_result($sql, 0, 0); 
?>
<!-- Gender END -->
<br>
<span class="text">Online : </span>
<?php
include "configs.php";
$sql = mysql_query("SELECT count(*) FROM players where online=1");
echo mysql_result ($sql, 0, 0); ?> 
<br>
<?php
include "configs.php";
$sql = mysql_query("SELECT count(*) FROM players where online=1 and race='ELYOS'"); //Asmodian to change "ELYOS" to "ASMODIANS"
echo mysql_result($sql, 0, 0); ?> 
<font face="Verdana, Geneva, sans-serif">  <span class="ely">Elyo</span>|<span class="asmo">Asmo</span></font>
<?php
include "configs.php";
$sql = mysql_query("SELECT count(*) FROM players where online=1 and race='ASMODIANS'"); //Asmodian to change "ELYOS" to "ASMODIANS"
echo mysql_result($sql, 0, 0); 
?>