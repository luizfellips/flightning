<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightDetail extends Model
{
    use HasFactory;

    protected $fillable = ['flight_id', 'boarding', 'departure', 'arrival'];


    public function flight() {
        return $this->belongsTo(Flight::class);
    }
}
