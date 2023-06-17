<?php

namespace App\Repositories;

use App\Constants\TodoConstants;
use App\Interfaces\TodoRepositoryInterface;
use App\Models\Todo;

/**
 * @class TodoRepository
 * @package App\Repositories
 * @author Francis Derit
 * @since 06.17.23
 */
class TodoRepository implements TodoRepositoryInterface
{
    /**
     * This will fetch all todos from the database
     */
    public function fetchTodo()
    {
        return Todo::all()->toArray();
    }

    /**
     * This will insert todos in the database
     */
    public function createTodo(array $aParams)
    {
        return Todo::insert($aParams);
    }

    /**
     * This will update the selected todo in the database
     */
    public function updateTodo(int $iTodoNo, array $aParams)
    {
        return Todo::where(TodoConstants::COLUMN_TODO_NO, $iTodoNo)
            ->update($aParams);
    }

    /**
     * This will delete the selected todo in the database
     */
    public function deleteTodo(int $iTodoNo)
    {
        return Todo::where(TodoConstants::COLUMN_TODO_NO, $iTodoNo)
            ->delete();
    }
}