

<?php
include("./ketnoi.php");
    if(isset($_POST['suachucvu']))
    {
        $id = $_POST["txt_mcv"];
        $ten = $_POST["txt_tcv"];
        
    
        $query = "UPDATE tbl_chucvu SET TenDN ='$ten'  WHERE MaChucVu ='$id' ";
        $query_run = mysqli_query($kn, $query);
    
        if(mysqli_query($kn, $query)){
            echo "<script language=javascript> alert('Sửa Thành Công'); window.location ='QLCV.php';
            </script>";
            
        }
        else{
            echo "<script language=javascript> alert('Sửa học sinh không thành công'); window.location ='QLCV.php';
            </script>";
           
        }   
    }

?>