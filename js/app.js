const { createApp } = Vue

createApp({

    data() {

        return {

            todos: [],
            newTodo: ''
        }
    },
    methods: {
        fetchData() {
            axios
                .get('server.php').then(
                    res => {
                        this.todos = res.data.todos
                        console.log(res.data)
                        console.log(this.todos)
                    }
                )
        },
        postData() {

            const data = {
                newTodo: this.newTodo.trim()
            }

            axios
                .post('store.php', data, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then((res) => {

                    this.todos = res.data.todos
                    this.newTodo = ''
                })
        },
        updateStatus(index) {

            const data = {
                id: index
            }

            axios
                .post('update.php', data, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then((res) => {
                    console.log(res.data);
                    this.todos = res.data
                })
        }
    },
    created() {
        this.fetchData()
    }

}).mount('#app')