<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Negativo extends Model
{
    use HasFactory;
    protected $table = 'negativos';
    protected $primarykey = 'estado_id';
    public $incrementing = false;
    public $timestamps = false;
    protected $attributes = ['fecha','casos']; 
    public function estados():BelongsTo
    {
        return $this->belongsTo(Estado::class, 'estado_id');
    }
}
