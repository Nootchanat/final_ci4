<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter Add</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="container mt-4">
<h1>Codeigniter ADDDATA AND TIME</h1>

    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/addname') ?>" class="btn btn-success">Add a data</a>
	</div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3">
     <table class="table table-success table-striped" id="users-list">
       <thead>
          <tr>
             <th>ลำดับ</th>
             <th>ชื่อ</th>
             <th>นามสกุล</th>
             <th>อีเมล</th>
             <th>ระยะเวลา</th>
             <th>เวลาที่เข้า</th>
             <th>เวลาที่ออก</th>
            </tr>
       </thead>
       <tbody>
          <?php if($users): ?>
          <?php foreach($users as $user): ?>
          <tr>
             <td><?php echo $user['id']; ?></td>
             <td><?php echo $user['fname']; ?></td>
             <td><?php echo $user['lname']; ?></td>
             <td><?php echo $user['email']; ?></td>
             <td><?php echo $user['time']; ?></td>
             <td><?php echo $user['time_n']; ?></td>
             <td><?php echo $user['time_d']; ?></td>
            
              </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>
</body>
</html>