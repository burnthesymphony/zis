<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
 

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;
   
    public function Otoritas() :BelongsTo  
    {
     
        return $this->belongsTo(Otoritas::class,'id_otoritas');
    }
}
