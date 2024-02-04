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

    public function scopeFilter($query, array $filters) {
        if ($filters['search'] ?? false) {
            $query->where(request('searchFor'), 'like', '%' . request('search') . '%');
        }
    }

    public function bookedFlights()
    {
        return $this->hasMany(BookedFlight::class);
    }
}
