<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'fecha_recepcion' => 'required',
			'descripcion_problema' => 'required|string',
			'estado_servicio' => 'required',
			'diagnostico' => 'string',
			'solucion' => 'string',
			'id_equipo' => 'required',
			'id_cliente' => 'required',
			'id_tecnico' => 'required',
        ];
    }
}
