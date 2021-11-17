<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GreetingRequest extends FormRequest
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
            'username' => 'required|max:20'
        ];
        
    }
     public function messages()
    {
        return [
            //[[パラメータ名].[ルール] => [エラーメッセージ], [パラメータ名].[ルール] => [エラーメッセージ], …]
            'username.required' => '名前を入力してください。',
            'username.max' => '名前を20文字以下で入力してください。'
        ];
    }
}
