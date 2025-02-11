<?php session_start(); 
    if(!isset($_SESSION['admin_name']) || $_SESSION['role']!='admin'){
    header("location:index.php");
    }
?>
<?php include("admin_inc/db.php"); 

$id=$_GET['edid'];

$sel="SELECT * FROM news WHERE nid='$id'";
$rs=$con->query($sel);
$data=$rs->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Page</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <style>
        .ck-content{
            height: 230px;
        }

    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        
        <!-- End of Sidebar -->
        <?php include("admin_inc/sidebar.php"); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("admin_inc/top.php"); ?>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit News</h1>
                    <form action="updatenews.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $data['nid']; ?>"/>
                        <p>News Heading</p>
                        <p><input value="<?php echo $data['heading'];?>" type="text" name="nhead" class="form-control"></p>
                        <p>Images</p>
                        <p><input type="file" name="nimg"></p>
                        <p><img style="width:100px;" src="newsimage/<?php echo $data["image"] ?>"/></p>
                        <p>News Details</p>
                        <p><textarea name="ndetails" id="editor"> <?php echo $data['details'];?></textarea></p>
                        
                         <script>
                            ClassicEditor
                                .create( document.querySelector( '#editor' ) );
                        </script>
                        <p><input type="submit" value="Edit News" name="save"></p>
                    </form>
                </div>
            </div>           
            <?php include("admin_inc/footer.php"); ?>
        </div>
    </div>
    
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
<?php include("admin_inc/logout_modal.php"); ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>