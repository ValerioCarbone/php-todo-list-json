<?php

$new_todos = $_POST['updatedTodos'] ?? '';

$json_todos = json_encode($new_todos);

file_put_contents('./todo-list.json', $json_todos);


header('Content-type: application/json');

echo $json_todos;
