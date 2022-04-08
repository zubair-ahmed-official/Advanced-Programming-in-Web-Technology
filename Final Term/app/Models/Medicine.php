<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function medicines()
    {
        return $this-> hasMany(Disease::class,'id');
    }
    public function medicines_diseases()
    {
        return $this-> hasMany(Medicines_Diseases::class,'Medicines_id');
    }
}
