
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

<table class="table table-info mt-3">
<tr>
<th>ID</th>
<th>Name</th>
<th>Brand</th>
<th>Price</th>
<th>Phone Number</th>
<th>Image</th>
<th>delete</th>
<th>Edit</th>
</tr>

<?php
error_reporting(1);
include('connection.php');
$data="SELECT * FROM phonelist ORDER BY id DESC";
$val=$con->query($data);
if($val->num_rows > 0){
while(list($id,$phonename,$brand,$price,$phone,$img) = mysqli_fetch_array($val)){
    echo "<tr>";
    echo "<td>".$id."</td>";
    echo "<td>".$phonename."</td>";
    echo "<td>".$brand."</td>";
    echo "<td>".$price."</td>";
    echo "<td>".$phone."</td>";
    echo "<td><img src='./image/$phonename/$img' height='100' width='100' /></td>";
    echo "<td><a href='delete.php?id=$id&pn=$phonename&img=$img'
    role='button' class='btn btn-danger'>
    Delete</a></td>";
    echo "<td><a href='edit.php?id=$id'
    role='button' class='btn btn-danger'>
    Edit</a></td>";
    echo "</tr>";
}}else{
    echo "<tr><td colspan='8' class='text-center'>
    <b>No data available</b></td></tr>";
}

?>

</table>
</center>
</body>