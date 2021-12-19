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
</head>
<body>
<form action="./xlthemlichgiangday.php" method="post">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" name="txt_mgd" />
        <label class="form-label" for="form6Example1">Mã giãng dạy</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" name="txt_mtk" />
        <label class="form-label" for="form6Example2">Mã tài khoản</label>
      </div>
    </div>
  </div>
  <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" name="txt_bd" />
        <label class="form-label" for="form6Example2">Buổi dạy</label>
      </div>
    </div>
  </div><br>
  <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" name="txt_stiet" />
        <label class="form-label" for="form6Example2">Số tiết</label>
      </div>
    </div>
  </div><br>
  <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" name="txt_th" />
        <label class="form-label" for="form6Example2">Tuần học</label>
      </div>
    </div>
  </div><br>
  
  <!-- Submit button -->
 
  <button type="submit" class="btn btn-primary btn-block mb-4">Thêm</button>
</form>
</body>
</html>
<?php 
    include("./footer.php");
?>