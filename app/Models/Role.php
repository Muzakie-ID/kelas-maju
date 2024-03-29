<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Role extends Model
{
    use HasUuids, HasFactory;

    protected $table = "roles";

    public $incrementing = false;

    protected $keyType = "string";

    protected $fillable = [
        "name",
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class, "role_id");
    }
}
