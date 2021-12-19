

<?php
include("./ketnoi.php");
    if(isset($_POST['suakhenthuong']))
    {
        $id = $_POST["txt_mkt"];
        $ten = $_POST["txt_tkt"];
        $tlh = $_POST["txt_tlh"];
        $lkt= $_POST["txt_lkt"];
        $thk= $_POST["txt_thk"];
    
        $query = "UPDATE tbl_khenthuong SET TenKT ='$ten', TenLop ='$tlh', LoaiKT ='$lkt', TenHK ='$thk'  WHERE MaKT ='$id' ";
        $query_run = mysqli_query($kn, $query);
    
        if(mysqli_query($kn, $query)){
            echo "<script language=javascript> alert('Sửa Thành Công'); window.location ='QLKHENTHUONG.php';
            </script>";
            
        }
        else{
            echo "<script language=javascript> alert('Sửa học sinh không thành công'); window.location ='QLKHENTHUONG.php';
            </script>";
           
        }   
    }

?>