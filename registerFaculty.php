<?php
include("connect.php");
$name=$_POST['name'];
$sem=$_POST['sem'];
$email=$_POST['email'];
$pass=sha1($_POST['pass']);

if($name==NULL || $sem==NULL || $email==NULL || $_POST['pass']==NULL)
{
	//
}
else
{
	$sql=mysqli_query($al,"INSERT INTO faculty(name,sem,email,password) VALUES('$name','$sem','$email','$pass')");
	if($sql)
	{
		$msg="Successfully Registered";
	}
	else
	{
		$msg="Email or Sem Already Exists";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Marksheet Generator</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body><br />

<div align="center">
<span class="head">Online Result Display</span>
<hr class="hr" />
<br />
<br />
<span class="subhead">Faculty Registration</span>
<br />
<br />
<br />
<form method="post" action="">
<table border="0" cellpadding="5" cellspacing="5" class="design">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">Name :</td><td><input type="text" name="name" class="fields" required="required" size="15" placeholder="Enter Full Name" /></td></tr>
<tr><td class="labels">Semester :</td><td><select name="sem" class="fields" style="background-color:#093d3d;" required>
<option value="" disabled="disabled" selected="selected">- - Semester - -</option>
<option value="1">First Sem</option>
<option value="2">Second Sem</option>
<option value="3">Third Sem</option>
<option value="4">Fourth Sem</option>
<option value="5">Fifth Sem</option>
<option value="6">Sixth Sem</option>
<option value="7">Seventh Sem</option>
<option value="8">Eighth Sem</option>
</select>
</td></tr>
<tr><td class="labels">E-Mail ID : </td><td><input type="email" name="email" class="fields" size="15" placeholder="Enter Email" required="required" /></td></tr>
<tr><td class="labels">Password : </td><td><input type="password" name="pass" class="fields" size="15" placeholder="Enter Password" required="required" /></td></tr>

<tr><td colspan="2" align="center"><input type="submit" value="Register" class="fields" /></td></tr>
</table>
</form>
<br />
<br />
<a href="index.php" class="link">Main Page</a>
</div>
</body>
</html>