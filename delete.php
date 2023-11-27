<?php

$todo_id = $_POST['id'];

$todos_string = file_get_contents('./todo-list.json');

$todos = json_decode($todos_string, true);

unset($todos[$todo_id]);

file_put_contents('./todo-list.json', json_encode($todos));

header('Content-Type: application/json');

echo json_encode($todos);
