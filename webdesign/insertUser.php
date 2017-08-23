<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "myDB");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$firstname = mysqli_real_escape_string($link, $_POST['firstname']);
$lastname = mysqli_real_escape_string($link, $_POST['lastname']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$nuId = mysqli_real_escape_string($link, $_POST['nuId']);
$mobile = mysqli_real_escape_string($link, $_POST['mobile']);
$address=mysqli_real_escape_string($link,$_POST['address']); 
// attempt insert query execution
$sql = "INSERT INTO myUsers (firstname,lastname, email, nuId,mobile,password,address) VALUES ('$firstname','$lastname', '$email', '$nuId','$mobile','$nuId','$address')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 header('Location: home1.html');
exit();

?>
 