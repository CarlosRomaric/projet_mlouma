<?php

namespace App\Http\Requests\Culture;

use Illuminate\Foundation\Http\FormRequest;

class CultureRequest extends FormRequest
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
            'plot_id'=>'required',
            'name'=>'required',
            'date_debut'=>'required',
            'date_fin'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'plot_id.required'=>'le choix de la parcelle est obligatoire',
            'name.required'=>'le nom de la culture est obligatoire',
            'date_debut.required'=>'Vous devez renseigner la date de mise en place de la culture',
            'date_fin.required'=>'vous devez renseigner la date provisoire de la récolte'
        ];
    }
}
