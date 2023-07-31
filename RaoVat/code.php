<html lang="en" dir="ltr">
<?php
require 'includes/config.php';
include 'includes/security.php';

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
		$name = $row[0];
		$age = $row[1];
		$country = $row[2];
		mysqli_query($conn, "INSERT INTO tb_data VALUES('', '$name', '$age', '$country')");
	}

	echo
	"
			<script>
			alert('Succesfully Imported');
			document.location.href = '';
			</script>
			";
}


if (isset($_POST['registerbtn'])) {
	$email = $_POST['email'];
	# code...
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['confirmpassword']);
	$usertype = $_POST['usertype'];
	$ma = $_POST['ma'];

	if ($password === $cpassword) {
		# code...
		$query = "INSERT INTO register(email,username,password,usertype,Ma) VALUES('$email','$username','$password','$usertype','$ma')";
		$query_run = mysqli_query($connection, $query);
		if ($query_run) {
			# code...
			//echo "Saved";
			$_SESSION['success'] = "Thêm tài khoản thành công";
			header('Location: register.php');
		} else {
			# code...
			$_SESSION['status'] = "Thêm tài khoản thất bại";
			header('Location: register.php');
			//echo "Not Saved";
		}
	} else {
		# code...
		$_SESSION['status'] = "Password and Comfirm Password Does Not Macth";
		header('Location: register.php');
	}
}


if (isset($_POST['updatebtn'])) {

	$username = $_POST['edit_username'];
	
	$password = $_POST['edit_password'];
	$usertype = $_POST['update_usertype'];
	$fullname = $_POST['edit_fullname'];
	$birth = ($_POST['edit_birth']);
	$gender = ($_POST['edit_gender']);
	$email = ($_POST['edit_email']);
	$phone = ($_POST['edit_phone']);

	$query = "UPDATE users SET UserName='$username', Password ='$password', Type ='$usertype',FullName ='$fullname',Birth = '$birth',Gender = '$gender',Email = '$email',Phone = '$phone' WHERE UserName = '$username' LIMIT 1";
	$query_run = mysqli_query($connection, $query);

	if ($query_run) {
		# code...
		$_SESSION['success'] = "Cập nhật tài khoản thành công";
		header('Location: register.php');
	} else {
		# code...
		$_SESSION['status'] = "Cập nhật tài khoản thất bại";
		header('Location: register.php');
	}
}


if (isset($_POST['delete_btn'])) {
	$username = $_POST['delete_username'];

	$query = "DELETE FROM users WHERE  UserName ='$username'";
	$query_run = mysqli_query($connection, $query);

	if ($query_run) {
		# code...
		$_SESSION['success'] = "Tài khoản đã xóa";
		header('Location: register.php');
	} else {
		# code...
		$_SESSION['status'] = "Xóa tài hoản thất bại";
		header('Location: register.php');
	}
}


if (!isset($_SESSION['user'])) {
	$_SESSION['user'] = session_id();
}
$uid = $_SESSION['user']; 
$datetime_string = date('c', time());

if (isset($_POST['action']) or isset($_GET['view'])) {
	if (isset($_GET['view'])) {
		header('Content-Type: application/json');
		$start = mysqli_real_escape_string($connection, $_GET["start"]);
		$end = mysqli_real_escape_string($connection, $_GET["end"]);

		$result = mysqli_query($connection, "SELECT `id`, `start` ,`end` ,`title` FROM  `events` where (date(start) >= '$start' AND date(start) <= '$end') and uid='" . $uid . "'");
		while ($row = mysqli_fetch_assoc($result)) {
			$events[] = $row;
		}
		echo json_encode($events);
		exit;
	} elseif ($_POST['action'] == "add") {
		mysqli_query($connection, "INSERT INTO `events` (
                    `title` ,
                    `start` ,
                    `end` ,
                    `uid` 
                    )
                    VALUES (
                    '" . mysqli_real_escape_string($connection, $_POST["title"]) . "',
                    '" . mysqli_real_escape_string($connection, date('Y-m-d H:i:s', strtotime($_POST["start"]))) . "',
                    '" . mysqli_real_escape_string($connection, date('Y-m-d H:i:s', strtotime($_POST["end"]))) . "',
                    '" . mysqli_real_escape_string($connection, $uid) . "'
                    )");
		header('Content-Type: application/json');
		echo '{"id":"' . mysqli_insert_id($connection) . '"}';
		exit;
	} elseif ($_POST['action'] == "update") {
		mysqli_query($connection, "UPDATE `events` set 
            `start` = '" . mysqli_real_escape_string($connection, date('Y-m-d H:i:s', strtotime($_POST["start"]))) . "', 
            `end` = '" . mysqli_real_escape_string($connection, date('Y-m-d H:i:s', strtotime($_POST["end"]))) . "' 
            where uid = '" . mysqli_real_escape_string($connection, $uid) . "' and id = '" . mysqli_real_escape_string($connection, $_POST["id"]) . "'");
		exit;
	} elseif ($_POST['action'] == "delete") {
		mysqli_query($connection, "DELETE from `events` where uid = '" . mysqli_real_escape_string($connection, $uid) . "' and id = '" . mysqli_real_escape_string($connection, $_POST["id"]) . "'");
		if (mysqli_affected_rows($connection) > 0) {
			echo "1";
		}
		exit;
	}
}


if (isset($_POST['addkhoahoc'])) {
	$ma_khoa_hoc = $_POST['ma_khoa_hoc'];
	# code...
	$ten_khoa_hoc = $_POST['ten_khoa_hoc'];
	$nam_hoc = $_POST['nam_hoc'];
	$time = $_POST['time'];

	if ($ma_khoa_hoc != '' && $ten_khoa_hoc != '' && $nam_hoc != '' && $time != '') {
		# code...
		$query = "INSERT INTO khoa_hoc(MaKhoaHoc,TenKhoaHoc,NamHoc,ThoiGianHoc) VALUES('$ma_khoa_hoc','$ten_khoa_hoc','$nam_hoc','$time')";
		$query_run = mysqli_query($connection, $query);
		if ($query_run) {
			# code...
			//echo "Saved";
			$_SESSION['success'] = "Thêm khóa học thành công";
			header('Location: khoa_hoc.php');
		} else {
			# code...
			$_SESSION['status'] = "Thêm khóa học thất bại";
			header('Location: khoa_hoc.php');
			//echo "Not Saved";
		}
	} else {
		# code...
		header('Location: khoa_hoc.php');
	}
}
if (isset($_POST['suakhoahoc'])) {

	$ma_khoa_hoc = $_POST['ma_khoa_hoc'];
	# code...
	$ten_khoa_hoc = $_POST['ten_khoa_hoc'];
	$nam_hoc = $_POST['nam_hoc'];
	$time = $_POST['time'];

	$query = "UPDATE khoa_hoc SET MaKhoaHoc=$ma_khoa_hoc, TenKhoaHoc=$ten_khoa_hoc, NamHoc=$nam_hoc, ThoiGianHoc=$time WHERE MaKhoaHoc = '$ma_khoa_hoc' LIMIT 1";
	$query_run = mysqli_query($connection, $query);

	if ($query_run) {
		# code...
		$_SESSION['success'] = "Cập nhật khóa học thành công";
		header('Location: khoa_hoc.php');
	} else {
		# code...
		$_SESSION['status'] = "Cập nhật khóa học thất bại";
		header('Location: khoa_hoc.php');
	}
}
if (isset($_POST['delete_btnn'])) {
	$ID = $_POST['delete_KH'];

	$query = "DELETE FROM khoa_hoc WHERE  id ='$ID'";
	$query_run = mysqli_query($connection, $query);

	if ($query_run) {
		# code...
		$_SESSION['success'] = "Khóa học đã xóa";
		header('Location: khoa_hoc.php');
	} else {
		# code...
		$_SESSION['status'] = "Xóa khóa học thất bại";
		header('Location: khoa_hoc.php');
	}
}



if (isset($_POST['btndangtin'])) {
	$productName = $_POST['productName'];
	$iduser = $_POST['iduser'];
	$time = date("Y-m-d H:i:s");
	$productPrice = $_POST['productPrice'];
	$address = $_POST['address'];
	$productDescription = $_POST['productDescription'];
	// $productImage = $_POST['productImage'];
	$category = $_POST['category'];

	if ($productName != '' && $productPrice != '' && $address != '' && $productDescription != ''  && $category != '') {
		# code...
		$query = "INSERT INTO news(IDUser,IDBrand,Name,Price,img,Time,Description,Address,Type) VALUES('$iduser','$category','$productName','$productPrice','productImage','$time','$productDescription','$address','$category')";
		$query_run = mysqli_query($connection, $query);
		if ($query_run) {
			# code...
			//echo "Saved";
			header('Location: index2.php');
			echo'<script>alert("Đăng tin thành công");</script>';

		} else {
			header('Location: dangtin.php');
			echo'<script>alert("Đăng tin không thành công");</script>';

		}
	} else {
		# code...

	}
}
?>



</html>