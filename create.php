<?php
include('includes/header.php');
include('database.php');

if($_POST){
$name= $_POST ['name'];
$address= $_POST ['address'];
$mobile_no= $_POST ['mobile_no'];


$sql ="INSERT INTO users (name, address, mobile_no) VALUES ('$name','$address','$mobile_no')";
$insert = $conn->query($sql);

if($insert){
    header('location: index.php');
}else{
    echo $conn->connect_error;
}

}
?>


<div class="container">
<h1>Create table</h1>
<hr>
<form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
  <div class="form-group">
    <label for="">name</label>
    <input type="text" class="form-control" id="" name="name" required>
    <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small-->
  </div>
  <div class="form-group">
    <label for="">address</label>
    <input type="text" class="form-control" id="" name ="address" required>
  </div>

  <div class="form-group">
    <label for="">mobile_no.</label>
    <input type="number" class="form-control" id="" name =" mobile_no" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php
include('includes/footer.php');
?>