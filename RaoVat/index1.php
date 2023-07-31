<?php
include 'includes/security.php';
include 'includes/header.php';
include 'includes/navbar_superadmin.php';
ob_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}

// Lấy username từ session và hiển thị nó ở trang chính
$username = $_SESSION['username'];
$query = "SELECT * FROM users WHERE UserName = '$username'";
$query_run = mysqli_query($connection, $query);
if ($query_run->num_rows > 0) {
  // Nếu tìm thấy bản ghi, trích xuất thông tin email và age
  $row = $query_run->fetch_assoc();
  $iduser = $row['IDUser'];
  $fullname = $row['FullName'];
} else {
  echo "Không tìm thấy thông tin người dùng.";
}

?>



<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">


  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Home</h1>

    </div>

    <!-- Content Row -->
    <div class="row">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div>

                <?php


                $query = "SELECT UserName FROM users";
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);

                echo '<h1 class="h5 mb-0 font-weight-bold text-gray-800">' . $row . '</h1>';
                ?>


              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>


  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php
include 'includes/scripts.php';
include 'includes/footer.php';
?>