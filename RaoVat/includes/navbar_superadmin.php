   <?php
    ob_start();
    $username = $_SESSION['username'];
    $query = "SELECT * FROM users WHERE UserName = '$username'";
    $query_run = mysqli_query($connection, $query);



    ?>
   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index1.php">
       <div class="sidebar-brand-icon rotate-n-15">
         <i class="fas fa-laugh-wink"></i>
       </div>
       <div class="sidebar-brand-text mx-3">QUẢN TRỊ <br>HỆ THỐNG</div>

     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
       <a class="nav-link" href="index1.php">
         <i class="fa fa-home"></i>
         <span>Home</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">


     <li class="nav-item">
       <a class="nav-link collapsed" href="register.php"  aria-expanded="true" aria-controls="collapse4">
         <span>Quản Lý Thành Viên</span>
       </a>

     </li>
     <li class="nav-item">
       <a class="nav-link collapsed" href="tindang.php" aria-expanded="true" aria-controls="collapse4">
         <span>Quản Lý Đăng Tin</span>
       </a>

     </li>
     <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
         <span>Quản Lý Danh Mục Tin</span>
       </a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="../test.php" data-toggle="modal" data-target="#logoutModal">
         <i class="fa fa-calculator"></i>
         <span>Đăng Xuất</span></a>
     </li>
     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
       <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

   </ul>
   <!-- End of Sidebar -->

   <!-- Content Wrapper -->
   <div id="content-wrapper" class="d-flex flex-column">

     <!-- Main Content -->
     <div id="content">

       <!-- Topbar -->
       <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

         <!-- Sidebar Toggle (Topbar) -->
         <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
           <i class="fa fa-bars"></i>
         </button>

         <!-- Topbar Navbar -->
         <ul class="navbar-nav ml-auto">



           <!-- Nav Item - User Information -->
           <li class="nav-item dropdown no-arrow">
             <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span class="mr-2 d-none d-lg-inline text-gray-600 small">

                 <?php echo $_SESSION['username']  ?>

               </span>
               <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
             </a>
             <!-- Dropdown - User Information -->
             <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="../index.php" data-toggle="modal" data-target="#logoutModal">
                 <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                 Logout
               </a>
             </div>
           </li>

         </ul>

       </nav>
       <!-- End of Topbar -->


       <!-- Scroll to Top Button-->
       <a class="scroll-to-top rounded" href="#page-top">
         <i class="fas fa-angle-up"></i>
       </a>


       <!-- Logout Modal-->
       <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">XÁC NHẬN ĐĂNG XUẤT</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">×</span>
               </button>
             </div>
             <div class="modal-body">Bạn chắc chắn muốn đăng xuất </div>
             <div class="modal-footer">


               <form action="logout.php" method="POST">

                 <button type="submit" name="logout_btn" class="btn btn-primary">Đăng Xuất</button>
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
               </form>


             </div>
           </div>
         </div>
       </div>