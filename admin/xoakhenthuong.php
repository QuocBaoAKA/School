<?php
include("./ketnoi.php");
$user_xoa=$_REQUEST["ma_khth"]; //Nhận giá trị user từ link xóa của quantri.php
$sql="delete from tbl_khenthuong where MaKT='".$user_xoa."'";
$kq=mysqli_query($kn,$sql) or die ("Không thể xuất thông tin này ".mysqli_error($kn, $sql));
echo ("<script language=javascript>
{
confirm('Xóa thành công');
window.location='QLKHENTHUONG.php';
}   
</script>
");
?>