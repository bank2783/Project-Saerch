<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name_th',
        'project_name_en',
        'project_abstract_th',
        'project_abstract_en',
        'project_keyword_th',
        'project_keyword_en',
        'project_bookfile',
        'author_id',
        'user_id',
        'advisor_id',
        'category_id',
        'curricolumn_id',
        'status',
    ];

    public function Advisor(){
        return $this->hasOne(Advisor::class,'id','advisor_id');
    }


    public function curricolumn(){
        return $this->belongsTo(curricolumn::class,'curricolumn_id','id');
    }

    public function Author(){
        return $this->hasOne(Author::class,'id','author_id');
    }

    public function Category(){
        return $this->hasOne(Category::class,'id','category_id');
    }







}
