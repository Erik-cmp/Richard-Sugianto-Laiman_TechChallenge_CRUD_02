<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class M_Student extends Model
{
    use softDeletes;

    protected $table = 'student';
    protected $fillable = ['name', 'major',];

    protected $hidden;
}
