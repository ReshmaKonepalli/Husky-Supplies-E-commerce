<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">




</head>
<body>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "myDB");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $email = mysqli_real_escape_string($link, $_POST['email']);
 $pwd = mysqli_real_escape_string($link, $_POST['pwd']);
// Attempt select query execution
$sql = "SELECT id,email,firstname,lastname,address,mobile,nuId,reg_date FROM MyUsers WHERE email='".$email."' and password= '".$pwd."'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
	while($row = $result->fetch_assoc())
	{
        echo "<table class="."table table-striped".">";
            echo "<tr>";
                echo "<td> Profile ID:</td>";
				echo "<td>" .$row["id"]. "</td>";
                
            echo "</tr>";
			echo "<tr>";
                echo "<td> Name: </td>";
				echo "<td>". $row["firstname"]."".$row["lastname"] ."</td>";
                
            echo "</tr>";
			echo "<tr>";
                echo "<td> NU ID: </td>";
				echo "<td>". $row["nuId"] ."</td>";
                
            echo "</tr>";
			echo "<tr>";
                echo "<td> Email Id: </td>";
				echo "<td>". $row["email"] ."</td>";
                
            echo "</tr>";
			echo "<tr>";
                echo "<td> Mobile: </td>";
				echo "<td>". $row["mobile"] ."</td>";
                
            echo "</tr>";
			echo "<tr>";
                echo "<td> Address: </td>";
				echo "<td>". $row["address"] ."</td>";
                
            echo "</tr>";
			
        
        echo "</table>";
       
    } 
	}else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

header('Location: profile.php');
exit();
?>
</body>
</html>