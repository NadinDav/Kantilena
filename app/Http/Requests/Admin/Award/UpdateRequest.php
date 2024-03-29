<?php

namespace App\Http\Requests\Admin\Award;

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
            'award' => 'required|file',
            'title' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'title.required'=> 'Это поле необходимо для заполнения',
            'title.string'=> 'Данные должные соответствовать строчному типу',
            'award.file'=> 'Необходимо выбрать файл',
            'award.required'=> 'Это поле необходимо для заполнения',
        ];
    }
}
