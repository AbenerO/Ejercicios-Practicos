<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $id
 * @property $fecha_recepcion
 * @property $descripcion_problema
 * @property $estado_servicio
 * @property $diagnostico
 * @property $solucion
 * @property $id_equipo
 * @property $id_cliente
 * @property $id_tecnico
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Equipo $equipo
 * @property Tecnico $tecnico
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_recepcion', 'descripcion_problema', 'estado_servicio', 'diagnostico', 'solucion', 'id_equipo', 'id_cliente', 'id_tecnico'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'id_cliente', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function equipo()
    {
        return $this->belongsTo(\App\Models\Equipo::class, 'id_equipo', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tecnico()
    {
        return $this->belongsTo(\App\Models\Tecnico::class, 'id_tecnico', 'id');
    }
    

}
