<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;
    protected $fillable = ['title','description', 'url', 'filepath', 'category',];
    
            
    public function Resource()
    {
        return $this->hasMany(Resource::class);
    }
}


