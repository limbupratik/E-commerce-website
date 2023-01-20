<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
    use HasFactory;
    protected $fillable=['catagory_name','slug','adder_name'];

    
    public function subcatagory(){
        return $this->hasMany(subcatagory::class,'catagory_id','id');
    }
    public function product(): BelongsTo
    {
        return $this->belongsTo(product::class, 'productname', 'id');
    }
}
