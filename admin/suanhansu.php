<?php 
    include("./header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .form-label{
        text-transform: capitalize;
        
      }
      .btn-primary{
        width: 150px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
        color: #fff;
      }
      .btn-primary:hover{
        color: #fff;
      }
      .px-5{
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      }
      .btn-primary{
        background-color: #0066ff;
        margin-bottom: 15px;
      }
    </style>
</head>
<body>

<?php 
      include("./ketnoi.php");
      $id = $_REQUEST["Ma"];
      $query = mysqli_query($kn, "select * from tbl_nhansu where MaNV = '".$id."'");
      foreach($query as $key)
      {
        $id = $key["MaNV"];
        $ten = $key["HoTenNV"];
        $cmnd = $key["CMND"];
        $gt = $key["GioiTinh"];
        $qq = $key["QueQuan"];
        $dth = $key["DienThoai"];
        $dt = $key["DanToc"];
        $ns = $key["NgaySinh"];
        $mcv = $key["MaChucVu"];
      
      }

    ?>
  <!---fomr sua---->
  <h3>Sửa Nhân Sự</h3>
  <div class="container px-5 my-5">
    
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="./xulysuanhansu.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="newField">Mã nhân viên</label>
            <input class="form-control" id="newField" type="text" placeholder="" readonly name="txt_mnv" value="<?php echo $id ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField:required"></div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Tên nhân viên</label>
            <input class="form-control" id="newField9" type="text" placeholder="" data-sb-validations="required" name="txt_tnv" value="<?php echo $ten ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField9:required">Tên học sinh không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Chứng minh thư</label>
            <input class="form-control" id="newField12" type="text" placeholder="" data-sb-validations="required" name="txt_cmnd" value="<?php echo $cmnd ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField12:required">Năm sinh không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Gioi tính</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="optionA" type="radio" name="newField10" required value="Nam"  />
                <label class="form-check-label" for="optionA">Nam</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="optionB" type="radio" name="newField10" data-sb-validations="required" value="Nữ" />
                <label class="form-check-label" for="optionB">Nữ</label>
            </div>
           
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Quê quán</label>
            <input class="form-control" id="newField12" type="text" placeholder="" data-sb-validations="required" name="txt_qq" value="<?php echo $qq ?>" />
            
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField3">Điện thoại</label>
            <input class="form-control" id="newField3" type="text" placeholder="" data-sb-validations="required" name="txt_dth" value="<?php echo $dth ?>" />
          
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField4">Dân tộc</label>
            <input class="form-control" id="newField4" type="text" placeholder="" data-sb-validations="required" name="txt_dt" value="<?php echo $dt ?>" />
          
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField5">Ngày sinh</label>
            <input class="form-control" id="newField5" type="date" placeholder=""  required name="txt_ns" value="<?php echo $ns ?>" />
            
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField6">Mã chức vụ</label>
            <input class="form-control" id="newField6" type="text" placeholder="" data-sb-validations="required" name="txt_mcv" value="<?php echo $mcv ?>" />
            
        </div>
      
        <div class="d-grid">
            <button class="btn btn-primary" id="submitButton" type="submit" name="suanhansu">sửa</button>
        </div>
    </form>
</div>
  <!---end---->
</body>
</html>
<?php 
    include("./footer.php");
?>