<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'cost' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Заполни поле, дурак',
            'description.required' => 'Ты че все еще не понял?',
            'cost.required' => 'Ну без цены то как емае'
        ];
    }
}
