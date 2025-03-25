<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'specialization', 'bio'];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}


