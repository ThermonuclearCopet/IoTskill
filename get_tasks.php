<?php
$conn = new mysqli("sql105.infinityfree.com", "if0_36432375", "FJK0VLP4LiF9QcB", "if0_36432375_user_data");

if ($conn->connect_error) {
    die("Помилка підключення: " . $conn->connect_error);
}

$sql = "SELECT id, title, description FROM Task";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $tasks = array();
    while ($row = $result->fetch_assoc()) {
        $tasks[] = $row;
    }

    echo json_encode($tasks);
} else {
    echo "Немає завдань";
}
$conn->close();
?>
