<?php include '../helpers/editchelper.php'?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
     <? include '../public/salestyles.php'?>

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
<? include '../navs/sidenav.php'?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <? include '../navs/topbar.php'?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Edit Product Categories</h1>

                </div>

                <!-- Content Row -->
                <div class="row">



                    <div class="col-12">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Add product category</h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Manage Categories</div>
                                        <a class="dropdown-item" href="#">View Categories</a>

                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <?php if (!empty($msg)): ?>
                                    <span class="<?php echo $msg_class?>"><?php echo $msg; ?></span>
                                    <br>
                                <?php endif; ?>
                                <form method="post" action="">

                                    <div class="form-group">
                                        <input type="text" value="<?php echo $c_row['category']?>"  name="categ" class="form-control form-control-user" placeholder="Category" required>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-info" name="u_c"><span class="fa fa-plus"></span> Update Category </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Categories</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>Category ID</th>
                                            <th>Category Name</th>
                                            <th> Action</th>

                                        </tr>
                                        </thead>
                                        <?php
                                        $categ_results = mysqli_query($conn, "SELECT * FROM categories");
                                        ?>

                                        <tbody>
                                        <?php while ($c_row = $categ_results->fetch_assoc()) {?>
                                            <tr>
                                                <td class="text-center"><?php echo $c_row['id'];?></td>


                                                <td class="text-center"><?php echo $c_row['category'];?></td>
                                                <td class="text-center">



                                                    <div class="dropdown no-arrow mb-4">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Choose Action
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="editc.php?edit-category=<?php echo $c_row['id']; ?>"><span class="fa fa-edit"></span> Edit</a>
                                                            <a  class="dropdown-item" href="../helpers/del-category.php?delete-category=<?php echo $c_row['id']; ?>"><span class="fa fa-trash"></span> Delete</a>

                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Content Row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
           <br>
                    <br>
                    <hr>
        <!-- Footer -->
          <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; POS 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<? include '../navs/logoutmodal.php'?><!-- Bootstrap core JavaScript-->
<? include '../public/salescripts.php'; ?>

</body>

</html>
