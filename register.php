<?php
$con=mysqli_connect("localhost","root","","matrisokhi");
$name = $_POST['Name'];
$pass = $_POST['Password'];

$s = "select  * from login where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num ==  1){
    echo"Username Already Taken";

}else{
    $reg= " INSERT INTO login(Name , Password) values('$name' , '$pass')";
    mysqli_query($con, $reg);
    echo"Registration Successfull";
}

?>