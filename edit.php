<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<center>
<h1>Phone Edit Form</h1>
<br>

<?php
error_reporting(1);
include('connection.php');
$id = $_GET['id'];
$sql = $con->query("Select * from phonelist where id=$id");
$data = mysqli_fetch_array($sql);

extract($_POST);
if($save){
    $con->query("update phonelist set phonename='$n',brand='$b',price='$p',phone='$ph'
    where id=$id");
    header('location:display.php');
}


?>

<div class="row mt-3">
    <div class="col-4"></div>
    <div  class="col-4">
        <form method="post" enctype="multipart/form-data">
        <table class="table table-info">
<tr>
    <td>Enter Your Phone Name</td>
    <td><input type="text" name="n" value="<?php echo $data['phonename'] ?>" required readonly /></td>
</tr>
<tr>
    <td>Enter Your Phone Brand</td>
    <td><input type="text" name="b" value="<?php echo $data['brand'] ?>" required/></td>
</tr>
<tr>
    <td>Enter Your Phone Price</td>
    <td><input type="number" name="p" value="<?php echo $data['price'] ?>" required/></td>
</tr>
<tr>
    <td>Enter Your Phone Number</td>
    <td><input type="number" name="ph" value="<?php echo $data['phone'] ?>" required/></td>
</tr>
<tr>
<td></td>
<td><input type="submit" class="btn btn-outline-success"
name="save" value="Update Date"/>
</td>
</tr>
        </tabie>
        <form>
    </div>
</div>
</center>

</body>
</html>