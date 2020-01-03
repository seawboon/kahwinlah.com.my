<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DirectoryImage
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $subtitle
 * @property string $image
 * @property int $directory_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Directory $directory
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryImage whereDirectoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryImage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryImage whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryImage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryImage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DirectoryImage extends Model
{
    protected $table = 'directory_images';

    protected $fillable = [
        'title', 'subtitle', 'image', 'directory_id'
    ];



    public function directory()
    {
        return $this->belongsTo('App\Models\Directory', 'directory_id');
    }

}
