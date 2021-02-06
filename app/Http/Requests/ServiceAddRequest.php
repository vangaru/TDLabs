<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceAddRequest extends FormRequest
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
    public function rules()
    {
        return [
            'type' => 'string|min:6|max:12',
            'semester' => 'integer|min:1|max:9',
            'description' => 'min:7|max:100',
            'price' => 'min:3|max:15',
            'terms' => 'min:3|max:20',
        ];
    }

    public function messages()
    {
        return [
            'type.string' => 'Тип услуги должен быть строкового типа',
            'type.min' => 'Тип услуги должен быть длиннее - минимум 6 символов',
            'type.max' => 'Тип услуги должен быть короче - максимум 6 символов',

            'semester.integer' => 'Семестр должен быть числового типа',
            'semester.min' => 'Семестр должен содержать только один символ',
            'semester.max' => 'Семестр должен содержать только один символ',

            'description.min' => 'Описание услуги должно быть длиннее - минимум 7 символов',
            'description.max' => 'Описание услуги должно быть короче - максимум 100 символов',

            'price.min' => 'Цена должна быть длиннее - минимум 3 символа',
            'price.max' => 'Цена должна быть короче - минимум 15 символов',

            'terms.min' => 'Сроки должны быть длиннее - минимум 3 символа',
            'terms.max' => 'Сроки должны быть короче - максимум 20 символов',
        ];
    }
}
