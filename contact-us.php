<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bellbrand.css" type="text/css" rel="stylesheet" />

<title>Untitled Document</title>

<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="validations.js"></script>
<script language="javascript" type="text/javascript">
function valid(contact)
{
	if(document.contact.fname.value=="")
	{
	alert("Please Enter Your First Name");
	document.contact.fname.focus();
	return false;
	}
	
	if(document.contact.lname.value=="")
	{
	alert("Please Enter Your Last Name");
	document.contact.lname.focus();
	return false;
	}
	
	if(GenValidation(document.contact.email,'Email Address','','')==0)
	return false;
	if(EmailValidation(document.contact.email)==0)
	return false;
	
	
	//Captcha image generation start
	var security_code=document.getElementById('security_code').value;
	if(security_code=="")
	{
	alert("Enter the code");
	document.getElementById('security_code').focus();
	return false;
	}
	//alert(document.frm.actualcode.value);return false;
	else
	{
	
	if(document.contact.pin_value.value!=document.contact.security_code.value)
			{
			alert("Invalid code");
			
				document.getElementById('security_code').focus();
				return false;
			}
			}
//  Captcha image generation end 
	

}
</script>
</head>
<body>
<div id="container">
  <div id="header"> <a href="index.html"><img src="images/logo.jpg" alt="Bell Brand" name="logo" id="logo" title="Bell Brand"/></a>
    <div class="clear"></div>
    <div id="nav">
      <ul>
        <li class="firesr"><a href="index.html" class="current">Home</a></li>
        <li><a href="about-us.html">About Us</a></li>
        <li><a href="index.html">Services</a></li>
        <li><a href="products.html">Products</a></li>
        
        <li><a href="activities.html">Activies</a></li>
        
        <li><a href="contact-us.html">Contact Us</a></li>
      </ul>
    </div>
    <div class="clear"></div>
    <div id="flash"><object type="application/x-shockwave-flash" data="bell-brand.swf" width="990" height="308" 
        title="Bell Brand" >
            <param name="movie" value="bell-brand.swf" />
            <param name="wmode" value="transparent" />
          </object></div>
  </div>
  <div class="clear"></div>
  <div id="contentfull">
    <div id="content-leftbar"><img src="images/latest-updates.jpg"  class="latest-news"/><div class="clear"></div>
    
    <marquee height="350px" onmouseout="this.start()" onmouseover="this.stop()" scrollamount="5" direction="up">
    
    <img src="images/001.jpg" class="scrollimg" /><p>Maintaining compliance in governmental organisations.</p>
    <span class="more">More..!</span>
    <div class="clear"></div>
      <img src="images/002.jpg" class="scrollimg" />
        <p>Maintaining compliance in governmental organisations.</p>
    <span class="more">More..!</span>
    <div class="clear"></div>
      <img src="images/001.jpg" class="scrollimg" /><p>Maintaining compliance in governmental organisations.</p>
    <span class="more">More..!</span>
    <div class="clear"></div>
      <img src="images/002.jpg" class="scrollimg" />
        <p>Maintaining compliance in governmental organisations.</p>
    <span class="more">More..!</span>
    <div class="clear"></div></marquee>
    </div>
    
    <div id="content-rightbar">
      <div class="title">Contact Us</div>
      <p><strong><img src="images/dummy-image.jpg" class="left" />GRACE VICTORY FOODS PVT LTD.</strong></p>
<p><strong>Address: BHAVANI SWEETS, Warangal.</strong></p>
<p><strong>Contact no: +91 22 27694622 / 23</strong></p>
<p><strong>Email: <a href="mailto:info@bellbrand.net">info@bellbrand.net</a> / <a href="mailto:bell.brand@yahoo.com">bell.brand@yahoo.com</a></strong></p>
<div class="clear"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="center" valign="top">
<form action="mail.php" method="post" name="contact" id="contact" onsubmit="return valid(this)">
            <table width="500" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="24" colspan="3" align="left" valign="top"><span class="sub-head1">Please fill the below form</span></td>
              </tr>
              <tr>
                <td height="24" colspan="3" align="left" valign="top" style="padding-left:88px;" >Fields marked with (<span class="red-star">*</span>) are mandatory</td>
              </tr>
              <tr>
                <td class="body_text" height="26" align="left" valign="top" width="150" >First Name <span class="red-star">*</span></td>
                <td width="10" align="center" valign="top">:</td>
                <td align="left" valign="top" width="252"><input name="fname" type="text" class="text_field" id="name3" /></td>
              </tr>
              <tr>
                <td height="26" align="left" valign="top" class="body_text">Last Name <span class="red-star">*</span></td>
                <td align="center" valign="top" width="10">:</td>
                <td align="left" valign="top"><input name="lname" type="text" class="text_field" id="name" /></td>
              </tr>
              <tr>
                <td height="26" align="left" valign="top" class="body_text">Email <span class="red-star">*</span> </td>
                <td align="center" valign="top" width="10">:</td>
                <td align="left" valign="top"><input name="email" type="text" class="text_field" id="name32" /></td>
              </tr>
              <tr>
                <td height="26" align="left" valign="top" class="body_text">Phone </td>
                <td align="center" valign="top" width="10">:</td>
                <td align="left" valign="top"><input name="phone" type="text" class="text_field" id="name322" /></td>
              </tr>
              <tr>
                <td height="86" align="left" valign="top" class="body_text">Address</td>
                <td align="center" valign="top" width="10">:</td>
                <td align="left" valign="top"><textarea name="address" rows="3" cols="" class="text_fieldone" id="address"></textarea></td>
              </tr>
              <tr>
                <td height="22" align="left" valign="top">Enter the code 
                  as shown<span class="red-star">*</span> </td>
                <td align="center" valign="top" width="10">:</td>
                <td height="27" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="75" align="left" valign="top"><span >
                        <input id="security_code" name="security_code" type="text" class="text_box" />
                      </span> </td>
                      <td align="left"><span class="code">
			<b>
  						<? 	
							function generatePin($value) 
							{
								return substr($value,4,4);
							}		
							$_SESSION['admin_pin_value']=md5(rand(2,99999999));
							$encodedPin =generatePin($_SESSION['admin_pin_value']);
		  					## create an image not a text for the pin
							$font  = 6;
							$width  = ImageFontWidth($font) * strlen($encodedPin);
							$height = ImageFontHeight($font);

							$im = @imagecreate ($width,$height);
							$background_color = imagecolorallocate ($im, 219, 239, 249); //cell background
							$text_color = imagecolorallocate ($im, 0, 0,0);//text color
							imagestring ($im, $font, 0, 0,  $encodedPin, $text_color);
							imagejpeg($im,"tmp/tmp_pin_".$_SESSION['admin_pin_value'].".jpg");
							echo "<img src=\"tmp/tmp_pin_".$_SESSION['admin_pin_value'].".jpg\" >";			
							imagedestroy($im);
						?>
 						 <input type="hidden" name="pin_value" value="<?=$encodedPin;?>" />
</b></span></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td height="22" align="left" valign="top">&nbsp;</td>
                <td align="center" valign="top" width="10">&nbsp;</td>
                <td height="27" align="left" valign="top"><input name="Submit" type="submit" class="submit" id="Submit" value="Submit"  title="Submit"/></td>
              </tr>
            </table>
          </form></td>
        </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="clear"></div>
  </div>
  
  <div id="gallery-bottom"></div>
</div>
<div class="clear"></div>
<div id="footer-wrapper">
  <div id="footer">
    <ul>
      <li class="firest"><a href="index.html">Home</a></li>
      <li><a href="index.html">Products</a></li>
      <li><a href="index.html">Services</a></li>
      <li><a href="insdex.html">Social Activies</a></li>
      <li><a href="index.html">About Us</a></li>
      <li><a href="index.html" class="last">Contact Us</a></li>
    </ul>
  </div>
</div>
</body>
</html>
