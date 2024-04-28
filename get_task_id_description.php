<?php
$tasks = [
    1 => ['title' => 'Task 1', 'description' => 'Description for Task 1', 'points' => 100],
    2 => ['title' => 'Task 2', 'description' => 'Description for Task 2', 'points' => 150],
];

$taskId = $_GET['id'] ?? '';

if ($taskId && isset($tasks[$taskId])) {
    header('Content-Type: application/json');
    echo json_encode($tasks[$taskId]);
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Task not found']);
}
?>
