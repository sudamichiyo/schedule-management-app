<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleRequest extends FormRequest
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
        // データ入力時のルールを記述する
        return [
            'title' => 'required',
            'begin' => 'required',
            'end' => 'required',
            'place' => 'required',
            'content' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
          'title.required'  => 'タイトルは必須項目です。',
          'begin.required'  => '開始日時は必須項目です。',
          'end.required'  => '終了日時は必須項目です。',
          'place.required'  => '場所は必須項目です。',
          'content.required'  => '内容は必須項目です。',
        ];
    }
}
