<?php
    include("./ketnoi.php");
    $mma = $_POST["txt_mma"];
    $tma = $_POST["txt_tma"];
    $tpdd= $_POST["txt_tpdd"];
    $gia= $_POST["txt_gia"];
    $sql = "select * from tbl_monan where MaMonAn = '.$mma.'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        echo "<script language=javascript> alert('Mã món ăn đã tồn tại');
        </script>";
    }
    else
    {
        $sql_1 = "insert into tbl_monan values('".$mma."', '".$tma."', '".$tpdd."', '".$gia."')";
        $kq_1 = mysqli_query($kn, $sql_1) or die ("Không thể thêm khen thưởng này" .mysqli_error($kn, $sql_1));

    }
        echo "<script language=javascript> alert('Thêm thành công'); window.location ='QLMA.php';
        </script>";
?>