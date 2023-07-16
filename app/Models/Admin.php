<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=[
         'fullname',
         'email',
         'password',
         'number',
         'company',
         'company_id',
         'image',
    ];

    public function offers(){
        return $this->hasMany(Offer::class);
    }
}
