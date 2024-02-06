<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'plane',
        'boarding',
        'departure',
        'ticket_price',
        'from',
        'to',
        'arrival',
    ];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $searchFor = $filters['searchFor'] ?? 'flight'; // Default to 'flight' if 'searchFor' is not provided

            $query->where(function ($query) use ($searchFor) {
                $query->WhereHas('locations', function ($subquery) use ($searchFor) {
                    $subquery->where($searchFor, 'like', '%' . request('search') . '%');
                });
            });
        }
    }

    public function bookedFlights()
    {
        return $this->hasMany(BookedFlight::class);
    }

    public function details()
    {
        return $this->hasOne(FlightDetail::class);
    }

    public function locations()
    {
        return $this->hasOne(FlightLocation::class);
    }
}
