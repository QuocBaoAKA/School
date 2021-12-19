
<?php
include("./ketnoi.php");
    if(isset($_POST['suahs']))
    {
        $id = $_POST["txt_mhs"];
        $ths = $_POST["txt_ths"];
        $mlh = $_POST["txt_mlh"];
        $tlh = $_POST["txt_tlh"];
        $gioitinh= $_POST["newField10"];
        $namsinh = $_POST["txt_ns"];
        $diachi = $_POST["txt_dc"];
        $tencha = $_POST["txt_tencha"];
        $nghenghiep = $_POST["txt_ng"];
        $sdt = $_POST["txt_sdt"];
        $tenme = $_POST["txt_me"];
        $nghenghiepme = $_POST["txt_nnm"];
        $phone = $_POST["txt_phone"];
    
        $query = "UPDATE tbl_hocsinh SET TenHS ='$ths', MaLop ='$mlh', TenLop ='$tlh', GioiTinh ='$gioitinh', NamSinh='$namsinh', DiaChiHS='$diachi', HoTenCha='$tencha', NgheNghiep='$nghenghiep', SDT='$sdt', HoTenMe='$tenme', NheNghiepMe='$nghenghiepme', SDTMe='$phone'  WHERE MaHS ='$id' ";
        $query_run = mysqli_query($kn, $query);
    
        if(mysqli_query($kn, $query)){
            echo "<script language=javascript> alert('Sửa Thành Công'); window.location ='QLHS.php';
            </script>";
            
        }
        else{
            echo "<script language=javascript> alert('Sửa học sinh không thành công'); window.location ='QLHS.php';
            </script>";
           
        }   
    }

?>