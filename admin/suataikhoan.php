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
        background-color: #0066ff;
        color: #fff;
        margin-bottom: 15px;
      }
      .btn-primary:hover{
        color: #fff;
      }
      .px-5{
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      }
    </style>
</head>
<body>

<?php 
      include("./ketnoi.php");
      $id = $_REQUEST["Ma"];
      $query = mysqli_query($kn, "select * from tbl_taikhoan where MaTK = '".$id."'");
      foreach($query as $key)
      {
        $id = $key["MaTK"];
        $ttk = $key["TenDN"];
        $tq = $key["TenQuyen"];
        $mk = $key["MatKhau"];
        $dc = $key["DiaChi"];
        $sdt = $key["SDT"];
        $gt = $key["GioiTinh"];
        $ns = $key["NgaySinh"];
      }

    ?>
  <!---fomr sua---->
  <div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="./xulysuataikhoan.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="newField">Mã tài khoản</label>
            <input class="form-control" id="newField" type="text" placeholder="" readonly name="txt_mtk" value="<?php echo $id ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField:required"></div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Tên tài khoản</label>
            <input class="form-control" id="newField9" type="text" placeholder="" data-sb-validations="required" name="txt_ttk" value="<?php echo $ttk ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField9:required">Tên khen thưởng không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Tên quyền</label>
            <input class="form-control" id="newField9" type="text" placeholder="" data-sb-validations="required" name="txt_tq" value="<?php echo $tq ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField9:required">Tên khen thưởng không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Mật khẩu</label>
            <input class="form-control" id="newField12" type="text" placeholder="" data-sb-validations="required" name="txt_mk" value="<?php echo $mk ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField12:required">Loại khen thưởng không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Địa chỉ</label>
            <input class="form-control" id="newField12" type="text" placeholder="" data-sb-validations="required" name="txt_dc" value="<?php echo $dc ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField12:required">Mã học kì không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Số điện thoại</label>
            <input class="form-control" id="newField12" type="text" placeholder="" data-sb-validations="required" name="txt_sdt" value="<?php echo $sdt ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField12:required">Mã học kì không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Giới tính</label>
            <input class="form-control" id="newField12" type="text" placeholder="" data-sb-validations="required" name="txt_gt" value="<?php echo $gt ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField12:required">Mã học kì không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Ngày sinh</label>
            <input class="form-control" id="newField12" type="text" placeholder="" data-sb-validations="required" name="txt_ns" value="<?php echo $ns ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField12:required">Mã học kì không được để trống.</div>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary" id="submitButton" type="submit" name="suataikhoan">sửa</button>
        </div>
    </form>
</div>
  <!---end---->
</body>
</html>
<?php 
    include("./footer.php");
?>