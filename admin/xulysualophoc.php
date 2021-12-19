

<?php
include("./ketnoi.php");
    if(isset($_POST['sualop']))
    {
        $id = $_POST["txt_mlh"];
        $ten = $_POST["txt_tlh"];
        $ss= $_POST["txt_ss"];
       
    
        $query = "UPDATE tbl_lop SET TenLop ='$ten', SiSo ='$ss'  WHERE MaLopHoc ='$id' ";
        $query_run = mysqli_query($kn, $query);
    
        if(mysqli_query($kn, $query)){
            echo "<script language=javascript> alert('Sửa Thành Công'); window.location ='QLLOP.php';
            </script>";
            
        }
        else{
            echo "<script language=javascript> alert('Sửa học sinh không thành công'); window.location ='QLLOP.php';
            </script>";
           
        }   
    }

?>