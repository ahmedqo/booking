<?php

namespace App\Models;

use App\Traits\HasSearch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory, HasSearch;

    protected $fillable = [
        'excursion',
        'last_name',
        'first_name',
        'pick_up_location',
        'number_of_people',
        'date',
        'country',
        'phone',
        'email',
    ];
}
