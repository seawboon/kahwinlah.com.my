<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DirectoryEnquiry
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property string|null $enquiry
 * @property int $directory_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Directory $directory
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryEnquiry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryEnquiry whereDirectoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryEnquiry whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryEnquiry whereEnquiry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryEnquiry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryEnquiry whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryEnquiry wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryEnquiry whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DirectoryEnquiry extends Model
{
    protected $table = 'directory_enquiries';


    protected $fillable = [
        'name', 'email', 'phone', 'enquiry', 'directory_id'
    ];



    public function directory()
    {
        return $this->belongsTo('App\Models\Directory', 'directory_id');
    }


}
