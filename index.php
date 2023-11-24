<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="./style/style.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container">
                <label for="todo">
                    <h3>Insert your task</h3>
                </label>
                <input type="text" id="todo" v-model="newtodo" @keyup.enter="">
            </div>
        </section>
        <section class="section">
            <div class="container">
                <ul>
                    <li>{{ newtodo }}</li>
                    <li v-for="(todo, i) in todos" :key="i"> {{ todo.text }}</li>
                </ul>
            </div>
        </section>
    </div>
    <script src="./js/app.js"></script>
</body>

</html>