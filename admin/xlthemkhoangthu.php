<?php
    session_start();
    include("./ketnoi.php");
    if(isset($_POST["btn_kt"])){

    $mkthu = $_POST["txt_kt"];
    $tkthu = $_POST["txt_tkt"];
    $sotien= $_POST["txt_st"];
    $sql = "select * from tbl_khoangthu where MaKT = '.$mkthu.'";
    $kq = mysqli_query($kn, $sql) or die ("không thể truy xuất csdl".mysqli_error());
    if(mysqli_fetch_array($kq)){
        echo "<script language=javascript> alert('Mã khoảng thu đã tồn tại');
        </script>";
    }
    else
    {
        $sql_1 = "insert into tbl_khoangthu (MaKT, TenKT, SoTien) values('".$mkthu."', '".$tkthu."', '".$sotien."')";
        $kq_1 = mysqli_query($kn, $sql_1) or die ("Không thể thêm báo cáo này" .mysqli_error($kn, $sql_1));
   

    }
    {
        $_SESSION['status'] = "Thêm Thành công!";
        header("location: QLKHOANGTHU.php");

    }
}
?>