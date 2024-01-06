<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
 

class Otoritas extends Model
{
    use HasFactory;
     
    protected $table = 'otoritas';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;

     
    public function user():HasMany{
        return $this->hasMany(User::class,'id_otoritas','id');
    }
}
