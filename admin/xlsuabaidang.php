

<?php
include("./ketnoi.php");
    if(isset($_POST['suabd']))
    {
        $id = $_POST["txt_mbd"];
        $tbd = $_POST["txt_tbd"];
        $mbd = $_POST["txt_ngaydang"];
        $theloai = $_POST["txt_tl"];
        $noidung = $_POST["txt_noidung"];
        $tailieu = $_POST["txt_tailieu"];
        $anh = $_FILES['anh']['name'];
        $anh_tmp_name = $_FILES["anh"]["tmp_name"];
        
        move_uploaded_file($image_tmp_name, './upload/'.$anh);
        $query = "UPDATE tbl_baidang SET TenBaiDang ='$tbd', NgayDang ='$mbd', NoiDung ='$noidung', Hinhanh ='$anh', TheLoai ='$theloai', TaiLieu ='$tailieu'  WHERE MaBaiDang ='$id' ";
        $query_run = mysqli_query($kn, $query);
    
        if(mysqli_query($kn, $query)){
            echo "<script language=javascript> alert('Sửa Thành Công')';
            </script>";
            
        }
        else{
            echo "<script language=javascript> alert('Sửa học sinh không thành công'); window.location ='QLBD.php';
            </script>";
           
        }   
    }

?>