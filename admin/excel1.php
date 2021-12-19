<?php
    include("./ketnoi.php");
    require 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use PhpOffice\PhpSpreadsheet\Writer\Xls;
    use PhpOffice\PhpSpreadsheet\Writer\Csv;
if(isset($_POST["btn-gui-excel"])){

        $FileName = $_FILES["file-exce-import"]["name"];
       
        $file_ext = pathinfo($FileName, PATHINFO_EXTENSION );
        $allowed_ext = ['xls', 'csv', 'xlsx'];
        if(in_array($file_ext, $allowed_ext)){
            $inputFileNamePath = $_FILES["file-exce-import"]["tmp_name"];
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
            $data = $spreadsheet->getActiveSheet()->toArray();

            foreach($data as $row){
                $MaHS =  $row['0'];
                $TenHS = $row['1'];
                $MaLop = $row['2'];
                $TenLop =  $row['3'];
                $GioiTinh = $row['4'];
                $NamSinh = $row['5'];
                $DiaChiHS = $row['6'];
                $HoTenCha = $row['7'];
                $NgheNghiep = $row['8'];
                $SDT = $row['9'];
                $HoTenMe = $row['10'];
                $NgheNghiepMe = $row['11'];
                $SDTMe = $row['12'];

                $studentQuery = "INSERT INTO tbl_hocsinh (MaHS, TenHS, MaLop, TenLop, GioiTinh, NamSinh, DiaChiHS, HoTenCha, NgheNghiep, SDT, HoTenMe, NheNghiepMe, SDTMe) VALUE ('$MaHS', '$TenHS', '$MaLop', '$TenLop', '$GioiTinh', '$NamSinh', '$DiaChiHS', '$HoTenCha', '$NgheNghiep', '$SDT', '$HoTenMe', '$NgheNghiepMe', '$SDTMe')";
                $result = mysqli_query($kn, $studentQuery);
                $msg = true;

                if($msg){
                    echo "<script>alert('Thêm thành công'); window.location ='./QLHS.php'</script>";
                    exit(0);
                }
            }
        }
        else{
            echo "<script>alert('Thêm không thành công'); window.location ='./QLHS.php'</script>";
            exit(0);
        }
    }
    ?>