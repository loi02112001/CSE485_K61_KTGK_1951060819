<?php
include '../header.php';
?>

<main>
<a href="addcars.php" class = "btn btn-primary"><i class="far fa-plus-square"></i></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Mã phương tiện</th>
      <th scope="col">Biển số xe</th>
      <th scope="col">Model</th>
      <th scope="col">Năm sản xuất</th>
      <th scope="col">Kiểu oto</th>
      <th scope="col">Gía cho thuê theo ngày</th>
      <th scope="col">Gía cho thuê theo tuần</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Sửa thông tin</th>
      <th scope="col">Xóa thông tin</th>
      <th scope="col">Chi tiết</th>

    </tr>
  </thead>
  <tbody>
    
    <?php 
      include '../config.php';
     
      $sql = "SELECT * FROM cars";
      $result =mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
          echo'<tr>'; 
          echo'<th scope="row">'.$row['vehicle_id'].'</th>';  
          echo'<td>'.$row['license_no'].'</td>';
          echo'<td>'.$row['model'].'</td>';
          echo'<td>'.$row['year'].'</td>';
          echo'<td>'.$row['ctype'].'</td>';
          echo'<td>'.$row['drate'].'</td>';
          echo'<td>'.$row['wrate'].'</td>';
          echo'<td>'.$row['status'].'</td>';
          echo'<td><a href="./updateCars.php?id='.$row['vehicle_id'].'"><i class="fas fa-edit"></i></td>';
          echo'<td><a href="./deleteCars.php?id='.$row['vehicle_id'].'"><i class="fas fa-trash-alt"></i></td>';
          echo'<td><a href="./detailCars.php?id='.$row['vehicle_id'].'"><i class="fas fa-info-circle"></i></td>';
          echo'</tr>';
        }
      }
    ?>

   
    
    
  </tbody>
</table>
</main>
<?php
include '../footer.php'
?>
