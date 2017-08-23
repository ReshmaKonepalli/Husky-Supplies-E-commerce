<html>
<body>
<?php
$emailErr ="";
$email="";
/*
Welcome <?php echo $_POST["pwd"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>*/
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
}
  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
echo $emailErr;
echo $email;
?>
</body>
</html>
