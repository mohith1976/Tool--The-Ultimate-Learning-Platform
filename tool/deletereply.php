<?php
// include database connection file
require_once'dbconfig.php';
// Code for record deletion
if(isset($_REQUEST['del']))
{
//Get row id
$uid=intval($_GET['del']);
//Qyery for deletion
$sql = "delete from principalreply WHERE  id=:id";
// Prepare query for execution
$query = $dbh->prepare($sql);
// bind the parameters
$query-> bindParam(':id',$uid, PDO::PARAM_STR);
// Query Execution
$query -> execute();
// Mesage after updation
echo "<script>alert('Record deleted successfully');</script>";
// Code for redirection
echo "<script>window.location.href='admindahboard.php'</script>";
}
?>