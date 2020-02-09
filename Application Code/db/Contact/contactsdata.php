 <?php
$con = mysqli_connect("127.0.0.1", "root","", "db");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['msg'];

//print_r($_POST);

$query = "insert into Contact values('$name', '$email', '$phone', '$message')";
mysqli_query($con,$query);


$con->close();

?>
