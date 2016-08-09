<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Product extends Model implements SluggableInterface
{

    use SluggableTrait;

    /**
     * @var string
     */
    protected $table = 'products';

    /**
     * @var array
     */
    protected $fillable = ['id', 'slug', 'ispromo', 'is_published', 'name', 'price', 'details', 'short', 'description', 'sku', 'upc', 'status', 'thumbnail', 'photo_album', 'pubished_at', 'video_url', 'lang', 'manufacturer', 'category_id', 'quantity', 'subtitle', 'meta_title', 'meta_description', 'facebook_title', 'google_plus_title', 'twitter_title', 'office_status', 'availability'];

    /**
     * @var array
     */
    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug'
    ];

    // public function setUrlAttribute($value)
    // {
    //     $this->attributes['url'] = $value;
    // }

    // public function getUrlAttribute()
    // {
    //     return 'shop/' . $this->attributes['slug'];
    // }

    /**
     * @var array
     */
    protected $casts = [
        'slug'              => 'string',
        'ispromo'           => 'boolean',
        'is_published'      => 'boolean',
        'availability'      => 'string',
        'manufacturer'      => 'string',
        'status'            => 'string',
        'office_status'     => 'string',
        'sku'               => 'string',
        'upc'               => 'string',
        'name'              => 'string',
        'subtitle'          => 'string',
        'details'           => 'string',
        'short'             => 'string',
        'description'       => 'string',
        'meta_title'        => 'string',
        'meta_description'  => 'string',
        'facebook_title'    => 'string',
        'google_plus_title' => 'string',
        'twitter_title'     => 'string',
        'price'             => 'integer',
        'quantity'          => 'integer',
        'video_url'         => 'string',
        'thumbnail'         => 'string',
        'photo_album'       => 'string'

    ];


     public function category()
     {
         $categories = $this->hasOne(App\Models\Category::class, 'id', 'category_id') ->select(['id', 'title']);

         return $categories;
     }

    /**
     * @return mixed
     */
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'category_product');
    }

    /**
     * @return mixed
     */
    public function orders()
    {
        return $this->belongsToMany(App\Models\Order::class);
    }

    /**
     * @return mixed
     */
    public function carts()
    {
        return $this->belongsToMany(App\Models\Cart::class);
    }

    /**
     * @return mixed
     */
    public function photos()
    {
        return $this->hasMany(App\Models\AlbumPhoto::class);
    }

    /**
     * @return mixed
     */
    public function options()
    {
        return $this->hasMany(App\Models\Option::class);
    }

    /**
     * @return mixed
     */
    public function productVariants()
    {
        return $this->hasMany(App\Models\ProductVariant::class);
    }

    /**
     * @return mixed
     */
    public function productFeatures()
    {
        return $this->hasMany(App\Models\ProductVariant::class);
    }

        public function variants()
    {
        return $this->hasMany(App\Models\ProductVariant::class);
    }

    public function features()
    {
        return $this->hasMany(App\Models\ProductFeature::class);
    }
}
