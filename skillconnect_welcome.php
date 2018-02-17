<?php
session_start();
?>

<?php 
$id1=$_SESSION["typeid"];
$id2=$_SESSION["subid"];
if($id1 == "1"){
$layout_context = "provider";
//echo "welcome you loged in as job provider";
}
if($id1 == "2"){
//echo "welcome you loged in as job seeker";
$layout_context = "seeker";
}
if($id1 == "3"){
//echo "welcome you loged in as college";
$layout_context = "college";
}
?>
<?php 
 include_once("skill_header.php");
?>
<?php echo " login succesfull "; ?>
</body>
</html>