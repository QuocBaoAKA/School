<?php
    session_start();
if(isset($_POST['suakt']))
{    
    $student_id = $_POST['txt_mkt'];
    $fullname = $_POST['txt_tkt'];
    $course = $_POST['txt_st'];

    $query = " UPDATE SET tbl_khoangthu TenKT ='$fullname', SoTien='$course'  WHERE MaKT ='$student_id' ";
    $result = mysqli_query($kn, $query); 
    if($result)
    {
        $_SESSION['status_sua'] = "Sửa Thành Công!";
        header("location: QLKHOANGTHU.php");
    } 
    else
    {
        $_SESSION['status_sua'] = "Sửa Không Thành Công!";
        header("location: suakhoanthu.php");
    }
}
?>