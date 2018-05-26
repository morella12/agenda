<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch($this->method()){
            case "POST":
            //Criar novo registro
                return [
                    'foto' => 'nullable|sometimes|image|mimes:jpq,jpeg,png,gif',
                    'nome' => 'required|max:100',
                    'e-mail'  => 'email|max:200|unique:contatos',
                    'dataNascimento'=> 'date_format:"d/m/Y"'
                ];
            break;
            
            case "PUT":
            //Atualizar novo registro
            return [
                'foto' => 'nullable|sometimes|image|mimes:jpq,jpeg,png,gif',
                'nome' => 'required|max:100',
                'e-mail'  => 'email|max:200|unique:contatos,email,'.$this->id,
                'dataNascimento'=> 'date_format:"d/m/Y"'
            ];
            break;

            default:break;
        }
    }
    
    public function messages()
    {
        return [
            'nome' => 'O campo nome é obrigatório',
            'e-mail'  => 'Por favor informe um e-mail vaálido',
            'dataNascimento.date_format' => 'A data deve ser preenchida da seguinte maneira: 21/03/2018'
        ];
    }
}
