<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightLocation extends Model
{
    use HasFactory;
    protected $fillable = ['flight_id', 'from', 'to'];

    public function flight() {
        return $this->belongsTo(Flight::class);
    }
}
