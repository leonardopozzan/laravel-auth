<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','description','dev_lang','framework','team','git_link','diff_lvl', 'image','type_id'];

    public static function generateSlug($name){
        return Str::slug($name, '-');
    }
    public function type() :BelongsTo{
        return $this->belongsTo(Type::class);
    }
}
