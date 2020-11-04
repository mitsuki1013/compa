<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProfileRequest extends FormRequest
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
            //
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'location' => 'required',
            'number_peoples' => 'required_without_all:number_people_first,number_people_second,number_people_single',
            'profile_img' => 'image|mimes:jpeg,png,jpg,gif'
        ];
    }

    public function messages() {
        return [
            'name.required' => '名前は必須項目です',
            'email.required' => 'メールは必須項目です',
            'gender.required' => '性別は必須項目です',
            'age.required' => '年齢は必須項目です',
            'location.required' => '場所は必須項目です',
            'number_peoples.required_without_all' => '人数は必須項目です',
            'profile_img' => '指定された拡張子（PNG/JPG/GIF）ではありません'
        ];
    }
}
