
<?php
session_start();
include_once 'skill_header.php';
?>

<?php 

$id=$_SESSION["typeid"];

if(isset($id)){
if($id == "1")
{
	echo "fill the form to sign up as job provider";
	include_once 'provider_form.php';
}
if($id == "2")
{
	echo "fill the form to sign up as job seeker";
	include_once 'seeker_form.php';
}
if($id == "3")
{
	echo "fill the form to sign up as college/institute";
	include_once 'college_form.php';
}
}
else 
	echo "wrong selection"; ;
?>


						