<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curricolumn extends Model
{
    use HasFactory;
    protected $fillable = [
        'curricolumn_name',
        'curricolumn_description',
        'status',
    ];
    public function author()
    {
        return $this->belongsTo(Author::class);
    }




}
