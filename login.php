<?php 

$conn = mysqli_connect("sql105.infinityfreeapp.com", "if0_36432375", "FJK0VLP4LiF9QcB", "if0_36432375_user_data"); 
 
 
if (!$conn) { 
    die("Помилка підключення: " . mysqli_connect_error()); 
} 
 

$username = $_POST['username']; 
$password = $_POST['password']; 
 

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'"; 
$result = mysqli_query($conn, $sql); 
 

if (mysqli_num_rows($result) == 1) { 
 
    echo json_encode(array("success" => true, "user_id" => $user['id']));
} else { 

    echo json_encode(array("success" => false, "error" => "Невірна пошта або пароль"));
} 
 
mysqli_close($conn); 
?>