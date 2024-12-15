<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FruitsRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'integer', 'min:0', 'max:1000'],
            'season' => ['required'],
            'description' => ['required', 'string', 'max:120'],
            'image' => ['required', 'file', 'mimes:png,jpeg', 'max:255'],
        ];
    }

    public function messages()
    {
        return [

            'name.required' => '名前を入力してください',
            'price.required' => '値段を入力してください',
            'price.integer' => '数値で入力してください',
            'price.min' => '0~10000円以内で入力してください',
            'price.max' => '0~10000円以内で入力してください',
            'season.required' => '季節を選択してください',
            'description.required' => '商品説明を入力してください',
            'description.max' => '120文字以内で入力してください',
            'image.required' => '商品画像を登録してください',
            'image.mimas' => '「.png」または「.jpeg」形式でアップロードしてください',

        ];

    }
}
