<?php
    session_start();
    include("./ketnoi.php");
    $mkt = $_POST["txt_mkt"];
    $tkt = $_POST["txt_tkt"];
    $tlh = $_POST["txt_tlh"];
    $lkt= $_POST["txt_lkt"];
    $thk= $_POST["txt_thk"];
   

    $sql = "select * from tbl_khenthuong where MaKT = '.$mkt.'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        echo "<script language=javascript> alert('Mã khen thưởng đã tồn tại');
        </script>";
    }
    else
    {
        $sql_1 = "insert into tbl_khenthuong values('".$mkt."', '".$tkt."', '".$tlh."', '".$lkt."', '".$thk."')";
        $kq_1 = mysqli_query($kn, $sql_1) or die ("Không thể thêm khen thưởng này" .mysqli_error($kn, $sql_1));

    }
        // echo "<script language=javascript> alert('Thêm thành công'); window.location ='QLKHENTHUONG.php';
        // </script>";
        $_SESSION['status'] = "Thêm thành công";
        header('location: QLKHENTHUONG.php');
?>