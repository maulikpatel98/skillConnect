<?php
session_start();
?>


<?php 
 include_once("skill_header.php");
?>

<?php

if(isset($_POST["btnlog"]))
{
	$user=$_POST["txtno1"];
$passwd=$_POST["pass"];

if($_POST["r1"]=="provider")
$qry="SELECT * FROM jobprovider WHERE usrname='$user' and password='$passwd' ";

if($_POST["r1"]=="seeker")
$qry="SELECT * FROM jobseeker WHERE usrname='$user' and password='$passwd' ";

if($_POST["r1"]=="college")
$qry="SELECT * FROM college WHERE usrname='$user' and password='$passwd' ";

$conn=mysqli_connect("localhost","root","","skillconnect");
$result=$conn->query($qry);
//echo "login";

$ans=mysqli_num_rows($result);
	
	if($ans==1)
	{
	echo "successful login";
	
	$row=$result->fetch_assoc();

	if($_POST["r1"]=="provider")
	{
	$_SESSION["subid"] = $row["providerID"];
	$_SESSION["typeid"] = "1" ;
	}
	if($_POST["r1"]=="seeker")
	{
	$_SESSION["subid"] = $row["seekerID"];
	$_SESSION["typeid"] = "2" ;
	}
	if($_POST["r1"]=="college")
	{
	$_SESSION["subid"] = $row["collegeID"];
	$_SESSION["typeid"] = "3" ;
	}
	
	echo ("<script>location.href='skillconnect_welcome.php'</script>");
	}
	
	else
	{
		echo "invalid username or password";
	}

	}


?>

					<form method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> username</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="username" class="col-xs-10 col-sm-5" name="txtno1" >
										</div>
									</div>
<br>
<br>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> password</label>

										<div class="col-sm-9">
											<input type="password" id="form-field-1" placeholder="password" class="col-xs-10 col-sm-5" name="pass">
										</div>
									</div>
<br>
						jobseeker:<input type="radio" name="r1" value="seeker">
						jobprovider:<input type="radio" name="r1" value="provider">
						college:<input type="radio" name="r1" value="college">
<br>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" name="btnlog" value="Login">
										</div>
									</div>
</form>

</body>
</html>