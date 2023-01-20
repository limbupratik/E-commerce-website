<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{

    use HasFactory;
    protected $fillable=['productname','slug','size','warranty','catagory_id','subcatagory_name','sec_subcatagory_id','brand','feature','price','color','discount','images','description'];



    public function catagory(){
        return $this->hasMany(catagory::class,'catagory_name','id');
    }
   public function subcatagory(): HasMany
   {
       return $this->hasMany(subcatagory::class, 'subcatagory_name', 'id');
   }
   public function secsubcategory(): HasMany
   {
       return $this->hasMany(secsubcategory::class, 'Secondsubcatagory_name', 'id');
   } 
   public function brands(): HasMany
   {
       return $this->hasMany(brands::class, 'brandname', 'id');
   }
    public function color(): HasMany
    {
        return $this->hasMany(color::class, 'color_name', 'id');
    }


    

}
