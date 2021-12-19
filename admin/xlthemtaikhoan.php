<?php
    session_start();
    include("./ketnoi.php");
    $mtk = $_POST["txt_mtk"];
    $ttk = $_POST["txt_ttk"];
    $tq = $_POST["txt_tq"];
    $mk = $_POST["txt_mk"];
    $dc = $_POST["txt_dc"];
    $sdt = $_POST["txt_sdt"];
    $gioitinh = $_POST["gioitinh"];
    $ns= $_POST["txt_ns"];
   

    $sql = "select * from tbl_taikhoan where MaTK = '.$mtk.'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        echo "<script language=javascript> alert('Mã khen thưởng đã tồn tại');
        </script>";
    }
    else
    {
        $sql_1 = "insert into tbl_taikhoan values('".$mtk."', '".$ttk."', '".$tq."', '".$mk."', '".$dc."', '".$sdt."', '".$gioitinh."', '".$ns."')";
        $kq_1 = mysqli_query($kn, $sql_1) or die ("Không thể thêm khen thưởng này" .mysqli_error($kn, $sql_1));

    }
        // echo "<script language=javascript> alert('Thêm thành công'); window.location ='QLTK.php';
        // </script>";
        $_SESSION['status'] = "Thêm thành công";
        header('location: QLTK.php');
?>