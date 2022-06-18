<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'razonsocial' => [
                'required',
                'min:3'
            ],
            // 'iva_id' => [
            //     ''
            // ],
            // 'telefono1' => [
            // ],
            // 'correo' => [
            //     'required',
            //     'email',
            //     'unique:clientes,correo' . $this->cliente->id
            // ],
            // 'calle_nombre' => [
            // ],
            // 'calle_numero' => [
            // ],
            // 'fecha_alta' => [
            // ]

        ];

    }
}
