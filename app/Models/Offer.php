<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = [
        'title',
        'description',
           'img_path',
           'category',
           'admin_id',
           'city',
           'adress',
           'company',
    ];

    public function Admin(){
        return $this->belongsTo(Admin::class);
    }

    public function Candidates(){
        return $this->belongsToMany(Candidate::class);
    }
}
