

<?php
include("./ketnoi.php");
    if(isset($_POST['suask']))
    {
        $id = $_POST["txt_mhs"];
        $ten = $_POST["mahocsinh"];
        $ss= $_POST["txt_sk"];
        $ssa= $_POST["txt_cc"];
        $ss1= $_POST["txt_tlh"];
        $ss2 =$_POST["txt_ns"];
    
        $query = "UPDATE tbl_tinhhinhsuckhoe SET MaHS ='$ten', SucKhoe ='$ss', ChieuCao ='$ssa', CanNang ='$ss1', NhietDo ='$ss2'  WHERE MaTHSK ='$id' ";
        $query_run = mysqli_query($kn, $query);
    
        if(mysqli_query($kn, $query)){
            echo "<script language=javascript> alert('Sửa Thành Công'); window.location ='QLTHSK.php';
            </script>";
            
        }
        else{
            echo "<script language=javascript> alert('Sửa học sinh không thành công'); window.location ='QLTHSK.php';
            </script>";
           
        }   
    }

?>