<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DirectoryEmail
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $directory_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Directory $directory
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryEmail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryEmail whereDirectoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryEmail whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryEmail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryEmail whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DirectoryEmail whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DirectoryEmail extends Model
{
    protected $table = 'directory_emails';


    protected $fillable = [
        'email', 'directory_id'
    ];


    public function directory()
    {
        return $this->belongsTo('App\Models\Directory', 'directory_id');
    }

}
