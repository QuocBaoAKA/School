
<?php
    session_start();
    include("./ketnoi.php");
    $mmh = $_POST["txt_mmh"];
    $tmh = $_POST["txt_tmh"];
    $sotiet = $_POST["txt_st"];

    $sql = "select * from tbl_monhoc where MaMonHoc = '.$mmh.'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        echo "<script language=javascript> alert('Mã môn học đã có! Vui lòng chọn mã khác');
        </script>";
    }
    else
    {
        $sql_1 = "insert into tbl_monhoc values('".$mmh."', '".$tmh."', '".$sotiet."')";
        $kq_1 = mysqli_query($kn, $sql_1);
        $_SESSION['status'] = "Thêm thất bại";
        header('location: QLMH.php');

    }
        // echo "<script language=javascript> alert('Thêm thành công'); window.location ='QLHS.php';
        // </script>";
        $_SESSION['status'] = "Thêm thành công";
        header('location: QLMH.php');
?>