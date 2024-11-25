<?php

namespace Modules\Shop\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Shop\Database\factories\AttributeFactory;

class Attribute extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): AttributeFactory
    {
        //return AttributeFactory::new();
    }
}
