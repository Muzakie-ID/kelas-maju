<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = "mapels";

    protected $fillable = [
        "name",
        "teacher_id",
    ];

    public function teacher() {
        return $this->belongsTo('App\Model\Teacher');
    }
}
