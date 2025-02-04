<?php

namespace App\Constants;

/**
 * @class TodoConstants
 * @package App\Constants
 * @author Francis Derit
 * @since 06.17.23
 */
class TodoConstants
{
    public const ENTITY = 'todo';

    // TABLE NAME
    public const TABLE_TODO = 't_todo';

    // COLUMN NAMES FOR TODO TABLE
    public const COLUMN_TODO_NO = 'todo_no';
    public const COLUMN_TODO_DESCRIPTION = 'todo_description';
    public const COLUMN_IS_COMPLETED = 'is_completed';

    // FIELDS THAT CAN BE CREATED
    public const CREATE_ABLE_FIELDS = [
        self::COLUMN_TODO_DESCRIPTION
    ];
}
