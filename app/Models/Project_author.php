<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_author extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'user_id',
        'status'
    ];

    public function Author(){
        return $this->belongsTo(Author::class);
    }

}
