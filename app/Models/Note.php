<?php

namespace App\Models;

use App\Traits\Utilities\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use HasFactory;
    use SoftDeletes, Uuid;
    protected $fillable = ["id", "title", "autor", "description"];
    protected $keyType = 'string';
    protected $primaryKey = 'id';
}
