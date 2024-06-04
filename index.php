<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<center>
<h1>Phone Register Form</h1>
<br>
<a class="btn btn-outline-success" role="botton" href="index.php">
    Home
</a>
<a class="btn btn-outline-warning" role="botton" href="display.php">
    Display
</a>
<br>

<?php
error_reporting(1);
include('connection.php');
extract($_POST);
if($save){

    $img=$_FILES['img']['name'];
    $insertq="insert into phonelist values ('','$n','$b','$p','$ph','$img')";
    $con->query($insertq);
    mkdir("image/$n");
    move_uploaded_file($_FILES['img']['tmp_name'],"image/$n/".$_FILES['img']['name']);
    header("location:display.php");

}
?>

<div class="row mt-3">
    <div class="col-4"></div>
    <div  class="col-4">
        <form method="post" enctype="multipart/form-data">
        <table class="table table-info">
<tr>
    <td>Enter Your Phone Name</td>
    <td><input type="text" name="n" required /></td>
</tr>
<tr>
    <td>Enter Your Phone Brand</td>
    <td><input type="text" name="b" required/></td>
</tr>
<tr>
    <td>Enter Your Phone Price</td>
    <td><input type="number" name="p" required/></td>
</tr>
<tr>
    <td>Enter Your Phone Number</td>
    <td><input type="number" name="ph" required/></td>
</tr>
<tr>
    <td>Enter Your Phone Image</td>
    <td><input type="file" name="img" required /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" class="btn btn-outline-success"
name="save" value="Insert Date"/>
</td>
</tr>
        </tabie>
        <form>
    </div>
</div>
</center>

</body>
</html>