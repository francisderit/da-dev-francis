<?php

namespace App\Http\Controllers;

use App\Constants\TodoConstants;
use App\Interfaces\TodoRepositoryInterface;
use Illuminate\Http\Request;

/**
 * @class TodoController
 * @package App\Constants
 * @author Francis Derit
 * @since 06.17.23
 */
class TodoController extends Controller
{
    private $oTodoRepository;

    /**
     * Constructor function of TodoController
     */
    public function __construct(TodoRepositoryInterface $oTodoRepository)
    {
        $this->oTodoRepository = $oTodoRepository;
    }

    /**
     * Request for getting the todo/s
     */
    public function getTodo(): array
    {
        $aTodos = $this->oTodoRepository->fetchTodo();
        
        return $aTodos;
    }

    /**
     * Request for saving the todo
     */
    public function saveTodo(Request $oRequest): bool
    {
        $aParams = $oRequest->all();
        
        $bSaveResult = $this->oTodoRepository->createTodo($aParams);
        
        return $bSaveResult;
    }

    /**
     * Request for editing the todo
     */
    public function editTodo(Request $oRequest, int $iTodoNo): bool
    {
        $bUpdateResult = $this->oTodoRepository->updateTodo($iTodoNo, [
            TodoConstants::COLUMN_IS_COMPLETED => true
        ]);

        return $bUpdateResult;
    }

    /**
     * Request for removing the todo
     */
    public function removeTodo(Request $oRequest, int $iTodoNo)
    {
        $bDeleteResult = $this->oTodoRepository->deleteTodo($iTodoNo);

        return $bDeleteResult;
    }
}
