<?php

namespace Modules\Shop\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Shop\Database\factories\TagFactory;
use App\Traits\UuidTrait;

class Tag extends Model
{
    use , UuidTrait;


    protected $table = 'shop_categories';

    protected $fillable = [
        'slug',
        'name',
    ];
    protected static function newFactory(): TagFactory
    {
        return TagFactory::new();
    }
    public function products()
    {
        return $this->belongsToMany('Modules\Shop\Entities\Product', 'shop_products_tags', 'tag_id', 'product_id');
    }
}
