<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://kit.fontawesome.com/d590f78bae.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container input">
                <label for="todo">
                    <h3 class="title">Insert your task</h3>
                </label>
                <input type="text" id="todo" v-model="newTodo" @keyup.enter="postData">
            </div>
        </section>
        <section class="section">
            <div class="container-sm">
                <ul>
                    <li v-for="(todo, index) in todos" :key="index" :class="{ done: todo.done }" @click="updateStatus(index)" class="task-wrapper">
                        <p>{{ todo.text }}</p>
                        <span>
                            <i class="fa-regular fa-circle-xmark" @click.stop="deleteTask(index)"></i>
                        </span>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <script src="./js/app.js"></script>
</body>

</html>