<?php
/* PHP Script
Change Language With PHP (Session)
Created By Wildan Izzudin.
    (c) 2018 Underxploit
*/
error_reporting(0);
if(isset($_POST['ry'])) {
	for($i=0; $i<=10; $i++) {
		$name = "LOCALHOST:8080-".rand(1000, 9999).".php5";
		$rq = 'Hai';
		$fp = fopen($name, "w");
fwrite($fp, $rq);
fclose($fp); 
}
echo '<script>alert("Success!!");</script>'; } $style = 'background:#222;color:#fff;border:1px solid #000;font-weight:bold';
echo '<form action="" method="POST"><input type="hidden" name="q"><input type="submit" name="ry" style="'.$style.'" value="Go!">';
?>