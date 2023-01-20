<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;
    protected $fillable=['department','departmenthead'];
       /**
        * Get all of the comments for the department
        *
        * @return \Illuminate\Database\Eloquent\Relations\HasMany
        */
       public function staff(): HasMany
       {
           return $this->hasMany(staff::class, 'staff_id', 'id');
       }
}
