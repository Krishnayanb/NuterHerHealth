<?php session_start(); 

    if(!isset($_SESSION['admin_name']) || $_SESSION['role']!='admin'){
    header("location:index.php");
    }
?>
<?php
    include("admin_inc/db.php");

    if(isset($_POST['save'])){

       $nhead=$_POST['nhead'];
       $ndetails=$_POST['ndetails'];

       $fn=time().$_FILES['nimg']['name'];
       $buf=$_FILES['nimg']['tmp_name'];
       move_uploaded_file($buf,"newsimage/".$fn);

       $ins="INSERT INTO news SET heading='$nhead',details='$ndetails',image='$fn'";
       if($con->query($ins))
       {
            header("location:listnews.php");
       }
    }
    else{
        echo "access denied";
    }
?>