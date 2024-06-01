<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tecnico
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $especialidad
 * @property $correo_electronico
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property Servicio[] $servicios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tecnico extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'apellidos', 'especialidad', 'correo_electronico', 'telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servicios()
    {
        return $this->hasMany(\App\Models\Servicio::class, 'id', 'id_tecnico');
    }
    

}
