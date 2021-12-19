<?php
    session_start();
    include("./ketnoi.php");
    $md = $_POST["txt_md"];
    $mhs = $_POST["txt_mhs"];
    $ths = $_POST["malophoc"];
    $thk = $_POST["txt_thk"];
    $tmh = $_POST["txt_tmh"];
    $dm = $_POST["txt_dm"];
    $dgk = $_POST["txt_dgk"];
    $dck = $_POST["txt_dck"];
    $dtk = $_POST["txt_dtk"];
    $kq = $_POST["txt_kq"];

    $sql = "select * from tbl_diem where MaDiem = '.$md.'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        echo "<script language=javascript> alert('Mã khen thưởng đã tồn tại');
        </script>";
    }
    else
    {
        $sql_1 = "insert into tbl_diem values('".$md."', '".$mhs."', '".$ths."', '".$thk."', '".$tmh."', '".$dm."', '".$dgk."', '".$dck."', '".$dtk."', '".$kq."')";
        $kq_1 = mysqli_query($kn, $sql_1) or die ("Không thể thêm khen thưởng này" .mysqli_error($kn, $sql_1));

    }
        // echo "<script language=javascript> alert('Thêm thành công'); window.location ='QLDIEM.php';
        // </script>";
        $_SESSION['status'] = "Thêm thành công";
        header('location: QLDIEM.php');
?>