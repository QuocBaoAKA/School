

<?php
include("./ketnoi.php");
    if(isset($_POST['suataikhoan']))
    {
        $id = $_POST["txt_mtk"];
        $ttk = $_POST["txt_ttk"];
        $tq = $_POST["txt_tq"];
        $mk = $_POST["txt_mk"];
        $dc = $_POST["txt_dc"];
        $sdt = $_POST["txt_sdt"];
        $gt = $_POST["txt_gt"];
        $ns = $_POST["txt_ns"];
    
        $query = "UPDATE tbl_taikhoan SET TenDN ='$ttk', TenQuyen ='$tq', MatKhau ='$mk', DiaChi ='$dc', SDT ='$sdt', GioTinh ='$gt', NgaySinh ='$ns'  WHERE MaTK ='$id' ";
        $query_run = mysqli_query($kn, $query);
    
        if(mysqli_query($kn, $query)){
            echo "<script language=javascript> alert('Sửa Thành Công'); window.location ='QLTK.php';
            </script>";
            
        }
        else{
            echo "<script language=javascript> alert('Sửa tài khoản không thành công'); window.location ='QLTK.php';
            </script>";
           
        }   
    }

?>