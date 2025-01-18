<?php session_start(); 
    if(!isset($_SESSION['admin_name']) || $_SESSION['role']!='admin'){
    header("location:index.php");
    }
?>
<?php include("admin_inc/db.php"); 

$id=$_GET['did'];
$sel="SELECT * FROM news WHERE nid='$id'";
$rs=$con->query($sel);
$data=$rs->fetch_assoc();
unlink("newsimage/".$data['image']);

$d="DELETE FROM news WHERE nid='$id'";
if($con->query($d))
{
    header("location:listnews.php");
}

?>