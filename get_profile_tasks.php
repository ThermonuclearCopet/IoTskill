<?php 
 
$conn = mysqli_connect("sql105.infinityfreeapp.com", "if0_36432375", "FJK0VLP4LiF9QcB", "if0_36432375_user_data"); 
 
if (!$conn) { 
    die("Помилка підключення: " . mysqli_connect_error()); 
} 
 
//$user_id = $_POST['id'];
$user_id = 100002;
 
$sql = "SELECT * FROM Task WHERE task_owner = $user_id"; 
$result = mysqli_query($conn, $sql);
 
if ($result->num_rows > 0) {

    $tasks = array();
    while ($row = $result->fetch_assoc()) {
        $tasks[] = $row;
    }

    echo json_encode($tasks);
} else {
    echo "Немає завдань";
}
  
mysqli_close($conn); 
?>