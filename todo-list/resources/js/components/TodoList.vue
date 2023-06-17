<template>
    <div class="container">
        <h2>Todo List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Todo Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(oTodo, iIndex) in oTodoStore.aTodoList">
                    <td>{{ iIndex + 1 }}</td>
                    <td>{{ oTodo.todo_description }}</td>
                    <td v-if="oTodo.is_completed === 0">
                        <button type="button" class="btn btn-outline-success" @click="completeTodo(oTodo.todo_no)">Complete</button>
                        <button type="button" class="btn btn-outline-danger" @click="deleteTodo(oTodo.todo_no)">Delete</button>
                    </td>
                    <td v-else>
                        <button type="button" class="btn btn-outline-primary" disabled>Completed</button>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <div class="input-group">
                            <input type="text" aria-label="Todo Description" id="todo_description" class="form-control" v-model="oTodoStore.oTodoParams.todo_description" placeholder="Enter todo description">
                        </div>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary" @click="addTodo()">Add todo</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import { onMounted } from 'vue';
import { useTodoStore } from '../stores/TodoStore';

export default {
    name: 'TodoList',
    setup() {
        const oTodoStore = useTodoStore();

        onMounted(() => {
            oTodoStore.getTodos();
        });

        /**
         * Event listener for add todo click event
         */
        function addTodo() {
            oTodoStore.addTodo();
        }

        /**
         * Event listener for complete todo click event
         * @param {*} iSelectedTodo 
         */
        function completeTodo(iSelectedTodo) {
            oTodoStore.iSelectedTodo = iSelectedTodo;
            oTodoStore.completeTodo();
        }

        /**
         * Event listener for delete todo click event
         * @param {*} iSelectedTodo 
         */
        function deleteTodo(iSelectedTodo) {
            oTodoStore.iSelectedTodo = iSelectedTodo;
            oTodoStore.deleteTodo();
        }

        return {
            oTodoStore,
            addTodo,
            completeTodo,
            deleteTodo
        }
    }
}

</script>