<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateCategoriecompteRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nom_categoriecompte' => [
                'required', 'string',
            ]
        ];
    }

    public function authorize()
    {
        return Gate::allows('categoriecompte_access');
    }
}