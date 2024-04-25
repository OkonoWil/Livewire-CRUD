<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Todo extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['user'];

    protected $casts = [
        'completed' => 'boolean'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
