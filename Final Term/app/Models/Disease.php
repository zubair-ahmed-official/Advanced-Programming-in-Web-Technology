<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    public function diseases()
    {
        return $this-> belongsTo(Medicine::class,'id');
    }
    public function medicines_diseases()
    {
        return $this-> hasMany(Medicines_Diseases::class,'Diseases_id');
    }
}
