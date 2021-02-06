<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewAddRequest extends FormRequest
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
            'review' => 'min:5|max:300',
        ];
    }

    public function messages()
    {
        return [
            'review.min' => 'Ваш отзыв должен быть длиннее - минимум 5 символов',
            'review.max' => 'Ваш отзыв должен быть короче - максимум 300 символов',
        ];
    }
}
