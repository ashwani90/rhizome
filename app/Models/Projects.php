<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectImage;

class Projects extends Model
{
    use HasFactory;
    protected $table = 'projects';

    public $timestamps = false;


    public function projectImages()
    {
        return $this->hasMany(ProjectImage::class);
    }
}
