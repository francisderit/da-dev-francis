import { defineStore } from 'pinia';

export const useTodoStore = defineStore('todo', {
    state: () => ({
        aTodoList: [],
        oTodoParams: {
            todo_description: null
        },
        iSelectedTodo: undefined
    }),
    actions: {
        /**
         * This will fetch all the listed todo/s
         */
        getTodos() {
            axios.get('/api/todo')
                .then((oResponse) => {
                    this.aTodoList = oResponse.data;
                });
        },

        /**
         * This will process the saving of a todo
         */
        addTodo() {
            let bValidate = this.validateRequiredParams(this.oTodoParams);

            if (bValidate === false) {
                alert('Warning: Fill out the required parameter!');
                return;
            }

            axios.post('/api/todo', this.oTodoParams)
                .then((oResponse) => {
                    if (oResponse.data === false) {
                        alert('Error: Failed adding todo');
                        return;
                    }

                    alert('Success: Added todo');
                    location.reload();
                });
        },

        /**
         * This will process the updating of a todo
         */
        completeTodo() {;
            axios.put('/api/todo/' + this.iSelectedTodo)
                .then((oResponse) => {
                    if (oResponse.data === false) {
                        alert('Error: Failed updating the selected todo');
                        return;
                    }

                    alert('Success: Completed the selected todo');
                    location.reload();
                });
        },

        /**
         * This will process the deleting of a todo
         */
        deleteTodo() {
            axios.delete('/api/todo/' + this.iSelectedTodo)
                .then((oResponse) => {
                    if (oResponse.data === false) {
                        alert('Error: Failed deleting the selected todo');
                        return;
                    }

                    alert('Success: Deleted the selected todo');
                    location.reload();
                });
        },

        /**
         * This will validate required parameters for todo-related forms
         *
         * @param oParams
         * @returns {boolean}
         */
        validateRequiredParams(oParams) {
            for (const sKey in oParams) {
                if (oParams[sKey] === null) {
                    document.getElementById(sKey).focus();

                    return false;
                }
            }

            return true;
        },

    }
});
