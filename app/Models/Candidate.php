<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $fillable=[
         'full_name',
         'email',
         'adress',
        'number',
        'cv',
        'letter',
        'offer_id',
    ];

    public function Offers(){
        return $this->belongsToMany(Offer::class);
    }
}
