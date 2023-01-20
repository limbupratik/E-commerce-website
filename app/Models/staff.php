<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;
    protected $fillable=['staffname','number','address','email','department_id','position'];
    public function department(): BelongsTo
    {
        return $this->belongsTo(department::class, 'department_id', 'id');
    }
}
