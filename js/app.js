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
                        console.log(res.data)
                        this.todos = res.data
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
                    console.log(res.data)
                    this.todos = res.data.todos
                    this.newTodo = ''
                })
        }
    },
    created() {
        this.fetchData()
    }

}).mount('#app')