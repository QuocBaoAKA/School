

<?php
include("./ketnoi.php");
    if(isset($_POST['suaquyen']))
    {
        $id = $_POST["txt_mq"];
        $ten = $_POST["txt_tq"];
        
    
        $query = "UPDATE tbl_quyen SET TenQuyen ='$ten'  WHERE MaQuyen ='$id' ";
        $query_run = mysqli_query($kn, $query);
    
        if(mysqli_query($kn, $query)){
            echo "<script language=javascript> alert('Sửa Thành Công'); window.location ='QLQUYEN.php';
            </script>";
            
        }
        else{
            echo "<script language=javascript> alert('Sửa học sinh không thành công'); window.location ='QLQUYEN.php';
            </script>";
           
        }   
    }

?>