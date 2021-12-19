<?php
    include("../admin/header.php");
    include "./ketnoi.php";
    $sql = "select * from tbl_nhansu";
    $result = mysqli_query($kn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý nhân sự</title>
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
        .btn-them-ns {
            width: 250px;
            height: 40px;
            background-color: #0066ff;
            margin: auto;
            border: none;
            border-radius: 8px;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="header_qlmh">
        <a href="#">
            <button class="btn_qlmh" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Thêm</button>
        </a>
    </div>
<div class="card_table">
    <table id="paginationSimpleNumbers" class="table datatable">
    <thead>
        <tr>
        <th scope="col">Mã nhân sự</th>
        <th scope="col">Họ tên</th>
        <th scope="col">CMND/CCCD</th>
        <th scope="col">Giới tính</th>
        <th scope="col">Quê quán</th>
        <th scope="col">Điện thoại</th>
        <th scope="col">Dân tộc</th>
        <th scope="col">Ngày sinh</th>
        <th scope="col">Chức vụ</th>
        <th scope="col">Tác vụ</th>
        </tr>
    </thead>
    <?php while ($row = mysqli_fetch_array($result)) {
	
			 ?>
					<tr>
						<td><?php echo $row['MaNV']; ?> </td>
						<td><?php echo $row['HoTenNV']; ?></td>
                        <td><?php echo $row['CMND']; ?></td>
                        <td><?php echo $row['GioiTinh']; ?></td>
                        <td><?php echo $row['QueQuan']; ?></td>
                        <td><?php echo $row['DienThoai']; ?></td>
                        <td><?php echo $row['DanToc']; ?></td>
                        <td><?php echo $row['NgaySinh']; ?></td>
                        <td><?php echo $row['MaChucVu']; ?></td>
                        
						<td class="td_sua">
              <a class="a_sua" href="suanhansu.php?Ma=<?php echo $row['MaNV']; ?>"><i class='bx bxs-edit'></i></a>
							<a class="a_sua1" onclick="return window.confirm('Bạn muốn xóa không');" href="xoanhansu.php?ma_nv=<?php echo $row['MaNV']; ?>"><i class='bx bx-trash'></i></a>
						</td>
          
					</tr>
			 <?php } ?>  
    </table>
    </div>

    <!--modal---->
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Thêm nhân sự</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!---form thêm--->
        <div class="container px-5 my-5">
    <form id="contactForm" method="post" action="./xlthemns.php" >
        <div class="mb-3">
            <label class="form-label" for="maNhanSự">Mã nhân sự</label>
            <input class="form-control" id="maNhanSu" type="text" placeholder="Mã nhân sự" name="mans" required />
        </div>
        <div class="mb-3">
            <label class="form-label" for="họTen">Họ tên</label>
            <input class="form-control" id="họTen" name="tenns" type="text" placeholder="Họ tên" required />
        </div>
        <div class="mb-3">
            <label class="form-label" for="cmndCccd">CMND/CCCD</label>
            <input class="form-control" id="cmndCccd" name="cmnd" type="text" placeholder="CMND/CCCD" />
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Giới tính</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="optionA" type="radio" name="gioitinh" value="Nam" required />
                <label class="form-check-label"  for="optionA">Nam</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="optionB" type="radio" name="gioitinh" value ="Nữ"/>
                <label class="form-check-label" for="optionB" >Nữ</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="optionB" type="radio" name="gioitinh" value="Khác" />
                <label class="form-check-label" for="optionB" >Khác</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="queQuan">Quê quán</label>
            <input class="form-control" id="queQuan" name="quequan" type="text" placeholder="Quê quán" required />
        </div>
        <div class="mb-3">
            <label class="form-label" for="diệnThoại">Điện thoại</label>
            <input class="form-control" id="diệnThoại" type="text" placeholder="Điện thoại" name="dt" required />
        </div>
        
        <div class="mb-3">
            <label class="form-label" for="ngaySinh">Ngày sinh</label>
            <input class="form-control" id="ngaySinh" type="date" placeholder="Ngày sinh" name="ngaysinh" required />
        </div>
        <div class="mb-3">
            <label class="form-label" for="dantoc">Dân tộc</label>
            <input class="form-control" id="diệnThoại" type="text" placeholder="Dân tộc" name="dantoc" required />
        </div>
        <div class="mb-3">
        <label class="form-label" for="diệnThoại">Mã chức vụ</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_chucvu";
            $result = mysqli_query($kn,$sqli);

            echo "<select name='chucvu' class='form-select'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaChucVu'] ."'>" . $row['TenDN'] ."</option>";
            }
            echo "</select>";
            ?>
        </div>
       
        <div class="d-grid">
            <button class="btn-them-ns" id="submitButton" type="submit" name="themns">Thêm</button>
        </div>
    </form>
</div>
        <!---end--->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>

<?php
    include("../admin/footer.php");
?>