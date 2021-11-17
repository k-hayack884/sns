<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'username' => 'required|max:20',
            'password'=> 'required|alpha|max:12|min:8',
            'latitude'=> 'numeric|max:90|min:-90',
            'longitude'=> 'numeric|max:180|min:-180',
            
        ];
    }
     public function messages()
    {
        return [
            //[[パラメータ名].[ルール] => [エラーメッセージ], [パラメータ名].[ルール] => [エラーメッセージ], …]
            'username.required' => '名前を入力してください。',
            'username.max' => '名前を20文字以下で入力してください。',
            'password.required' => 'パスワードを入力してください。',
            'password.alpha' => 'パスワードはアルファベットで入力してください。',
            'password.max' => 'パスワードを12文字以下で入力してください。',
            'password.min' => 'パスワードを8文字以上で入力してください。',
            'latitude.numeric'=> '緯度は数値で入力ください。',
            'latitude.max'=> '緯度を正しく入力してください。',
            'latitude.min'=> '緯度を正しく入力してください。',
            'longitude.max'=> '経度を正しく入力してください。',
            'longitude.min'=> '経度を正しく入力してください。',
            'longitude.numeric'=> '経度は数値で入力ください。'
        ];
    }
}
