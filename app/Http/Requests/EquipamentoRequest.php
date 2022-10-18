<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
Use App\Models\Equipamento;

class EquipamentoRequest extends FormRequest
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
     * @return array
     */
    public function rules(){
        $rules = [
            'hostname' => 'required',
            'mesa' => 'required',
            'posicao' => 'required',
            'sala_id' => 'required'
        ];
       
        return $rules;
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'posicao' => preg_replace('/[^0-9]/', '', $this->posicao),
        ]);
    }

}