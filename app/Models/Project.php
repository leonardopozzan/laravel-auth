<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','description','dev_lang','framework','team','git_link','diff_lvl'];

    public static function generateSlug($name){
        return Str::slug($name, '-');
    }
}
