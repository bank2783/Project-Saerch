<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    use HasFactory;

    protected $fillable = [
        'advisor_name',
        'advisor_tel',
        'advisor_email',
        'status',
    ];

    public function project(){
        return $this -> belongsTo(Projects::class);
    }

}
