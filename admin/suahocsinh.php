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
    </style>
</head>
<body>

<?php 
      include("./ketnoi.php");
      $id = $_REQUEST["Ma"];
      $query = mysqli_query($kn, "select * from tbl_hocsinh where MaHS = '".$id."'");
      foreach($query as $key)
      {
        $id = $key["MaHS"];
        $ten = $key["TenHS"];
        $mlh = $key["MaLop"];
        $tlh = $key["TenLop"];
        $PC = $key["GioiTinh"];
        $MS = $key["NamSinh"];
        $TTC = $key["DiaChiHS"];
        $HDT = $key["HoTenCha"];
        $ND = $key["NgheNghiep"];
        $GT = $key["SDT"];
        $NH = $key["HoTenMe"];
        $nnm = $key["NheNghiepMe"];
        $phone = $key["SDTMe"];
      }

    ?>
  <!---fomr sua---->
  <div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="./xulysuahs.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="newField">mã học sinh</label>
            <input class="form-control" id="newField" type="text" placeholder="" readonly name="txt_mhs" value="<?php echo $id ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField:required"></div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Tên học sinh</label>
            <input class="form-control" id="newField9" type="text" placeholder="" data-sb-validations="required" name="txt_ths" value="<?php echo $ten ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField9:required">Tên học sinh không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Mã lớp học</label>
            <input class="form-control" id="newField9" type="text" placeholder="" data-sb-validations="required" name="txt_mlh" value="<?php echo $mlh ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField9:required">Tên học sinh không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Tên lớp học</label>
            <input class="form-control" id="newField9" type="text" placeholder="" data-sb-validations="required" name="txt_tlh" value="<?php echo $tlh ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField9:required">Tên học sinh không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Giới tính</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="optionA" type="radio" name="newField10" data-sb-validations="required" value="Nam"  />
                <label class="form-check-label" for="optionA">Nam</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="optionB" type="radio" name="newField10" data-sb-validations="required" value="Nữ" />
                <label class="form-check-label" for="optionB">Nữ</label>
            </div>
            <div class="invalid-feedback" data-sb-feedback="newField10:required">Giới tính không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Năm sinh</label>
            <input class="form-control" id="newField12" type="text" placeholder="" data-sb-validations="required" name="txt_ns" value="<?php echo $MS ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField12:required">Năm sinh không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField3">Địa chỉ</label>
            <input class="form-control" id="newField3" type="text" placeholder="" data-sb-validations="required" name="txt_dc" value="<?php echo $TTC ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField3:required">Địa chỉ không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField4">Họ tên cha</label>
            <input class="form-control" id="newField4" type="text" placeholder="" data-sb-validations="required" name="txt_tencha" value="<?php echo $HDT ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField4:required">Họ tên cha không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField5">Nghề nghiệp</label>
            <input class="form-control" id="newField5" type="text" placeholder="" data-sb-validations="required" name="txt_ng" value="<?php echo $ND ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField5:required">Nghề nghiệp không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField6">số điện thoại</label>
            <input class="form-control" id="newField6" type="text" placeholder="" data-sb-validations="required" name="txt_sdt" value="<?php echo $GT ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField6:required">Số điện thoại không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField7">Họ tên mẹ</label>
            <input class="form-control" id="newField7" type="text" placeholder="" data-sb-validations="required" name="txt_me" value="<?php echo $NH ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField7:required">Họ tên mẹ không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField8">Nghề nghiệp mẹ</label>
            <input class="form-control" id="newField8" type="text" placeholder="" data-sb-validations="required" name="txt_nnm" value="<?php echo $nnm ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField8:required">Nghề nghiệp mẹ không được để trống.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField9">Số điện thoại</label>
            <input class="form-control" id="newField9" type="text" placeholder="" data-sb-validations="required" name="txt_phone" value="<?php echo $phone ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField8:required">Số điện thoại không được để trống.</div>
        </div>
      
        <div class="d-grid">
            <button class="btn btn-primary" id="submitButton" type="submit" name="suahs">sửa</button>
        </div>
    </form>
</div>
  <!---end---->
</body>
</html>
<?php 
    include("./footer.php");
?>