<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class PacienteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'IDENTIFICADOR' => $this->id,
            'NOMBRES' => Str::upper($this->nombres),
            'APELLIDOS' => Str::upper($this->apellidos),
            'EDAD' => $this->edad,
            'SEXO' => $this->sexo,
            'DNI' => $this->dni,
            'TIPO_DE_SANGRE' => Str::upper($this->tipo_sangre),
            'TELEFONO' => $this->telefono,
            'CORREO' => Str::upper($this->correo),
            'DIRECCION' => Str::upper($this->direccion),
            'FECHA_CREACION' => $this->created_at->format('d-m-Y'),
        ];
    }

    public function with($request)
    {
        return [
            'res' => true,
        ];
    }
}
