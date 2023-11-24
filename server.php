<?php

$todos_json = file_get_contents('./todo-list.json');

$todos = json_decode($todos_json, true);

$result = [
    'success' => true,
    'todos' => $todos
];

header('Content-Type: application/json');
echo json_encode($result);
