<?php 
include 'includes/security.php';
include 'includes/header.php';
include 'includes/navbar_superadmin.php';
 ?>
 
 <head>
<script src="../../../js/jquery-3.6.0.js"></script>
<script src="../../../js/bootstrap.js"></script>

</head>
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm Tài Khoản</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <input type="hidden" name="usertype" value="admin">
        </div>
        
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">Quản Lý Đăng Tin</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
 
  </div>

        <div class="card-body">

        <?php 
        if(isset($_SESSION['success'])&& $_SESSION['success']!='')
        {
        	echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].' </h2>';
        	unset($_SESSION['success']);
        }

        if(isset($_SESSION['status'])&& $_SESSION['status']!='')
        {
        	echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
        	unset($_SESSION['status']);
        }
         ?>

          <div class="table-responsive">

      	<?php  
      		
      		$query = "SELECT * FROM news JOIN users ON news.IDUser = users.IDUser ";
      		$query_run= mysqli_query($connection,$query);
      	?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Họ Tên Người đăng </th>
            <th> Tên Bài đăng </th>           
            <th>Danh Mục bài đăng</th>
            <th>Giá tiền</th>
            <th>Địa chỉ</th>
            <th>Thời gian đăng</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
     	<?php 
     		if(mysqli_num_rows($query_run)>0)
     		{
     			while ($row=mysqli_fetch_assoc($query_run)) 
     			{
     				?>			
     				<tr>
			            <td> <?php echo $row['FullName']; ?></td>
			            <td> <?php echo $row['Name']; ?></td>			            
			            <td> <?php echo $row['IDBrand']; ?> </td>
                  <td> <?php echo $row['Price']; ?> </td>
                  <td> <?php echo $row['Address']; ?> </td>
                  <td> <?php echo $row['Time']; ?> </td>
			            <td>
			                <form action="register_edit.php" method="POST">
			                    <input type="hidden" name="edit_username" value="<?php echo $row['UserName']; ?>" >
			                    <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>		                    
			                </form>
			            </td>
			            <td>
			                <form action="code.php" method="POST">
			                  <input type="hidden" name="delete_new" value="<?php echo $row['IDNews']; ?>">
			                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
			                </form>
			            </td>
			        </tr>
     	<?php			
     			}
     		}
     		else{
     			echo "No record found";
     		}	
     	 ?>
          
        
        </tbody>
      </table>

    </div>
  </div>
</div>


 <?php 
	include 'includes/scripts.php';
  	include 'includes/footer.php';
  ?>