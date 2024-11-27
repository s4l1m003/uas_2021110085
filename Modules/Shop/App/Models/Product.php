<?php

namespace Modules\Shop\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Shop\Database\factories\ProductFactory;

use App\Traits\UuidTrait;

class Product extends Model
{
    use HasFactory, UuidTrait;

    protected $fillable = [
        'parent_id',
		'user_id',
		'sku',
		'type',
		'name',
		'slug',
		'price',
        'featured_image',
        'sale_price',
		'status',
		'stock_status',
		'manage_stock',
		'publish_date',
		'excerpt',
		'body',
		'metas',
    ];

    protected $table = 'shop_products';

    public const DRAFT = 'DRAFT';
	public const ACTIVE = 'ACTIVE';
	public const INACTIVE = 'INACTIVE';

    public const STATUSES = [
		self::DRAFT => 'Draft',
		self::ACTIVE => 'Active',
		self::INACTIVE => 'Inactive',
	];

    public const STATUS_IN_STOCK = 'IN_STOCK';
    public const STATUS_OUT_OF_STOCK = 'OUT_OF_STOCK';

    public const STOCK_STATUSES = [
        self::STATUS_IN_STOCK => 'In Stock',
        self::STATUS_OUT_OF_STOCK => 'Out of Stock',
    ];

	public const SIMPLE = 'SIMPLE';
	public const CONFIGURABLE = 'CONFIGURABLE';
	public const TYPES = [
		self::SIMPLE => 'Simple',
		self::CONFIGURABLE => 'Configurable',
	];

    protected static function newFactory()
    {
        return \Modules\Shop\Database\factories\ProductFactory::new();
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function inventory()
    {
        return $this->hasOne('Modules\Shop\Models\ProductInventory');
    }

    public function variants()
	{
		return $this->hasMany('Modules\Shop\Models\Product', 'parent_id')->orderBy('price', 'ASC');
	}

    public function categories()
    {
        return $this->belongsToMany('Modules\Shop\Models\Category', 'shop_categories_products', 'product_id', 'category_id'); //phpcs:ignore
    }

    public function tags()
    {
        return $this->belongsToMany('Modules\Shop\Models\Tag', 'shop_products_tags', 'product_id', 'tag_id');
    }

    public function attributes()
	{
		return $this->hasMany(ProductAttribute::class, 'product_id');
	}

    public function images()
	{
		return $this->hasMany('Modules\Shop\Models\ProductImage', 'product_id');
	}
}
