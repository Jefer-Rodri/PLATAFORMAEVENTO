<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Participante
 *
 * @property $id
 * @property $evento_id
 * @property $nombre
 * @property $apellido
 * @property $email
 * @property $telefono
 * @property $carrera
 * @property $created_at
 * @property $updated_at
 *
 * @property Evento $evento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Participante extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['evento_id', 'nombre', 'apellido', 'email', 'telefono', 'carrera'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function evento()
    {
        return $this->belongsTo(\App\Models\Evento::class, 'evento_id', 'id');
    }
    

}
