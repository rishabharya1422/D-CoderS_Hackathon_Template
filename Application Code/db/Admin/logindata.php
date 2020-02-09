<?php
$con = mysqli_connect("127.0.0.1", "root", "newpassword", "mydb");

$username = $_POST['usr'];
$password = $_POST['pwd'];

//print_r($_POST);

$query = "select * from logindetails where username='$username' and password='$password'";
if(mysqli_num_rows($con->query($query)))
{
    header("refresh:1, url='../AdminUploads/uploadbutton.html'");
}
else{
    echo "<br><br><center><h1><b>Wrong username or password entered!!</b><h1> <br> <a href='../Admin/'><h2>Try again</h2></a></center>";
    
}


$con->close();

?>
