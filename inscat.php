<?php session_start(); 

    if(!isset($_SESSION['admin_name']) || $_SESSION['role']!='admin'){
    header("location:index.php");
    }
?>
<?php
    include("admin_inc/db.php");

    if(isset($_POST['save'])){
       $ptitle=$_POST['ptitle'];
       $pdetails=$_POST['pdetails'];
       $fn=time().$_FILES['pimg']['name'];
       $buf=$_FILES['pimg']['tmp_name'];
       move_uploaded_file($buf,"page_img/".$fn);

       $ins="INSERT INTO pages SET title='$ptitle',details='$pdetails',image='$fn'";
       if($con->query($ins))
       {
        header("location:listpages.php");
       }
    }
    else{
        echo "access denied";
    }
?>