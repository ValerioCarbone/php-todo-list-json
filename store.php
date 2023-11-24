<?php

$newtodo = $_POST['newTodo'] ?? '';

$result = [];

if (strlen($newtodo) > 1) {

    $todos_string = file_get_contents('./todo-list.json');

    $todos = json_decode($todos_string, true);

    $todos[] = [
        'text' => $newtodo,
        'done' => false
    ];

    $result['todos'] = $todos;

    $result['success'] = true;

    $todos_string = json_encode($todos);

    file_put_contents('./todo-list.json', $todos_string);
} else {

    $result['success'] = false;

    $result['message'] = 'Task param is missing';
}

header('Content-type: application/json');

echo json_encode($result);
