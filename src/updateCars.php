<?php
include '../header.php';
include '../config.php';

 $id = $_GET['id'];
    $sql = "SELECT * FROM cars WHERE vehicle_id = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result==true){
        $count = mysqli_num_rows($result);
        if ($count == 1){
            $row = mysqli_fetch_assoc($result);
        }
    }
?>

<h2>Sửa thông tin</h2>
<form action ="process-update-cars.php" method="post">
        <div class="mb-3">
            <label for="license_no" class="form-label">Biển số xe</label>
            <input type="text" class="form-control" id="license_no" name ="license_no"  style="width: 20%;">
           
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" class="form-control" id="model" name="model"  style="width: 20%;">
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Năm sản xuất</label>
            <input type="text" class="form-control" id="year" name="year" style="width: 20%;">
        </div>
        <div class="mb-3">
            <label for="ctype" class="form-label">Kiểu xe</label>
            <input type="text" class="form-control" id="ctype" name="ctype"  style="width: 20%;">
        </div>
        <div class="mb-3">
            <label for="drate" class="form-label">Gía cho thuê theo ngày</label>
            <input type="text" class="form-control" id="drate" name="drate"  style="width: 20%;">
        </div>
        <div class="mb-3">
            <label for="wrate" class="form-label">Gía cho thuê theo tuần</label>
            <input type="text" class="form-control" id="wrate" name="wrate"  style="width: 20%;">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Trạng thái</label>
            <input type="text" class="form-control" id="status" name="status"  style="width: 20%;">
        </div>
        <td colspan="2">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" name="submit" value="Update " class="btn btn-success">
            </td>
       
       
        
       
    </form>




<?php
    include '../footer.php';
?>