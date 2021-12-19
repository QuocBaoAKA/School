<?php
session_start();
?>
<?php
	include ("./ketnoi.php");
	if(isset($_POST["name_login"])){
		$user=$_POST["email"];
		$pass=md5($_POST["password"]);
		$sql="select * from tbl_taikhoan where TenDN='".$user."' and MatKhau ='".$pass."'";
		$kq=mysqli_query($kn, $sql);
		if(mysqli_num_rows($kq)==1){
			$_SESSION["tbl_taikhoan"]=$user;
			echo "<script language=javascript>
				alert('Đăng nhập thành công!');
				window.location='admin/indexad.php'
				</script>";
		}else{
			
			echo "<script language=javascript>
				alert('Sai tên đăng nhập hoặc mật khẩu');
				window.location='index.php'
				</script>";
		}
	}
	
?>