<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brands extends Model
{
    use HasFactory;
    protected $fillable=['brandname','slug','ownername','logo','contractperiod','contractfile','contactnumber','comapanyEmail'];
    public function product(): BelongsTo
    {
        return $this->belongsTo(product::class, 'productname', 'id');
    }
}
