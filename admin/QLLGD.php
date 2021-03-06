<?php 
    include("./header.php");
    include "./ketnoi.php";
    $sql = "select * from tbl_lichgiangday";
    $result = mysqli_query($kn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị lịch giảng dạy</title>
</head>
    <style>
        .card_table{
            width: 90%;
            margin: auto;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        .table {
            width: 80%;
            border: 1px solid #f2f2f2;
            margin: auto;
            background-color: #ffffff;
        }
        .header_qlgd{
            width: 80%;
            height: 80px;
            background-color: #ffffff;
            border-radius: 10px;
            margin: auto;
            margin-bottom: 1rem;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
        .header_qlgd .btn_qlgd{
            width: 133px;
            height: 50px;
            background-color: #0066ff;
            border: none;
            border-radius: 15px;
            margin-top: 15px;
            margin-left: 20px;
            color: #fff;
        }
    </style>
<body>
    <div class="header_qlgd">
        <a href="#">
            <button class="btn_qlgd">Thêm</button>
        </a>
    </div>
    <div class="card_table">
    <table class="table align-middle">
    <thead>
        <tr>
        <th scope="col">Mã giảng dạy</th>
        <th scope="col">Mã tài khoản</th>
        <th scope="col">Buổi dạy</th>
        <th scope="col">Số tiết</th>
        <th scope="col">Tuần học</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['MaGiangDay']; ?> </td>
						<td><?php echo $row['MaTK']; ?></td>
                        <td><?php echo $row['BuoiDay']; ?></td>
                        <td><?php echo $row['SoTiet']; ?></td>
                        <td><?php echo $row['TuanHoc']; ?></td>
						<td class="td_sua">
              <a class="a_sua" href="sualichgiangday.php?Ma=<?php echo $row['MaGiangDay']; ?>"><i class='bx bxs-edit'></i>Sửa</a>
							<a class="a_sua1" onclick="return window.confirm('Bạn muốn xóa không');" href="xoalichgiangday.php?ma_gd=<?php echo $row['MaGiangDay']; ?>"><i class='bx bx-trash'></i> Xóa</a>
						</td>
          
					</tr>
			 <?php } ?>  
    </table>
    </div>
<?php 
    include("./footer.php");
?>