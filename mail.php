<?
ob_start();
extract($_REQUEST);
$to="raju.e3@gmail.com";
//$to="satyanarayan@vsplash.net";
$filename="data.html";
$handle=fopen($filename,'r');
$content=fread($handle,filesize($filename));
fclose($handle);
$subject="Gurukrupa Advanced Dental Care Center - Contact Form Details";
$content=str_replace('<%fname%>',$fname,$content);
$content=str_replace('<%lname%>',$lname,$content);
$content=str_replace('<%email%>',$email,$content);
$content=str_replace('<%phone%>',$phone,$content);
$content=str_replace('<%address%>',$address,$content);
	$headers  = "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";		
	$headers .= "From:".$email."\n";
	$headers .= "Cc:".$cc."\n";
	$headers .= "Bcc:".$bcc."\n";
	mail($to,$subject,$content,$headers);
	echo '<script language="javascript">window.parent.location="confirmation.html"</script>';
	exit;
?>
