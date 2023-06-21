<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = [
        'author_name',
        'author_sid',
        'author_gender',
        'author_tel',
        'author_email',
        'curicolumn_id',
        'status',
    ];

    // public function projects()
    // {
    //     return $this->hasOne(Project::class);
    // }

    public function curricolumns()
    {
        return $this->hasMany(Curricolumn::class);
    }

}
