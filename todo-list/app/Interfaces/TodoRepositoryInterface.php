<?php

namespace App\Interfaces;

/**
 * @class TodoRepositoryInterface
 * @package App\Interfaces
 * @author Francis Derit
 * @since 06.17.23
 */
interface TodoRepositoryInterface
{
    public function fetchTodo();

    public function createTodo(array $aTodo);

    public function updateTodo(int $iTodoNo, array $aTodo);
    
    public function deleteTodo(int $iTodoNo); 
}