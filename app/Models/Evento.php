<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evento
 *
 * @property $id
 * @property $nombre_evento
 * @property $descripcion
 * @property $fecha_inicio
 * @property $ubicacion
 * @property $organizador
 * @property $categoria
 * @property $created_at
 * @property $updated_at
 *
 * @property Participante[] $participantes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evento extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_evento', 'descripcion', 'fecha_inicio', 'ubicacion', 'organizador', 'categoria'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function participantes()
    {
        return $this->hasMany(\App\Models\Participante::class, 'id', 'evento_id');
    }
    

}
