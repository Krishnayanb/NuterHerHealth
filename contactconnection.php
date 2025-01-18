<?php
    $con=mysqli_connect("localhost","root","","matrisokhi");

    if(isset($_POST['submit'])){

        $n=$_POST['Name'];
        $e=$_POST['Email'];
        $t=$_POST['Telephone'];
        $msg=$_POST['Message'];

        $ins="INSERT INTO contact SET name='$n',email='$e',phone='$t',message='$msg'";
        if($con->query($ins))
       {
            echo "Thanks";
       } 
    }
    else{
        echo "403 Forbidden";
    }
?>