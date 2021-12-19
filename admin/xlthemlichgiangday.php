<?php
    include("./ketnoi.php");
    $mgd = $_POST["txt_mgd"];
    $mtk = $_POST["txt_mtk"];
    $bd= $_POST["txt_bd"];
    $stiet= $_POST["txt_stiet"];
    $mth= $_POST["txt_th"];
    $sql = "select * from tbl_lichgiangday where MaGiangDay = '.$mgd.'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        echo "<script language=javascript> alert('Mã giảng dạy đã tồn tại');
        </script>";
    }
    else
    {
        $sql_1 = "insert into tbl_lichgiangday values('".$mgd."', '".$mtk."', '".$bd."', '".$stiet."','".$th."' )";
        $kq_1 = mysqli_query($kn, $sql_1) or die ("Không thể thêm lịch này" .mysqli_error($kn, $sql_1));

    }
        echo "<script language=javascript> alert('Thêm thành công'); window.location ='QLLGD.php';
        </script>";
?>