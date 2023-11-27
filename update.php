<?php

$todo_id = $_POST['id'];

$todos_string = file_get_contents('./todo-list.json');

$todos = json_decode($todos_string, true);

$todos[$todo_id]['done'] = !$todos[$todo_id]['done'];

file_put_contents('./todo-list.json', json_encode($todos));

header('Content-Type: application/json');

echo json_encode($todos);
