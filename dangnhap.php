<?php
    session_start();
    require("user/header.php");
    require("admin/ketnoi.php");
    
    // if(isset($_POST["btn-submit"])){
    //     $taikhoan = $_POST["user"];
    //     $matkhau = md5($_POST["pass"]);
    //     $sql = "SELECT * FROM tbl_taikhoan WHERE TenDangNhap = '".$taikhoan."' AND MatKhau ='".$matkhau."' LIMIT 1";
    //     $row = mysqli_query($kn, $sql);
    //     $count = mysqli_num_rows($row);
    //     if($count > 0){
    //         $_SESSION["dangnhap"] = $taikhoan;
    //         header("location: ./indexad.php");
    //         echo "<script>alert('Đăng nhập thành công!')</script>";
    //         header("location: admin/indexad.php.php");
    //     }        
    //     else{
    //         echo "<script>alert('Tên đăng nhập hoặc mật khẩu sai!')</script>";
    //         header("location: dangnhap.php");
    //     }
    // }
    if(isset($_POST["btn-submit"])){
    $user=$_POST["user"];
	$pass=md5($_POST["pass"]);
	$sql="select * from tbl_taikhoan where TenDangNhap='".$user."' and MatKhau ='".$pass."'";
	$kq=mysqli_query($kn, $sql);
	if(mysqli_num_rows($kq) > 0){
		$_SESSION["tbl_taikhoan"]=$user;
		echo "<script language=javascript>
			alert('Đăng nhập thành công!');
			window.location='./indexad.php'
			</script>";
	}else{
		
		echo "<script language=javascript>
			alert('Sai tên đăng nhập hoặc mật khẩu');
			window.location='index.php'
			</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          .form-login {
              width: 350px;
              height: 400px;
              margin: auto;
              box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
              border-radius: 5px;
          }
          .form-login h3{
              text-align: center;
              font-size: 25px;
              font-weight: 600;
              color: #0066ff;
              padding-top: 30px;
              padding-bottom: 15px;
          }
          .input-form {
              width: 80%;
              margin: auto;
              height: 45px;
              margin-top: 1rem;
              margin-bottom: 25px;
              display: flex;
              justify-content: center;
              align-items: center;
          }
          .input-form:focus{
              border: 1px solid #0066ff;
          }
          .btn-sb {
              width: 150px;
              padding: 8px;
              background-color: #0066ff;
              border-radius: 5px;
              border: none;
              display: flex;
              justify-content: center;
              align-items: center;
              margin: auto;
              color: #fff;
          }
    </style>
</head>
<body>
        <div class="form-login">
            <h3>Đăng Nhập</h3>
            <form method="POST">
                <input type="text" name="user" class="input-form" placeholder="Tên đăng nhập">
                <input type="password" name="pass" class="input-form" placeholder="Mật khẩu">
                <button type="submit" name="btn-submit" class="btn-sb">Đăng Nhập</button>
            </form>
        </div>
</body>
</html>
<?php
    require("user/fotter.php");

?>