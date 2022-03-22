<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dept;

class Student extends Model
{
    use HasFactory;
    
    public function dept()
    {
        return $this-> belongsTo(Dept::class,'did');
    }
}
