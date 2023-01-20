<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secsubcategory extends Model
{
    use HasFactory;
    protected $fillable=['Secondsubcatagory_name','slug','subcatagory_name'];

    public function subcatagory(){
        return $this->BelongTo(Catagory::class,'subcatagory_name','id' );
    }
    public function product(): BelongsTo
    {
        return $this->belongsTo(product::class, 'productname', 'id');
    }
}  
