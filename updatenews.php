<?php session_start(); 

    if(!isset($_SESSION['admin_name']) || $_SESSION['role']!='admin'){
    header("location:index.php");
    }
?>
<?php
    include("db.php");

    if(isset($_POST['save'])){
        $id=$_POST['id'];
        $nhead=$_POST['nhead'];
        $ndetails=$_POST['ndetails'];
       
       if(isset($_FILES['nimg']['name']) && $_FILES['nimg']['name']!=""){
       $fn=time().$_FILES['nimg']['name'];
       $buf=$_FILES['nimg']['tmp_name'];
       move_uploaded_file($buf,"newsimage/".$fn);

       $upd="UPDATE news SET heading='$nhead',details='$ndetails',image='$fn' WHERE nid='$id'";
       if($con->query($upd))
       {
        header("location:listnews.php");
       }
        }
        else{
        $upd="UPDATE news SET heading='$nhead',details='$ndetails' WHERE nid='$id'";
        if($con->query($upd))
       {
        header("location:listnews.php");
       }
        }
    }
    else{
        echo "access denied";
    }
?>
