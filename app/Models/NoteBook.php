<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static create(mixed $noteBook)
 * @method static findOrFail(NoteBook $noteBook)
 * @property mixed $id
 */
class NoteBook extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'note_books';
    protected $guarded = ['id', 'updated_at', 'created_at'];
}
