<?php
$conn = new mysqli("sql105.infinityfree.net", "if0_36432375", "FJK0VLP4LiF9QcB", "if0_36432375_user_data");

if ($conn->connect_error) {
    die("Помилка підключення: " . $conn->connect_error);
}

$task_id = $_GET['id'];


$sql = "SELECT * FROM Tasks WHERE id = $task_id";


$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
    $task_data = array(
        "id" => $row['id'],
        "title" => $row['title'],
        "description" => $row['description'],
        "points" => $row['points']
    );
    echo json_encode($task_data);
} else {

    echo json_encode(array("error" => "Завдання з ID $task_id не знайдено"));
}

$conn->close();
?>
