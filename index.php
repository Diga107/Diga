<?php
include('includes/header.php');
include('database.php');
?>
<h1 class="text-center">System Users</h1>
  <a class="btn btn-success float-right"
   href="/crud/create.php">+Add New</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">address</th>
      <th scope="col">mobile_no</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $sql = "SELECT * FROM users";
      $result = $conn->query($sql);
      while($row = $result->fetch_array()) {
        ?>
    <tr>
      <th scope="row"><?php echo $row['id'];?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['address'];?></td>
      <td><?php echo $row['mobile_no'];?></td>
     <td>
     <a href="/crud/update.php?id=<?php echo $row['id'];?>">Edit</a> |
     <a href="/crud/process/delete.php?id=<?php echo $row['id'];?>"> Delete</a> 
     </td>
    </tr>
   <?php
   }
   ?>
  </tbody>
</table>

<?php
include('includes/footer.php');
?>
