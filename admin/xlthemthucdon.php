<?php
    session_start();
    include("./ketnoi.php");
    $mtd = $_POST["txt_mtd"];
    $tg = $_POST["txt_tg"];
    $ba = $_POST["txt_ba"];
    $tma = $_POST["txt_tma"];
    $slp = $_POST["txt_slp"];
    $gi = $_POST["txt_gi"];
   
   

    $sql = "select * from tbl_thucdon where MaTD = '.$mtd.'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        echo "<script language=javascript> alert('Mã khen thưởng đã tồn tại');
        </script>";
    }
    else
    {
        $sql_1 = "insert into tbl_thucdon values('".$mtd."', '".$tg."', '".$ba."', '".$tma."', '".$slp."', '".$gi."')";
        $kq_1 = mysqli_query($kn, $sql_1) or die ("Không thể thêm thưc đon này" .mysqli_error($kn, $sql_1));

    }
        // echo "<script language=javascript> alert('Thêm thành công'); window.location ='QLTD.php';
        // </script>";
        $_SESSION['status'] = "Thêm thành công";
        header('location: QLTD.php');
?>