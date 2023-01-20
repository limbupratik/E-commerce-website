<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcatagory extends Model
{
    use HasFactory;
    protected $fillable=['subcatagory_name','slug','adder_name','catagory_id'];
    public function catagory(){
        return $this->BelongsTo(catagory::class,'catagory_id','id');
    }


    public function secsubcatagory(){
        return $this->hasMany(secsubcategory::class,'subcatagory_name','id');
    }
    public function product(): BelongsTo
    {
        return $this->belongsTo(product::class, 'productname', 'id');
    }

}
