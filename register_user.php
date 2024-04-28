<?php

$conn = new mysqli("sql105.infinityfree.com", "if0_36432375", "FJK0VLP4LiF9QcB", "if0_36432375_user_data", 3306);


if ($conn->connect_error) {
    die("Помилка підключення: " . $conn->connect_error);
}


$nickname = $_POST['nickname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


$sql = "INSERT INTO user (nickname, email, password) VALUES ($nickname, $email, $password)";



if ($result->num_rows > 0) {

    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {

        echo json_encode(array("success" => true, "user_id" => $user['id']));
    } else {

        echo json_encode(array("success" => false, "error" => "Неправильний пароль"));
    }
} else {

    echo json_encode(array("success" => false, "error" => "Користувач з вказаним email не знайдений"));
}


$stmt->close();
$conn->close();
?>
