<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Uuids;
    protected $fillable = ["id", "title", "autor", "description"];
    protected $keyType = 'string';
    protected $primaryKey = 'id';
}
