<?php

namespace App\Models\Theme;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'phone', 'email', 'city', 'address'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
