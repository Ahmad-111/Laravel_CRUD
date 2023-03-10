<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Block;

class Area extends Model
{
    use HasFactory;
    protected $table='areas';
    // protected $primaryKey="id";

    protected $fillable = [
        'id',
        'area_name',
    ];

    public function block() : HasMany
    {
     return $this->hasMany(Block::class,'area_id','id');
    }
}
