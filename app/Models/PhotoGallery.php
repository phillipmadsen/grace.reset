<?php

namespace App\Models;

use App\Interfaces\ModelInterface as ModelInterface;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

/**
 * Class PhotoGallery.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class PhotoGallery extends BaseModel implements ModelInterface, SluggableInterface
{
    use SluggableTrait;

    public $table = 'photo_galleries';
    public $fillable = ['title', 'content', 'is_published'];
    protected $appends = ['url'];

    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];

    public function photos()
    {
        return $this->morphMany('App\Models\Photo', 'relationship', 'type');
    }

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return 'photo-gallery/'.$this->attributes['slug'];
    }
}
