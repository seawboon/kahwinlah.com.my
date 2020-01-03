<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DirectoryCategory
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property int $is_published
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Directory[] $directories
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryCategory whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryCategory whereIsPublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $description
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryCategory whereDescription($value)
 */
class DirectoryCategory extends Model
{
    protected $table = 'directory_categories';

    protected $fillable = [
        'name', 'description','image', 'is_published'
    ];



    public function directories()
    {
        return $this->hasMany('App\Models\Directory', 'category_id');
    }

    public function addresses(){
    	return $this->hasManyThrough(
            'App\Models\Address',
            'App\Models\Directory',
            'category_id', // Foreign key on users table...
            'addresstable_id', // Foreign key on posts table...
            'id', // Local key on countries table...
            'id' // Local key on users table...
        );
    }



}
