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
<form action="./xlthemmonan.php" method="post">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" name="txt_mma" />
        <label class="form-label" for="form6Example1">Mã món ăn</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" name="txt_tma" />
        <label class="form-label" for="form6Example2">Tên món ăn</label>
      </div>
    </div>
  </div>
  <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" name="txt_tpdd" />
        <label class="form-label" for="form6Example2">Thành phần dinh dưỡng</label>
      </div>
    </div>
  </div><br>
  <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" name="txt_gia" />
        <label class="form-label" for="form6Example2">Gía</label>
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