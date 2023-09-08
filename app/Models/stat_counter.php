<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stat_counter extends Model
{
    use HasFactory;

    protected $fillable =[
        'project_id',
        'views',
        'download',
    ];

    public function Project_stat_counter(){
        return $this->hasone(Projects::class,'id','project_id');
    }
}
