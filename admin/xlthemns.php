<?php
    include("./ketnoi.php");
    $mns = $_POST["mans"];
    $hoten = $_POST["tenns"];
    $cmnd = $_POST["cmnd"];
    $GT = $_POST["gioitinh"];
    $quequan = $_POST["quequan"];
    $dienthoai = $_POST["dt"];
    $ngaysinh = $_POST["ngaysinh"];
    $dantoc = $_POST["dantoc"];
    $chucvu = $_POST["chucvu"];
    $sql = "select * from tbl_nhansu where MaNV = '.$mns.'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        echo "<script language=javascript> alert('Mã nhân sự đã tồn tại');
        </script>";
    }
    else
    {
        $sql_1 = "INSERT INTO tbl_nhansu (MaNV, HoTenNV, CMND, GioiTinh, QueQuan, DienThoai,NgaySinh, DanToc, MaChucVu ) values('".$mns."', '".$hoten."', '".$cmnd."', '".$GT."', '".$quequan."', '".$dienthoai."', '".$ngaysinh."', '".$dantoc."','".$chucvu."')";
        $kq_1 = mysqli_query($kn, $sql_1) or die ("Không thể thêm học sinh này" .mysqli_error($kn, $sql_1));
    }
            echo "<script language=javascript> alert('Thêm thành công'); window.location ='QLNS.php';
        </script>";
  

?>