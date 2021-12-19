<?php 
session_start();
    include("./header.php");
    include "./ketnoi.php";
    $sql = "select * from tbl_monhoc";
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
            width: 100%;
            margin: auto;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        .table.dataTable {
            width: 100%;
            border: 1px solid #f2f2f2;
            font-size: 15px;
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
        .header_qlmh{
            width: 80%;
            height: 80px;
            background-color: #ffffff;
            border-radius: 10px;
            margin: auto;
            margin-bottom: 1rem;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
        .header_qlmh .btn_qlmh{
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
        .alert {
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 4px;
    color: #fff;
    text-transform: uppercase;
    font-size: 12px
}
button.close {
    -webkit-appearance: none;
    padding: 0;
    cursor: pointer;
    background: 0 0;
    border: 0
}

.close {
    font-size: 20px;
    color: #fff;
    opacity: 0.9;
    font-weight: normal
}

.alert_success {
    background-color: #09c97f;
    border: 2px solid #09c97f
}
.fade_success .close {
    color: #09c97f
}
    </style>
<body>
    <div class="header_qlmh">
        <a href="./themmonhoc.php">
            <button class="btn_qlmh">Thêm</button>
        </a>
    </div>
    <!--alert---->
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
    <!--end---->

    <?php
    if(isset($_SESSION['status1']))
    {
        ?>
        
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Thông Báo!</strong> <?= $_SESSION['status1']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php 
        unset($_SESSION['status1']);
    }
    ?>
    <div class="card_table">
    <table id="paginationSimpleNumbers" class="table datatable">
    <thead>
        <tr>
        <th scope="col">Mã môn học</th>
        <th scope="col">Tên môn học</th>
        <th scope="col">Số tiết</th>
        <th scope="col">Tác vụ</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($result)) {
	
			 ?>
					<tr>
						<td><?php echo $row['MaMonHoc']; ?> </td>
						<td><?php echo $row['TenMH']; ?></td>
                        <td><?php echo $row['SoTiet']; ?></td>
						<td class="td_sua">
              <a class="a_sua" href="suamonhoc.php?Ma=<?php echo $row['MaMonHoc']; ?>"><i class='bx bxs-edit'></i></a>
							<a class="a_sua1" onclick="return window.confirm('Bạn muốn xóa không');" href="xoamonhoc.php?ma_mh=<?php echo $row['MaMonHoc']; ?>"><i class='bx bx-trash'></i></a>
						</td>
          
					</tr>
			 <?php } ?>  
    </table>
    </div>
<?php 
    include("./footer.php");
?>