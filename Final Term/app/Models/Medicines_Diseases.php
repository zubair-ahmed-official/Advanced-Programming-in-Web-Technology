<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicines_Diseases extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'medicines_diseases';
    protected $fillable = [
        'Medicines_id',
        'Diseases_id'
    ];
    public function medicine()
    {
        return $this-> belongsTo(Medicine::class,'Medicines_id');
    }
    public function disease()
    {
        return $this-> belongsTo(Disease::class,'Diseases_id');
    }
}
