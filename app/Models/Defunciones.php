<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Defuncion extends Model
{
    use HasFactory;
    protected $table = 'defunciones';
    protected $primarykey = 'estado_id';
    public $incrementing = false;
    public $timestamps = false;
    protected $attributes = ['fecha','casos']; 
    public function estados():BelongsTo
    {
        return $this->belongsTo(Estado::class, 'estado_id');
    }
}
