<?php 
    session_start();
    include("./header.php");
    include "./ketnoi.php";
    $sql = "select * from tbl_khoangthu";
    $result = mysqli_query($kn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị khoảng thu</title>
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
            width: 45px;
            height: 30px;
            background-color: #0066ff;
            text-align: center;
            border-radius: 4px;
            margin-right: 8px;
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
        .alert-success {
            width: 90%;
            margin: auto;
            margin-bottom: 10px;
        }
        .btn_qlkthu {
            width: 150px;
            height: 40px;
            border-radius: 5px;
            border: none;
            background-color: #0066ff;
            color: #fff;
            margin-left: 3.5rem;
            margin-bottom: 20px;
        }
    </style>
<body>
    <div class="header_qlkthu">
        <a href="./themKThu.php">
            <button class="btn_qlkthu">Thêm</button>
        </a>
    </div>
    <?php
    if(isset($_SESSION['status']))
    {
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thông báo !</strong> <?= $_SESSION['status']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php 
        unset($_SESSION['status']);
    }
    if(isset($_SESSION["status_sua"])){
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thông báo !</strong> <?= $_SESSION['status_sua']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php 
        unset($_SESSION['status_sua']);

    }
    ?>
    <div class="card_table">
    <table class="table datatable">
    <thead >
        <tr>
        <th scope="col">Mã khoảng thu</th>
        <th scope="col">Tên khoảng thu</th>
        <th scope="col">Số tiền</th>
        <th scope="col">Tác vụ</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['MaKT']; ?> </td>
						<td><?php echo $row['TenKT']; ?></td>
                        <td><?php echo $row['SoTien']; ?></td>
						<td class="td_sua">
                            <a class="a_sua" href="suakhoanthu.php?Ma= <?php echo $row['MaKT'] ?>"><i class='bx bxs-edit'></i></a>
							<a class="a_sua1" onclick="return window.confirm('Bạn muốn xóa không');" href="xoakhoangthu.php?ma_kthu=<?php echo $row['MaKT']; ?>"><i class='bx bx-trash'></i> </a>
						</td>
          
					</tr>
			 <?php } ?>  
    </table>
    </div>
<?php 
    include("./footer.php");
?>