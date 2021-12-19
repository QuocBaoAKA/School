<?php 
    include("./header.php");
    include "./ketnoi.php";
    $sql = "select * from tbl_chucvu";
    $result = mysqli_query($kn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị chức vụ</title>
</head>
    <style>
        .card_table{
            width: 90%;
            margin: auto;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        .table.dataTable {
            width: 100%;
            border: 1px solid #f2f2f2;
            
            background-color: #ffffff;
            margin-left: 12px;
        }
        .dataTables_filter{
            margin-top: 15px;
            margin-bottom: 1rem;
            padding-right: 5px;
        }
       .dataTables_length{
           margin-top: 15px;
           padding-left: 5px;
       }
        .table th{
            font-size: 16px;
            background-color: #000;
            color: #fff;
            margin-top: 1rem;
        }
        .table tr{
            border-bottom: 1px solid #f2f2f2;
        }
        .header_qlcv{
            width: 80%;
            height: 80px;
            background-color: #ffffff;
            border-radius: 10px;
            margin: auto;
            margin-bottom: 1rem;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
        .header_qlcv .btn_qlcv{
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
            width: 40px;
            height: 30px;
            background-color: #0066ff;
            text-align: center;
            border-radius: 8px;
            margin-right: 8px;
        }
         .a_sua1{
            width: 40px;
            height: 30px;
            background-color: red;
            text-align: center;
            border-radius: 8px;
        }
         .a_sua, .a_sua1 i{
            color: #fff;
            padding-top: 5px;
            font-size: 16px;
        }
    </style>
<body>
    <div class="header_qlcv">
        <a href="themchucvu.php">
            <button class="btn_qlcv">Thêm</button>
        </a>
    </div>
    <div class="card_table">
    <table id="paginationSimpleNumbers" class="table">
    <thead>
        <tr>
        <th scope="col">Mã chức vụ</th>
        <th scope="col">Tên chức vụ</th>
        <th scope="col">Tác vụ</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['MaChucVu']; ?> </td>
						<td><?php echo $row['TenDN']; ?></td>
						<td class="td_sua">
              <a class="a_sua" href="suachucvu.php?Ma=<?php echo $row['MaChucVu']; ?>"><i class='bx bxs-edit'></i></a>
							<a class="a_sua1" onclick="return window.confirm('Bạn muốn xóa không');" href="xoachucvu.php?ma_cv=<?php echo $row['MaChucVu']; ?>"><i class='bx bx-trash'></i> </a>
						</td>
          
					</tr>
			 <?php } ?>  
    </table>
    </div>
<?php 
    include("./footer.php");
?>