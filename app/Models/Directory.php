<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Directory
 *
 * @property int $id
 * @property string $name
 * @property string|null $phone1
 * @property string|null $phone2
 * @property string|null $fax
 * @property string|null $website
 * @property string|null $fb_url
 * @property string|null $email
 * @property int $category_id
 * @property int $is_published
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Address $address
 * @property-read \App\Models\DirectoryCategory $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DirectoryEmail[] $emails
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DirectoryImage[] $images
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Directory whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Directory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Directory whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Directory whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Directory whereFbUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Directory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Directory whereIsPublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Directory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Directory wherePhone1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Directory wherePhone2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Directory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Directory whereWebsite($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DirectoryEnquiry[] $enquiries
 */
class Directory extends Model
{
    protected $table = 'directories';


    protected $fillable = [
        'name', 'phone1', 'phone2', 'fax', 'website', 'fb_url', 'email', 'category_id', 'is_published'
    ];




    public function category()
    {
        return $this->belongsTo('App\Models\DirectoryCategory', 'category_id');
    }


    public function address()
    {
        return $this->morphOne('App\Models\Address', 'addresstable');
    }


    public function emails()
    {
        return $this->hasMany('App\Models\DirectoryEmail', 'directory_id');
    }


    public function images()
    {
        return $this->hasMany('App\Models\DirectoryImage', 'directory_id');
    }


    public function enquiries()
    {
        return $this->hasMany('App\Models\DirectoryEnquiry', 'directory_id');
    }

    public function quotations()
    {
        return $this->hasMany('App\Models\Quotation','directory_id');
    }


}
