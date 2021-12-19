<?php 
    include("./header.php");
    include "./ketnoi.php";
    $sql = "select * from tbl_lop";
    $result = mysqli_query($kn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị lớp học</title>
</head>
    <style>
        .card_table{
            width: 90%;
            margin: auto;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            border-radius: 8px;
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
        .header_qllop{
            width: 80%;
            height: 80px;
            background-color: #ffffff;
            border-radius: 10px;
            margin: auto;
            margin-bottom: 1rem;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
        .header_qllop .btn_qllop{
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
    <div class="header_qllop">
        <a href="./themlophoc.php">
            <button class="btn_qllop">Thêm</button>
        </a>
    </div>
    <?php
    if(isset($_SESSION['status']))
    {
        ?>
    <div class="container mt-5">
    <div class="row">
   
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
            <div class="alert alert_success"> <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button> <strong><?= $_SESSION['status']; ?></strong> </div>
        </div>
     
       
    </div>
</div>
<?php 
        unset($_SESSION['status']);
}
?>
    <div class="card_table">
    <table id="paginationSimpleNumbers" class="table datatable">
    <thead>
        <tr>
        <th scope="col">Mã lớp học</th>
        <th scope="col">Tên lớp học</th>
        <th scope="col">Sĩ số</th>
        <th scope="col">Tác vụ</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['MaLopHoc']; ?> </td>
						<td><?php echo $row['TenLop']; ?></td>
                        <td><?php echo $row['SiSo']; ?></td>
						<td class="td_sua">
              <a class="a_sua" href="sualophoc.php?Ma=<?php echo $row['MaLopHoc']; ?>"><i class='bx bxs-edit'></i></a>
							<a class="a_sua1" onclick="return window.confirm('Bạn muốn xóa không');" href="xoalophoc.php?ma_lop=<?php echo $row['MaLopHoc']; ?>"><i class='bx bx-trash'></i> </a>
						</td>
          
					</tr>
			 <?php } ?>  
    </table>
    </div>
<?php 
    include("./footer.php");
?>