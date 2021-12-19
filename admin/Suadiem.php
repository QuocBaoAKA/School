<?php
require ("./header.php");
 include("./ketnoi.php");
 $id = $_REQUEST["Ma"];
 $query = mysqli_query($kn, "select * from tbl_diem where MaDiem = '".$id."'");
 foreach($query as $key)
 {
   $id = $key["MaDiem"];
   $mhs = $key["MaHS"];
   $mlop = $key["MaLopHoc"];
   $mhk = $key["MaHK"];
   $mmh = $key["MaMH"];
   $diemm = $key["DiemMieng"];
   $diemgk = $key["DiemGiuaKy"];
   $diemck = $key["DiemCuoiKy"];
   $diemtk = $key["DiemTongKet"];
   $kt = $key["MaKT"];
 }

?>
<style>
    .btn-sua{
        width: 200px;
        height: 35px;
        border-radius: 8px;
        border: none;
        background-color: #0066ff;
        color: #fff;
        font-size: 18px;
        margin: auto;
    }
</style>
<h3>Sửa Nhân Sự</h3>
  <div class="container px-5 my-5">
    
    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="./xulysuanhansu.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="newField">Mã bảng điểm</label>
            <input class="form-control" id="newField" type="text" placeholder="" readonly name="txt_mnv" value="<?php echo $id ?>" />
            <div class="invalid-feedback" data-sb-feedback="newField:required"></div>
        </div>
        <div class="mb-3">
        <label class="form-label">Tên học sinh</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_hocsinh";
            $result = mysqli_query($kn,$sqli);

            echo "<select name='mahs' value='<?php echo $mhs ?>' class='form-select'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaHS'] ."'>" . $row['TenHS'] ."</option>" ;
            }
            echo "</select>";
            ?>
        </div>
        <div class="mb-3">
        <label class="form-label">Lớp học</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_lop";
            $result = mysqli_query($kn,$sqli);

            echo "<select name='malop' value='<?php echo $mlop ?>' class='form-select'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaLop'] ."'>" . $row['TenLop'] ."</option>";
            }
            echo "</select>";
            ?>
        </div>
        <div class="mb-3">
        <label class="form-label">Học kỳ</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_hocki";
            $result = mysqli_query($kn,$sqli);

            echo "<select name='hocky' value='<?php echo $mhk ?>' class='form-select'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaHK'] ."'>" . $row['TenHK'] ."</option>";
            }
            echo "</select>";
            ?>
        </div>
        <div class="mb-3">
        <label class="form-label">Môn học</label>
            <?php
            include("./ketnoi.php");
            $sqli = "SELECT * FROM tbl_monhoc";
            $result = mysqli_query($kn,$sqli);

            echo "<select name='monhoc'value='<?php echo $mmh ?>' class='form-select'>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['MaMonHoc'] ."'>" . $row['TenMonHoc'] ."</option>";
            }
            echo "</select>";
            ?>
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField12">Điểm miệng</label>
            <input class="form-control" id="newField12" type="number" min="0" max="10" placeholder=""  required name="txt_dm" value="<?php echo $diemm ?>" />
            
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField3">Điểm giữa kỳ</label>
            <input class="form-control" id="newField3" type="number" placeholder="" required name="txt_dgk" value="<?php echo $diemgk ?>" />
          
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField4">Điểm cuối kỳ</label>
            <input class="form-control" id="newField4" type="number" placeholder="" required name="txt_ck" value="<?php echo $diemck ?>" />
          
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField5">Điểm tổng kết</label>
            <input class="form-control" id="newField5" type="number" placeholder=""  required name="txt_tk" value="<?php echo $diemtk ?>" />
            
        </div>
        <div class="mb-3">
            <label class="form-label" for="newField6">Kết quả</label>
            <input class="form-control" id="newField6" type="text" placeholder="" required name="txt_kq" value="<?php echo $kt ?>" />
            
        </div>
      
        <div class="d-grid">
            <button class="btn-sua" id="submitButton" type="submit" name="suanhansu">sửa</button>
        </div>
    </form>
</div>

<?php

 require ("./footer.php");
?>