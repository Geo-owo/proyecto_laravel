<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confirmados extends Model
{
    use HasFactory;
    protected $table = 'confirmados';
    protected $primarykey = 'estado_id';
    public $incrementing = false;
    public $timestamps = false;
    protected $attributes = ['fecha','casos']; 

    public function estado():BelongsTo{
        return $this->BelongsTo(Estado::class);
    }
}
