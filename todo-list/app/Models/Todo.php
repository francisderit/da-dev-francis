<?php

namespace App\Models;

use App\Constants\TodoConstants;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @class Todo
 * @package App\Models
 * @author Francis Derit
 * @since 06.17.23
 */
class Todo extends Model
{
    use SoftDeletes;

    /**
     * Table Name
     * @var string
     */
    protected $table = TodoConstants::TABLE_TODO;

    /**
     * Primary Key
     * @var string
     */
    protected $primaryKey = TodoConstants::COLUMN_TODO_NO;

    /**
     * Creatable fields
     * @var string[]
     */
    protected $fillable = TodoConstants::CREATE_ABLE_FIELDS;

    /**
     * Casts fields
     */
    protected $casts = [
        TodoConstants::COLUMN_IS_COMPLETED => 'boolean',
    ];

    /**
     * Timestamps
     * @var bool
     */
    public $timestamps = false;
}
