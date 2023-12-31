<?php
include 'includes/security.php';
include 'includes/header.php';
include 'includes/navbar_superadmin.php';
?>
<?php require 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>Import Excel To MySQL</title>
</head>

<body>
	<h3 style="text-align: center;">Thêm tài khoản</h3>
	<hr>
	<form style="text-align: center;" class="" action="" method="post" enctype="multipart/form-data">
		<input type="file" name="excel" required value="">
		<button type="submit" name="import">Import</button>
	</form>

	<hr>

	<?php
	if (isset($_POST["import"])) {
		$fileName = $_FILES["excel"]["name"];
		$fileExtension = explode('.', $fileName);
		$fileExtension = strtolower(end($fileExtension));
		$newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

		$targetDirectory = "uploads/" . $newFileName;
		move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

		error_reporting(0);
		ini_set('display_errors', 0);

		require 'excelReader/excel_reader2.php';
		require 'excelReader/SpreadsheetReader.php';

		$reader = new SpreadsheetReader($targetDirectory);
		foreach ($reader as $key => $row) {
			$usename = $row[0];
			$email = $row[1];
			$password = md5($row[2]);
			$usetype = $row[3];
			$ma = $row[4];
			mysqli_query($conn, "INSERT INTO register VALUES('$usename', '$email', '$password', '$usetype','$ma')");
		}

		echo
		"
			<script>
			alert('Succesfully Imported');
			document.location.href = '';
			</script>
			";
	}
	?>

	<div class="card-body">

		<?php
		if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
			echo '<h2 class="bg-primary text-white"> ' . $_SESSION['success'] . ' </h2>';
			unset($_SESSION['success']);
		}

		if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
			echo '<h2 class="bg-danger text-white"> ' . $_SESSION['status'] . ' </h2>';
			unset($_SESSION['status']);
		}
		?>

		<div class="table-responsive">

			<?php

			$query = "SELECT * FROM users";
			$query_run = mysqli_query($connection, $query);
			?>
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>UserName </th>
						<th> FullName </th>
						<th>Type</th>
						<th>Phone</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if (mysqli_num_rows($query_run) > 0) {
						while ($row = mysqli_fetch_assoc($query_run)) {
					?>
							<tr>
								<td> <?php echo $row['UserName']; ?></td>
								<td> <?php echo $row['FullName']; ?></td>
								<td> <?php echo $row['Type']; ?> </td>
								<td> <?php echo $row['Phone']; ?> </td>
								<td> <?php echo $row['Email']; ?> </td>
							</tr>
					<?php
						}
					} else {
						echo "No record found";
					}
					?>


				</tbody>
			</table>

		</div>
</body>

</html>
<?php
include 'includes/scripts.php';
include 'includes/footer.php';
?>