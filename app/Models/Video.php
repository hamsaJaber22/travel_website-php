<?php

namespace App\Models;

use App\Models\Cat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','video','poster','type','cat_id'];

    public function cat(){
        return $this->belongsTo(Cat::class);
    }
}
