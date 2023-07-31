<?php
include 'includes/security.php';
include 'includes/header.php';
include 'includes/navbar_superadmin.php';
?>

<div class="container-fluid">
	<!--DataTables -->

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Sửa Tài Khoản</h6>
		</div>
		<div class="card-body">
			<?php


			if (isset($_POST['edit_btn'])) {
				$username = $_POST['edit_username'];

				$query = "SELECT * FROM users WHERE UserName = '$username' ";
				$query_run = mysqli_query($connection, $query);
				foreach ($query_run as $row) {
			?>

					<form action="code.php" method="POST">
						<div class="form-group">
							<label> Username </label>
							<input type="text" readonly name="edit_username" value="<?php echo $row['UserName'] ?>" class="form-control" placeholder="Enter username">
						</div>

						<div class="form-group">
							<label> Password </label>
							<input type="text" name="edit_password" value="<?php echo $row['Password'] ?>" class="form-control" placeholder="Enter password">
						</div>
						<div class="form-group">
							<label>Usertype</label>
							<select name="update_usertype" class="form-control">
								<option value="">Chọn vai trò</option>
								<option value="admin">Admin</option>
								<option value="cus">Khách Hàng</option>
							</select>
						</div>
						<div class="form-group">
							<label> FullName </label>
							<input type="text" name="edit_fullname" value="<?php echo $row['FullName'] ?>" class="form-control" placeholder="Nhập Mã người dùng">
						</div>
						<div class="form-group">
							<label> Birth </label>
							<input type="text" name="edit_birth" value="<?php echo $row['Birth'] ?>" class="form-control" placeholder="Nhập Mã người dùng">
						</div>
						<div class="form-group">
							<label> Gender </label>
							<input type="text" name="edit_gender" value="<?php echo $row['Gender'] ?>" class="form-control" placeholder="Nhập Mã người dùng">
						</div>
						<div class="form-group">
							<label> Email </label>
							<input type="text" name="edit_email" value="<?php echo $row['Email'] ?>" class="form-control" placeholder="Nhập Mã người dùng">
						</div>
						<div class="form-group">
							<label> Phone </label>
							<input type="text" name="edit_phone" value="<?php echo $row['Phone'] ?>" class="form-control" placeholder="Nhập Mã người dùng">
						</div>
						<button type="submit" name="updatebtn" class="btn btn-primary"> Update</button>
						<a href="register.php" class="btn btn-danger"> CANCEL </a>
					</form>
			<?php
				}
			}
			?>
		</div>
	</div>
</div>

<?php
include 'includes/scripts.php';
include 'includes/footer.php';
?>