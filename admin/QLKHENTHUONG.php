<?php 
    include("./header.php");
    include "./ketnoi.php";
    $sql = "select * from tbl_khenthuong";
    $result = mysqli_query($kn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị khen thưởng</title>
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
        .header_qlkhth{
            width: 80%;
            height: 80px;
            background-color: #ffffff;
            border-radius: 10px;
            margin: auto;
            margin-bottom: 1rem;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
        .header_qlkhth .btn_qlkhth{
            width: 133px;
            height: 50px;
            background-color: #0066ff;
            border: none;
            border-radius: 15px;
            margin-top: 15px;
            margin-left: 20px;
            color: #fff;
        }
        .td_sua{
            display: flex;
            height: 84.5px;
        }
        .td_sua .a_sua{
            width: 45px;
            height: 30px;
            background-color: #0066ff;
            text-align: center;
            border-radius: 4px;
            margin-right: 8px;
            color: #fff;
        }
         .a_sua1{
            width: 45px;
            height: 30px;
            background-color: red;
            text-align: center;
            border-radius: 4px;
        }
         .a_sua, .a_sua1 i{
            color: #fff;
            padding-top: 5px;
            font-size: 16px;
        }    
    </style>
<body>
    <div class="header_qlkhth">
        <a href="themkhenthuong.php">
            <button class="btn_qlkhth">Thêm</button>
        </a>
    </div>
    <div class="card_table">
    <table  class="table datatable">
    <thead  class="table-dark">
        <tr>
        <th scope="col">Mã khen thưởng</th>
        <th scope="col">Tên khen thưởng</th>
        <th scope="col">Tên lớp học</th>
        <th scope="col">Loại khen thưởng</th>
        <th scope="col">Tên học kì</th>
        <th scope="col">Tác vụ</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['MaKT']; ?> </td>
						<td><?php echo $row['TenKT']; ?></td>
                        <td><?php echo $row['TenLop']; ?></td>
                        <td><?php echo $row['LoaiKT']; ?></td>
                        <td><?php echo $row['TenHK']; ?></td>
						<td class="td_sua">
              <a class="a_sua" href="suakhenthuong.php?Ma=<?php echo $row['MaKT']; ?>"><i class='bx bxs-edit'></i></a>
							<a class="a_sua1" onclick="return window.confirm('Bạn muốn xóa không');" href="xoakhenthuong.php?ma_khth=<?php echo $row['MaKT']; ?>"><i class='bx bx-trash'></i></a>
						</td>
          
					</tr>
			 <?php } ?>  
    </table>
    </div>
<?php 
    include("./footer.php");
?>