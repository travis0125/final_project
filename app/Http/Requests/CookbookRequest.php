<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CookbookRequest extends FormRequest
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
            'title' => 'required|min:3',
            'type' => 'required|min:2',
            'ingredient' => 'required',
            'flavor' => 'required',
            'step' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'title' => '名稱',
            'type' => '種類',
            'ingredient' => '食材',
            'flavor' => '調味料',
            'step' => '步驟',
        ];
    }
}
