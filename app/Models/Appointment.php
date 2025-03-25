<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['professional_id', 'user_id', 'appointment_date', 'status'];

    public function professional()
    {
        return $this->belongsTo(Professional::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
