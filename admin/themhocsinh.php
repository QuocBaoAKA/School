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
      .card_hs{
        width: 80%;
        margin: auto;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;  
        background-color: #fff;
      }
     .form_hs{
       width: 60%;
       margin: auto
     }
     .input_hs{
       width: 100%;
       height: 38px;
       outline: none;
       border: 1px solid #ccc;
       border-radius: 8px;
       margin-bottom: 15px;
     }
     .form_hs_radio{
       display: flex;
       width: 450px;
       height: 50px;
       margin: auto;
       border: 1px dashed #ccc;
       justify-content: center;
       align-items: center;
     }
     .radio1{
       margin-right: 25px;
       
     }
    .radio1 span{
      font-size: 18px;
    }
    .btn_hss{
      display: flex;
      justify-content: center;
      align-items: center;
      margin: auto;
      width: 150px;
     
    }
    .btn_hs{
      width: 100%;
      height: 40px;
      background-color: #0066ff;  
      border: none;
      border-radius: 8px;
      color: #fff;
       margin-bottom: 1rem;
    }
    </style>
</head>
<body>
<form action="./xlthemhs.php" method="post">
  <div class="card_hs">
  <div class="form_hs">
    <label>Mã học sinh</label>
    <input type="text" class="input_hs" name="txt_mhs">
  </div>
  <div class="form_hs">
    <label>Tên học sinh</label>
    <input type="text" class="input_hs"  name="txt_ths">
  </div>
  <div class="form_hs">
    <label>Mã lớp học</label>
    <input type="text" class="input_hs"  name="txt_mlh">
  </div>
  <div class="form_hs">
    <label>Tên lớp học</label>
    <input type="text" class="input_hs"  name="txt_tlh">
  </div>
  <div class="form_hs_radio">
    <div class="radio1">
      <input type="radio" value="Nam" name="gioitinh">
      <span>Nam</span>
    </div>
    <div class="radio1">
     
      <input type="radio" value="Nữ" name="gioitinh">
      <span>Nữ</span>
    </div>
  </div>
  
  <div class="form_hs">
    <label>Năm sinh</label>
    <input type="text" class="input_hs" name="txt_ns">
  </div>
  <div class="form_hs">
    <label>Địa chỉ</label>
    <input type="text" class="input_hs" name="txt_dc">
  </div>
  <div class="form_hs">
    <label>Họ tên cha</label>
    <input type="text" class="input_hs" name="txt_tencha">
  </div>
  <div class="form_hs">
    <label>Nghề nghiệp</label>
    <input type="text" class="input_hs"  name="txt_ng">
  </div>
  <div class="form_hs">
    <label>Số điện thoại</label>
    <input type="text" class="input_hs" name="txt_sdt">
  </div>
  <div class="form_hs">
    <label>Họ tên mẹ</label>
    <input type="text" class="input_hs" name="txt_me">
  </div>
  <div class="form_hs">
    <label>Nghề nghiệp</label>
    <input type="text" class="input_hs" name="txt_nnm">
  </div>
  <div class="form_hs">
    <label>Số điện thoại</label>
    <input type="text" class="input_hs" name="txt_phone">
  </div>
  <div class="btn_hss">
  <button type="submit" class="btn_hs">Thêm</button>
  </div>
  </div>
  
</form>


  <!-- Submit button -->
 
</div>
</form>
</body>
</html>
<?php 
    include("./footer.php");
?>